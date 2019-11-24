<?php

namespace App\Http\Controllers;

use App\Library\SslCommerz\SslCommerzNotification;
use App\Order;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function index($order_id)
    {
        $data['order']= Order::findOrFail($order_id);
        if($data['order']->payment_status == 'unpaid') {
            $response = json_decode($this->paymentInit($order_id));
            $data['url'] = $response->data;
            return view('front.payment', $data);
        }
        return redirect()->route('payment.confirmation');
    }
    public function paymentInit($order_id)
    {
        $order = Order::with(['client','orderDetails'])->findOrFail($order_id);
        # Here you have to receive all the order data to initate the payment.
        # Lets your oder trnsaction informations are saving in a table called "orders"
        # In orders table order uniq identity is "transaction_id","status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount'] = $order->total_amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $order->client->name;
        $post_data['cus_email'] = $order->client->email;
        $post_data['cus_add1'] = $order->client->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = $order->client->phone;
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = $order->id;
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        return $sslc->makePayment($post_data, 'checkout', 'json');

    }
    public function success(Request $request)
    {
        DB::beginTransaction();
        try{
            $order = Order::findOrFail($request->value_a);
            $order->payment_status = Order::PS_PAID;
            $order->payment_type = Order::PT_ONLINE;
            $order->status = Order::STATUS_PROCESSING;
            $order->save();

            $transaction = new Transaction();
            $transaction->order_id = $order->id;
            $transaction->amount = $request->amount;
            $transaction->card_type = $request->card_type;
            $transaction->transaction_date = $request->tran_date;
            $transaction->status = Transaction::STATUS_SUCCESS;
            $transaction->transaction_data = json_encode($request->all());
            $transaction->save();

            DB::commit();
            return redirect()->route('payment.confirmation');
        }catch (\Exception $exception){
            DB::rollBack();
            Log::info(json_encode($request->all()));
            Log::error($exception->getMessage());
            return redirect()->route('payment.index',$request->value_a);
        }
    }
    public function payment_confirmation()
    {
        return view('front.payment_confirmation');
    }
}
