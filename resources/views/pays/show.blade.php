@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Show Order
                        <a href="{{ URL('orders') }}" class="btn btn-success float-right">List</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ URL('pays/callback') }}/{{$order->channel_code}}">
                            @csrf
                            <input type="hidden" name="order_num" value="{{$order->order_num}}">

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">Order Number</label>
                                <input type="text" class="col-md-6" name="order_num" disabled value="{{ $order->order_num }}">
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">Account</label>
                                <input type="text" class="col-md-6" disabled value="{{ $order->account }}">
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">Created_at</label>
                                <input type="text" class="col-md-6" disabled value="{{ $order->created_at }}">
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">PayType</label>
                                <input type="text" class="col-md-6" disabled
                                       value="{{ $order->channel_name }}-{{ $order->type_name }}">
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">Status</label>
                                <input type="text" class="col-md-6" disabled value="{{ $order->status }}">
                            </div>

                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Pay Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
