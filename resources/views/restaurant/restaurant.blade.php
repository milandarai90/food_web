@extends('layouts.main')

@section('content')
<aside>
    <div class="layout-restaurant-index">
        <div class="restaurant-index-wrapper container">
            <div class="restaurant-section">
                <header class="d-flex justify-content-center">
                    <h3>ABOUT RESTAURANTS</h3>
                </header>

                <div class="row d-flex justify-content-between">
                    @foreach ($restaurant as $item)
                    <div class="about-restaurant-wrapper col-6">
                        <div class="about-restaurant d-flex">
                            <div class="restaurant-description p-5 col-9">
                                <div class="header">
                                    <h5>{{ $item->restaurant_name }}</h5>
                                </div>
                                <div class="address">
                                    <span>ADDRESS:</span><span>{{ $item->address }}</span>
                                </div>
                                <div class="contact">
                                    <span>CONTACT:</span><span>{{ $item->contact1 }}</span>
                                </div>
                                <div class="email">
                                    <span>EMAIL:</span><span>{{ $item->email }}</span>
                                </div>
                                <div class="owner">
                                    <span>PROPRIETOR:</span><span>{{ $item->restaurant_owner }}</span>
                                </div>
                            </div>
                            <div class="restaurant-image col-3 d-flex justify-content-center align-items-center">
                                <div class="image-section">
                                    <img src="{{ asset('storage/images/'. '1696180884.restaurant-trail.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($loop->iteration % 2 == 0)
                </div>
                <div class="row d-flex justify-content-between">
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</aside>
<style>
    .restaurant-section header{
            padding: 40px 0;
        }
    .about-restaurant {
        background-color: #1e1817;
        margin: 1rem 0;

    }
</style>
@endsection
