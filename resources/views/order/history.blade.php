@extends('layouts.main')

@section('content')
<aside>
    <div class="layout-user-history">
        <div class="user-history-wrapper container">
            <div class="user-history-section">
                <div class="header d-flex justify-content-center p-5">
                    <header>
                        <h3>User History - {{ Auth::user()->name }}</h3>
                    </header>
                </div>
                {{-- @php
                $totalAmount = 0; // Initialize the total amount variable
                @endphp --}}
                <div class="table-layout ">
                    <div class="table-wrapper table-responsive">
                        @foreach ($order as $orders)
                        @php
                        $totalAmount = 0;
                        @endphp
                        <div class="null pt-5"></div>
                        <table class="table table-hover table-bordered text-uppercase">
                            <thead class="thead">
                                <tr>
                                    <th>SN</th>
                                    {{-- <th>Date</th> --}}
                                    <th>Name</th>
                                    <th>Restaurant</th>
                                    <th>price</th>
                                    <th>quantity</th>
                                    <th>amount</th>
                                </tr>
                            </thead>
                            {{-- @dd($orders) --}}
                            <tbody class="tbody">
                                {{-- @dd($total_amount) --}}
                                @foreach ($orders as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td>{{ $item->created_at }}</td> --}}
                                    <td>{{ $item->price->priceFood->name }}</td>
                                    <td>{{ $item->price->priceRestaurant->restaurant_name }}</td>
                                    <td style="text-align: center">Rs {{ $item->price->price }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td style="text-align: center">Rs {{ $item->total_amount }}</td>
                                </tr>
                                @php
                                $totalAmount += $item->total_amount; // Add item price to totalamount
                                @endphp
                                @endforeach
                            </tbody>
                            {{-- @dd($totalAmount) --}}
                            <tfoot class="tfoot">
                                <tr>
                                    <td colspan="5" style="text-align: center">Total Amount</td>
                                    <td style="text-align: center">
                                        <header>Rs {{ $totalAmount }}</header>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
@endsection
