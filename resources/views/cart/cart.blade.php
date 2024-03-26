@extends('layouts.main')

@section('content')
<aside>
    <div class="layout-cart">
        <div class="cart-wrapper container">
            <div class="cart-section">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="heading d-flex justify-content-center p-5">
                    <header>
                        <h3>My Cart</h3>
                    </header>
                </div>

                <div class="main-cart-division d-flex justify-content-between">
                    <div class="cart-detail-section p-3 col-8" style="background-color: #1e1817">
                        @php
                        $totalAmount = 0; // Initialize the total amount variable
                        @endphp
                        @foreach ($cart as $item)
                        <div class="solo-cart-details row">
                            <div class="detail-sector col-6">
                                <span><strong>
                                        <h4>{{ $item->cartPrice->priceFood->name }}</h4>
                                    </strong></span>
                                <span>{{ $item->cartPrice->priceRestaurant->restaurant_name }}</span><br>
                                <span>{{ $item->cartPrice->price }}</span>
                            </div>
                            {{-- <div class="quantity col-3 d-flex justify-content-center pt-3">
                                <span>- </span><span>{{ $item->quantity }} </span><span>+</span>
                            </div> --}}
                            <div class="col-3"></div>
                            <div class="total-price col-3 d-flex justify-content-center pt-5">
                                <span>{{ $item->cartPrice->price * $item->quantity }}</span>
                            </div>
                        </div><br>
                        @php
                        $totalAmount += $item->cartPrice->price * $item->quantity; // Add item price to total amount
                        @endphp
                        @endforeach
                    </div>
                    <div class="right-side-cart col-3">
                        <div class="cart-summary p-3" style="background-color: #1e1817">
                            <div class="heading d-flex justify-content-center p-3">
                                <header>
                                    <h4>Cart Summary</h4>
                                </header>
                            </div>
                            <div class="no-of-items d-flex justify-content-between">
                                <span>No. of items</span><span>{{ count($cart) }}</span>
                            </div>
                            <div class="total-amount d-flex justify-content-between">
                                <span>Total Amount</span><span>Rs {{ $totalAmount }}</span>
                            </div>
                        </div><br>
                        <div class="add-more-order p-3" style="background-color: #1e1817">
                            <div class="add-more d-flex justify-content-center">
                                <a href="menu" class="col-8  btn btn-light "><span style="color:black;"><i class="bi bi-cart-fill text-dark"></i>Add
                                        more items</span></a>
                            </div><br>
                            <div class="order-place d-flex justify-content-center">
                                <a href="{{ route('order.create') }}"><button class="order-btn btn">Order</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<style>
    .order-btn {
        border-color: #ffa31a;
        border-radius: 8px;
        border-width: 2px;
        color: #eeeeee;
        background-color: #16100f;
        /* border-color: #eeeeee; */
    }

    .order-btn:hover {
        background-color: #ffa31a;
        color: #000000;
        font-weight: bold;
        border-color: #eeeeee;
    }
</style>
@endsection
