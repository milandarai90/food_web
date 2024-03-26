@extends('layouts.main')

@section('content')
<aside>
    <div class="layout-home-page">
        <div class="home-page-wrapper">
            <div class="home-page-section">
                <div class="theme-wrapper">
                    <div class="theme-section">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="{{ asset('storage/images/'. '1696176975.slider2.PNG') }}"
                                        class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <a href=""><button class="btn btn-outline-light">ORDER NOW</button></a>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="{{ asset('storage/images/'. '1696176987.slider3.PNG') }}"
                                        class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <a href=""><button class="btn btn-outline-light">ORDER NOW</button></a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/images/'. '1696176992.slider4.PNG') }}"
                                        class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <a href=""><button class="btn btn-outline-light">ORDER NOW</button></a>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="restaurant-section">
                        <div class="restaurant-header container p-5">
                            <header>
                                <h3 style="font-size: 32px; font-weight: bold;">TOP RESTAURANTS</h3>
                            </header>
                        </div>
                        <div class="restaurant-details">
                            <div class="row d-flex justify-content-between container">
                                @foreach ($restaurant as $item)
                                <div class="restaurant-row col-6 p-5 d-flex justify-content-between">
                                    <div class="details">
                                        <div class="details-header">
                                            <h5>{{ $item->restaurant_name }}</h5>
                                        </div><br>
                                        <div class="other-details">
                                            <span>{{ $item->address }}</span><br>
                                            <span>{{ $item->contact1 }} | @if($item->contact2) {{ $item->contact2 }}
                                                @endif</span><br>
                                            <span>{{ $item->email }}</span><br>
                                            <span>{{ $item->restaurant_owner }}</span><br>
                                        </div>
                                    </div>
                                    <div class="image-section">
                                        <img src="{{ asset('storage/images/'. '1696180884.restaurant-trail.png') }}"
                                            alt="...">
                                    </div>
                                </div>
                                {{-- @if($item->iteration == '2') --}}

                                @endforeach
                                {{-- @endif --}}

                                {{-- <div class="restaurant-row col-6 p-5 d-flex justify-content-between">
                                    <div class="details">
                                        <div class="details-header">
                                            <h5>RESTAURANT A</h5>
                                        </div><br>
                                        <div class="other-details">
                                            <span>ADDRESS:Lorem Ispusm</span><br>
                                            <span>CONTACT:9808098392</span><br>
                                            <span>EMAIL:something@gmail.com</span><br>
                                            <span>PROPRIETOR:Restaurant Owner</span><br>
                                        </div>
                                    </div>
                                    <div class="image-section">
                                        <img src="{{ asset('storage/images/'. '1696180884.restaurant-trail.png') }}"
                                            alt="...">
                                    </div>
                                </div> --}}
                            </div>
                            <div class="view-more-restaurant d-flex justify-content-center p-2">
                                <a href="/restaurants"><span>View more...</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="featured-section">
                        <div class="featured-header container p-5">
                            <header>
                                <h3 style="font-size: 32px; font-weight: bold;">FEATURED ITEMS</h3>
                            </header>
                        </div>
                        <div class="featured-details">
                            <div class="featured-items row">
                                {{-- @dd($categoryinfo[3]->category->categoryImage->image->path) --}}
                                @foreach ($categoryinfo as $item)
                                <div class="featured-solos p-4 col-3">
                                    <div class="featured-image-section">
                                        {{-- @foreach ($images as $items) --}}

                                        <img src="{{ asset('storage/images/'. $item->category->categoryImage->image->path ) }}"
                                            alt="">
                                        {{-- @endforeach --}}
                                    </div>
                                    <div class="name-section d-flex justify-content-center p-2">
                                        <span>{{ $item->food->name }}</span>
                                    </div>
                                </div>

                                @endforeach
                                {{-- <div class="featured-solos p-4 col-3">
                                    <div class="featured-image-section">
                                        <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                    </div>
                                    <div class="name-section d-flex justify-content-center p-2">
                                        <span>Mo:Mo:</span>
                                    </div>
                                </div>
                                <div class="featured-solos p-4 col-3">
                                    <div class="featured-image-section">
                                        <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                    </div>
                                    <div class="name-section d-flex justify-content-center p-2">
                                        <span>Mo:Mo:</span>
                                    </div>
                                </div>
                                <div class="featured-solos p-4 col-3">
                                    <div class="featured-image-section">
                                        <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                    </div>
                                    <div class="name-section d-flex justify-content-center p-2">
                                        <span>Mo:Mo:</span>
                                    </div>
                                </div>
                                <div class="featured-solos p-4 col-3">
                                    <div class="featured-image-section">
                                        <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                    </div>
                                    <div class="name-section d-flex justify-content-center p-2">
                                        <span>Mo:Mo:</span>
                                    </div>
                                </div>
                                <div class="featured-solos p-4 col-3">
                                    <div class="featured-image-section">
                                        <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                    </div>
                                    <div class="name-section d-flex justify-content-center p-2">
                                        <span>Mo:Mo:</span>
                                    </div>
                                </div>
                                <div class="featured-solos p-4 col-3">
                                    <div class="featured-image-section">
                                        <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                    </div>
                                    <div class="name-section d-flex justify-content-center p-2">
                                        <span>Mo:Mo:</span>
                                    </div>
                                </div>
                                <div class="featured-solos p-4 col-3">
                                    <div class="featured-image-section">
                                        <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                    </div>
                                    <div class="name-section d-flex justify-content-center p-2">
                                        <span>Mo:Mo:</span>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="view p-3 d-flex justify-content-center pb-4">
                                <a href="/menu"><span>View more...</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="popular-section">
                        <div class="popular-header container p-5">
                            <header>
                                <h3>POPULAR ITEMS</h3>
                            </header>
                        </div>
                        <div class="popular-details-section">
                            <div class="container">
                                <div class="row">
                                    @foreach ($category as $item)
                                    <div class="popular-solos-detail p-4 col-6 d-flex justify-content-between">
                                        <div class="popular-image-section col-5">
                                            <img src="{{ asset('storage/images/'.$item->categoryImage->image->path) }}"
                                                alt="">
                                        </div>
                                        <div
                                            class="popular-details col-6 d-flex justify-content-center align-items-center">
                                            <div class="popular-details-sections ">
                                                <span style="font-size: 28px; font-weight:bold;"
                                                    class="d-flex justify-content-center text-small">{{ $item->name }}
                                                </span>
                                                {{-- <span style="font-size: 20px; font-weight:bold;"
                                                    class="d-flex justify-content-center">(960 order/week)</span> --}}
                                                <span style="font-size: 24px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Rs 250</span><br>
                                                <div class="buttons d-flex justify-content-between">
                                                    <div class="add p-1">
                                                        <a href="/cart"><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-cart-fill text-dark"></i>Add</button></a>
                                                    </div>
                                                    <div class="view p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-eye-fill"
                                                                    style="color: #ffa31a"></i>View</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="popular-solos-detail p-4 col-6 d-flex justify-content-between">
                                        <div class="popular-image-section col-5">
                                            <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                        </div>
                                        <div
                                            class="popular-details col-6 d-flex justify-content-center align-items-center">
                                            <div class="popular-details-sections ">
                                                <span style="font-size: 28px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Buff Mo:Mo: </span>
                                                <span style="font-size: 20px; font-weight:bold;"
                                                    class="d-flex justify-content-center">(960 order/week)</span>
                                                <span style="font-size: 24px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Rs. 180</span><br>
                                                <div class="buttons d-flex justify-content-between">
                                                    <div class="add p-1">
                                                        <a href="/cart"><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-cart-fill text-dark"></i>Add</button></a>
                                                    </div>
                                                    <div class="view p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-eye-fill"
                                                                    style="color: #ffa31a"></i>View</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="row">
                                    <div class="popular-solos-detail p-4 col-6 d-flex justify-content-between">
                                        <div class="popular-image-section col-5">
                                            <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                        </div>
                                        <div
                                            class="popular-details col-6 d-flex justify-content-center align-items-center">
                                            <div class="popular-details-sections ">
                                                <span style="font-size: 28px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Buff Mo:Mo: </span>
                                                <span style="font-size: 20px; font-weight:bold;"
                                                    class="d-flex justify-content-center">(960 order/week)</span>
                                                <span style="font-size: 24px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Rs. 180</span><br>
                                                <div class="buttons d-flex justify-content-between">
                                                    <div class="add p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-cart-fill text-dark"></i>Add</button></a>
                                                    </div>
                                                    <div class="view p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-eye-fill"
                                                                    style="color: #ffa31a"></i>View</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popular-solos-detail p-4 col-6 d-flex justify-content-between">
                                        <div class="popular-image-section col-5">
                                            <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                        </div>
                                        <div
                                            class="popular-details col-6 d-flex justify-content-center align-items-center">
                                            <div class="popular-details-sections ">
                                                <span style="font-size: 28px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Buff Mo:Mo: </span>
                                                <span style="font-size: 20px; font-weight:bold;"
                                                    class="d-flex justify-content-center">(960 order/week)</span>
                                                <span style="font-size: 24px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Rs. 180</span><br>
                                                <div class="buttons d-flex justify-content-between">
                                                    <div class="add p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-cart-fill text-dark"></i>Add</button></a>
                                                    </div>
                                                    <div class="view p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-eye-fill"
                                                                    style="color: #ffa31a"></i>View</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="view-more d-flex justify-content-center p-3 pb-4">
                                    <a href="/menu"><span>View more...</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="new-items-section">
                        <div class="popular-header container p-5">
                            <header>
                                <h3>NEW ITEMS</h3>
                            </header>
                        </div>
                        <div class="popular-details-section">
                            <div class="container">
                                <div class="row">
                                    @php
                                    $sorted = collect($category)->sortBy('name');
                                    @endphp

                                    @foreach ($sorted as $item)
                                    <div class="popular-solos-detail p-4 col-6 d-flex justify-content-between">
                                        <div class="popular-image-section col-5">
                                            <img src="{{ asset('storage/images/'.$item->categoryImage->image->path) }}"
                                                alt="">
                                        </div>
                                        <div
                                            class="popular-details col-6 d-flex justify-content-center align-items-center">
                                            <div class="popular-details-sections ">
                                                <span style="font-size: 28px; font-weight:bold;"
                                                    class="d-flex justify-content-center">{{ $item->name }}</span>
                                                <span style="font-size: 20px; font-weight:bold;"
                                                    class="d-flex justify-content-center"><i class="bi bi-star-fill"
                                                        style="color: #ffa31a"></i> &nbsp;4.9</span>
                                                <span style="font-size: 24px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Rs. 180</span><br>
                                                <div class="buttons d-flex justify-content-between">
                                                    <div class="add p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-cart-fill text-dark"></i>Add</button></a>
                                                    </div>
                                                    <div class="view p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-eye-fill"
                                                                    style="color: #ffa31a"></i>View</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="popular-solos-detail p-4 col-6 d-flex justify-content-between">
                                        <div class="popular-image-section col-5">
                                            <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                        </div>
                                        <div
                                            class="popular-details col-6 d-flex justify-content-center align-items-center">
                                            <div class="popular-details-sections ">
                                                <span style="font-size: 28px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Buff Mo:Mo: </span>
                                                <span style="font-size: 20px; font-weight:bold;"
                                                    class="d-flex justify-content-center"><i class="bi bi-star-fill"
                                                        style="color: #ffa31a"></i> &nbsp;4.9</span>
                                                <span style="font-size: 24px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Rs. 180</span><br>
                                                <div class="buttons d-flex justify-content-between">
                                                    <div class="add p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-cart-fill text-dark"></i>Add</button></a>
                                                    </div>
                                                    <div class="view p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-eye-fill"
                                                                    style="color: #ffa31a"></i>View</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="row">
                                    <div class="popular-solos-detail p-4 col-6 d-flex justify-content-between">
                                        <div class="popular-image-section col-5">
                                            <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                        </div>
                                        <div
                                            class="popular-details col-6 d-flex justify-content-center align-items-center">
                                            <div class="popular-details-sections ">
                                                <span style="font-size: 28px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Buff Mo:Mo: </span>
                                                <span style="font-size: 20px; font-weight:bold;"
                                                    class="d-flex justify-content-center"><i class="bi bi-star-fill"
                                                        style="color: #ffa31a"></i> &nbsp;4.9</span>
                                                <span style="font-size: 24px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Rs. 180</span><br>
                                                <div class="buttons d-flex justify-content-between">
                                                    <div class="add p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-cart-fill text-dark"></i>Add</button></a>
                                                    </div>
                                                    <div class="view p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-eye-fill"
                                                                    style="color: #ffa31a"></i>View</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popular-solos-detail p-4 col-6 d-flex justify-content-between">
                                        <div class="popular-image-section col-5">
                                            <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                        </div>
                                        <div
                                            class="popular-details col-6 d-flex justify-content-center align-items-center">
                                            <div class="popular-details-sections ">
                                                <span style="font-size: 28px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Buff Mo:Mo: </span>
                                                <span style="font-size: 20px; font-weight:bold;"
                                                    class="d-flex justify-content-center"><i class="bi bi-star-fill"
                                                        style="color: #ffa31a"></i> &nbsp;4.9</span>
                                                <span style="font-size: 24px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Rs. 180</span><br>
                                                <div class="buttons d-flex justify-content-between">
                                                    <div class="add p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-cart-fill text-dark"></i>Add</button></a>
                                                    </div>
                                                    <div class="view p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-eye-fill"
                                                                    style="color: #ffa31a"></i>View</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="view-more d-flex justify-content-center p-3 pb-4">
                                    <a href=""><span>View more...</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offer-section">
                        <div class="popular-header container p-5">
                            <header>
                                <h3>OFFERS</h3>
                            </header>
                        </div>
                        <div class="popular-details-section">
                            <div class="container">
                                <div class="row">
                                    @foreach ($category as $item)
                                    <div class="popular-solos-detail p-4 col-6 d-flex justify-content-between">
                                        <div class="popular-image-section col-5">
                                            <img src="{{ asset('storage/images/'.$item->categoryImage->image->path) }}"
                                                alt="">
                                        </div>
                                        <div
                                            class="popular-details col-6 d-flex justify-content-center align-items-center">
                                            <div class="popular-details-sections ">
                                                <span style="font-size: 28px; font-weight:bold;"
                                                    class="d-flex justify-content-center">{{ $item->name }}</span>
                                                <span style="font-size: 20px; font-weight:bold;"
                                                    class="d-flex justify-content-center"><i class="bi bi-star-fill"
                                                        style="color: #ffa31a"></i> &nbsp;4.9</span>
                                                <span style="font-size: 24px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Rs. 180</span><br>
                                                <div class="buttons d-flex justify-content-between">
                                                    <div class="add p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-cart-fill text-dark"></i>Add</button></a>
                                                    </div>
                                                    <div class="view p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-eye-fill"
                                                                    style="color: #ffa31a"></i>View</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    {{-- <div class="popular-solos-detail p-4 col-6 d-flex justify-content-between">
                                        <div class="popular-image-section col-5">
                                            <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                        </div>
                                        <div
                                            class="popular-details col-6 d-flex justify-content-center align-items-center">
                                            <div class="popular-details-sections ">
                                                <span style="font-size: 28px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Buff Mo:Mo: </span>
                                                <span style="font-size: 20px; font-weight:bold;"
                                                    class="d-flex justify-content-center"><i class="bi bi-star-fill"
                                                        style="color: #ffa31a"></i> &nbsp;4.9</span>
                                                <span style="font-size: 24px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Rs. 180</span><br>
                                                <div class="buttons d-flex justify-content-between">
                                                    <div class="add p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-cart-fill text-dark"></i>Add</button></a>
                                                    </div>
                                                    <div class="view p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-eye-fill"
                                                                    style="color: #ffa31a"></i>View</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                {{-- <div class="row">
                                    <div class="popular-solos-detail p-4 col-6 d-flex justify-content-between">
                                        <div class="popular-image-section col-5">
                                            <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                        </div>
                                        <div
                                            class="popular-details col-6 d-flex justify-content-center align-items-center">
                                            <div class="popular-details-sections ">
                                                <span style="font-size: 28px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Buff Mo:Mo: </span>
                                                <span style="font-size: 20px; font-weight:bold;"
                                                    class="d-flex justify-content-center"><i class="bi bi-star-fill"
                                                        style="color: #ffa31a"></i> &nbsp;4.9</span>
                                                <span style="font-size: 24px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Rs. 180</span><br>
                                                <div class="buttons d-flex justify-content-between">
                                                    <div class="add p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-cart-fill text-dark"></i>Add</button></a>
                                                    </div>
                                                    <div class="view p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-eye-fill"
                                                                    style="color: #ffa31a"></i>View</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="popular-solos-detail p-4 col-6 d-flex justify-content-between">
                                        <div class="popular-image-section col-5">
                                            <img src="{{ asset('storage\images\1695983340.momo.jpg') }}" alt="">
                                        </div>
                                        <div
                                            class="popular-details col-6 d-flex justify-content-center align-items-center">
                                            <div class="popular-details-sections ">
                                                <span style="font-size: 28px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Buff Mo:Mo: </span>
                                                <span style="font-size: 20px; font-weight:bold;"
                                                    class="d-flex justify-content-center"><i class="bi bi-star-fill"
                                                        style="color: #ffa31a"></i> &nbsp;4.9</span>
                                                <span style="font-size: 24px; font-weight:bold;"
                                                    class="d-flex justify-content-center">Rs. 180</span><br>
                                                <div class="buttons d-flex justify-content-between">
                                                    <div class="add p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-cart-fill text-dark"></i>Add</button></a>
                                                    </div>
                                                    <div class="view p-1">
                                                        <a href=""><button
                                                                style="color:black; padding: 0.3rem 0.8rem; border-radius:5px;"><i
                                                                    class="bi bi-eye-fill"
                                                                    style="color: #ffa31a"></i>View</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="view-more d-flex justify-content-center p-3 pb-4">
                                    <a href=""><span>View more...</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="join-restaurant container">
                        <a href="{{ route('admin.create') }}">
                            <div class="restaurant-joins d-flex justify-content-center p-5">
                                <img src="{{ asset('images\Add-restaurant-home-page.png') }}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="about-us">
                        <div class="header d-flex justify-content-center p-3">
                            <span style="font-size: 32px; font-weight:bolder;">About Us</span>
                        </div>
                        <div class="about-details container">
                            <div class="description-1 p-5 w-100 justify-content-center container">
                                <p class="paragraph-1 fs-5">Foodweb is the company in Nepal that delivers food from
                                    hundreds of popular restaurants. As a pioneer food delivery service provider, we are
                                    making life easier through online ordering.</p>
                                <p>We know that your time is valuable and sometimes every minute in the day counts.
                                    That’s why we deliver! So you can spend more time doing the things you love. You can
                                    get anything from Indian food to high French cuisine by placing a simple order
                                    online through our website or over the phone. Then just sit back, relax, and wait
                                    for your order to arrive.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<style>
    .image {
        filter: brightness(60%);
    }

    .popular-header header h3 {
        font-size: 32px;
        font-weight: bold;
    }

    .carousel-caption .btn {
        font-size: 34px;
        font-family: 'Creepster', cursive;
        font-weight: 500;
        border: 4px solid white;
    }

    .carousel-caption {
        padding-bottom: 7rem;
    }

    .restaurant-details {
        background-color: #1e1817;
    }

    .restaurant-row {
        border: 4px solid #2f2d2d;
        /* padding: 0 8px 8px 8px; */
    }

    .restaurant-details {
        padding: 0 5rem 2rem 5rem;
    }

    .image-section {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .featured-details {
        background-color: #1e1817;
    }

    .image-section {
        width: 100%;
        height: auto;
    }

    .featured-image-section img {
        width: 100%;
        border-radius: 30px;
    }

    .featured-items {
        padding: 0 6rem;
    }

    .featured-solos {
        border: 4px solid #2f2d2d;
    }

    .featured-solos .name-section span {
        font-size: 1.5rem;
    }

    .popular-details-section {
        background-color: #1e1817;
    }

    .popular-details-section {
        background-color: #1e1817;
    }

    .popular-image-section img {
        width: 100%;
        border-radius: 30px;
    }

    .popular-solos-detail {
        border: 4px solid #2f2d2d;
    }
</style>
@endsection
