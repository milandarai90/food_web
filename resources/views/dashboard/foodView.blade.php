@extends('layouts.main')

@section('content')
    <aside>
        <div class="layout-food-view">
            <div class="food-view-wrapper container">
                <div class="food-view-section">
                    <div class="heading d-flex justify-content-center p-5">
                        <header><h3>MENU</h3></header>
                    </div>
                    {{-- @dd($price) --}}
                    <div class="food-view-section-main ">
                        {{-- <span>Name: </span><strong>{{ $food->name }}</strong>
                        @foreach ($price as $item)
                            <div class="food-view-detail " style="border: 2px solid gray; padding:2rem;">
                                <strong>{{ $item->priceRestaurant->restaurant_name }}</strong><span>{{ $item->price }}</span>
                            </div>
                        @endforeach --}}
                        <div class="table-section table-responsive">
                            <div class="name-section" style="font-size: 1.2rem;">
                                <span>Name: </span><strong>{{ $food->name }}</strong>
                            </div>
                            <table class="table table-hover table-bordered text-uppercase">
                                <thead class="thead">
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Restaurant</th>
                                        <th>Price</th>
                                        <th>ADD TO CART</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                    @foreach ($price as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->priceFood->name }}</td>
                                        <td>{{ $item->priceRestaurant->restaurant_name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td> @if($user)
                                            <form method="POST" action="{{ route('cart.store', ['cart' => $item->id]) }}">
                                                @csrf
                                                @method('POST')
                                                <input hidden type="text" name="food_price" id="" value={{ $item->id }}>
                                                <button type="submit" class="btn"><i class="bi bi-cart-fill fs-4 "></i></button>
                                            </form>
                                            {{-- <a href="/cart/store/{{  }}"><i class="bi bi-cart-fill fs-4 "></i><span style="font-size: 1rem">Add to Cart</span></a> --}}
                                            @else
                                            <span>{{ 'Login to access this.' }}</span>
                                        @endif
                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
@endsection
