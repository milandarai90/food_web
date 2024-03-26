@extends('admins.layouts.main')

@section('admins-content')
<aside>
    <div class="layout-order-restaurant">
        <div class="order-restaurant-wrapper container">
            <div class="order-restaurant-section">
                <div class="heading d-flex justify-content-center">
                    <header>
                        <h3>Orders Received</h3>
                    </header>
                </div>
                <div class="order-restaurant-table table-responsive">
                    @foreach ($orders as $order)
                    {{-- @dd($order->order->receiver); --}}
                    {{-- @dd($order); --}}
                    <div class="order_name d-flex justify-content-center pt-5">
                        {{-- <header><h5>{{ $order->order->userID->name }}</h5></header> --}}
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead class="thead">
                            <tr>
                                <th>SN</th>
                                <th>FOOD</th>
                                <th>Status</th>
                                <th>EDIT</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            @foreach ($order as $item)
                            {{-- @dd($orders); --}}
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->price->priceFood->name }}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</aside>
@endsection
