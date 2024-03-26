@extends('admins.layouts.main')

@section('admins-content')
<aside>
    <div class="layout-restaurant-admin">
        <div class="admin-restaurant-wrapper container">
            <div class="restaurant-section">
                <div class="header d-flex justify-content-center p-5">
                    <header>
                        <h3>RESTAURANTS</h3>
                    </header>
                </div>
                {{-- <div class="table-wrapper">
                    <div class="restaurant-table table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead class="thead text-dark" id="thead">
                                <tr>

                                </tr>
                            </thead>
                        </table>
                    </div>
                </div> --}}
                <div class="restaurant-section-forloop" style="border: 2px solid gray; margin: 2rem 0;">
                    @foreach ($restaurant as $item)
                    <div class="about-restaurant-wrapper " style="border: 1px solid gray">
                        <div class="about-restaurant col-8 d-flex">
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
                            @if($user->role == 'Super-Admin')
                            <div class="restaurant-action d-flex justify-content-center col-4 align-items-center">
                                <div class="action col-8">
                                    <div class="edit d-flex justify-content-center" style="padding: 1rem 0;">
                                    <a href="/restaurant/edit/{{ $item->id }}" class="btn btn-secondary ">EDIT</a>
                                    </div>
                                    <div class="delete d-flex justify-content-center" style="padding: 1rem 0;">
                                    <a href="/restaurant/destroy/{{ $item->id }}" class="btn btn-danger">DELETE</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</aside>
@endsection
