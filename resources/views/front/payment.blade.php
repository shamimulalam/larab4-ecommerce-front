@extends('layouts.front.master')
@section('title','Make payment')
@section('content')
    <div class="row">
        <div id="content" class="col-md-12">
            <h2 class="title">Order confirmation</h2>
            <a href="{{ $url }}" target="_blank" class="btn btn-info btn-lg">Make Payment</a>

        </div>
    </div>
@endsection