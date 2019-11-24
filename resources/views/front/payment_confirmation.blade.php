@extends('layouts.front.master')
@section('title','Payment confirmation')
@section('content')
    <div class="row">
        <div id="content" class="col-md-12">
            <h2 class="title">Thanks for your payment.</h2>
            <a href="{{ route('home') }}" class="btn btn-info btn-lg">Continue Shopping</a>
        </div>
    </div>
@endsection