@extends('layouts.front.master')
@section('title','Checkout')
@section('custom-js')
    <script src="{{ asset('assets/front/js/cart.js') }}"></script>
@endsection
@section('content')

    <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
            <h2 class="title">Shopping Cart</h2>
            <div class="table-responsive form-group">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td class="text-center">Image</td>
                        <td class="text-left">Product Name</td>
                        <td class="text-left">Quantity</td>
                        <td class="text-right">Unit Price</td>
                        <td class="text-right">Total</td>
                    </tr>
                    </thead>
                    <tbody class="cartView">
                    </tbody>
                </table>
            </div>
            <h3 class="subtitle no-margin">Registration form</h3>
            <p>Register yourself</p>

            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">Registration

                                <i class="fa fa-caret-down"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse-coupon" class="panel-collapse collapse in" aria-expanded="true">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-name">Name</label>
                                <input type="text" name="name" placeholder="Enter your name here" id="input-name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-email">Email</label>
                                <input type="email" name="email" placeholder="Enter your email here" id="input-email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-phone">Phone</label>
                                <input type="text" name="phone" placeholder="Enter your phone here" id="input-phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="input-address">Address</label>
                                <textarea class="form-control" name="address" id="input-address" cols="30" rows="5" placeholder="Enter your address here"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td class="text-right">
                                <strong>Total:</strong>
                            </td>
                            <td class="text-right cart-total">0</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="buttons">
                <div class="pull-left"><a href="index.html" class="btn btn-primary">Continue Shopping</a></div>
                <div class="pull-right"><a href="#" class="btn btn-primary checkoutBtn" cus-url="{{ route('checkout.submit') }}">Checkout</a></div>
            </div>
        </div>
        <!--Middle Part End -->

    </div>
    <url val="{{ route('payment.index') }}"></url>
@endsection