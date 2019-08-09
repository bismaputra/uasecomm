@extends('client.layout')

@section('content')
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="checkout_details_area mt-50 clearfix">
                        <div class="cart-title">
                            <h2>Payment Information</h2>
                        </div>
                        @include('message')
                        <p>Please transfer in 1 x 24 hours to complete your order.</p>
                        <p class="text-center"><strong>PT. Amado Sederhana</strong></p>
                        <div class="row">
                            <div class="col-6 text-center">
                                <img src="{{ asset('client/img/gopay.jpg') }}" alt="" style="width: 60%">
                                <p>0818 2218 9210</p>
                            </div>
                            <div class="col-6 text-center">
                                <img src="{{ asset('client/img/dana.jpg') }}" alt="" style="width: 60%">
                                <p>0818 2218 9210</p>
                            </div>
                            <div class="col-6 text-center">
                                <img src="{{ asset('client/img/mandiri.png') }}" alt="" style="width: 60%">
                                <p>123123 182738</p>
                            </div>
                            <div class="col-6 text-center">
                                <img src="{{ asset('client/img/bca.png') }}" alt="" style="width: 60%">
                                <p>772817 32178</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="cart-summary">
                        <h5>Total Payment</h5>
                        <ul class="summary-table">
                            <li><span>subtotal:</span> <span>@rupiah($transaksi->total_harga)</span></li>
                            <li><span>delivery:</span> <span>Free</span></li>
                            <li><span>total:</span> <span>@rupiah($transaksi->total_harga)</span></li>
                        </ul>
                        <div class="cart-btn mt-100">
                            <a href="{{ url('/order') }}" class="btn amado-btn w-100">Go to my orders</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
