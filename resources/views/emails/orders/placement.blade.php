@component('mail::message')
# Dear {{ $order->client->name }},

Your order has been placed successfully. Your invoice id - {{ $order->invoice_id }}

Your order details is as bellow.
<table>
    <tr>
        <th>Id</th>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Subtotal</th>
    </tr>
    @foreach($order->orderDetails as $id=>$orderDetail)
    <tr>
        <td>{{ $id++ }}</td>
        <td>{{ $orderDetail->product_name }}</td>
        <td>{{ $orderDetail->quantity }}</td>
        <td>{{ $orderDetail->unit_price }}</td>
        <td>{{ $orderDetail->subtotal }}</td>
    </tr>
    @endforeach
    <tr>
        <td colspan="4">Total</td>
        <td>{{ $order->total_amount }}</td>
    </tr>
</table>

NB: Please payment for order confirmation.

@component('mail::button', ['url' => '#'])
Make Payment
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
