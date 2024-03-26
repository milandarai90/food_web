@extends('admins.layouts.main')

@section('admins-content')
    <aside>
        <div class="layout-food-price">
            <div class="food-price-wrapper">
                <div class="food-price-section">
                    <div class="header d-flex justify-content-center p-5">
                        <header><h3>Set the price of the food</h3></header>
                    </div>
                    <div class="form-wrapper d-flex justify-content-center">
                        <form action="{{ route('price.store') }}" method="POST" class="form col-6">
                            @csrf
                            <div class="form-section">
                                <label for="food" class="form-label">Food</label>
                                <select name="food" id="food" class="form-control">
                                    <option value="" selected disabled>Select the food</option>
                                    @foreach ($food as $item)
                                        <option class="option" value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select><br>
                                {{-- <label for="user" class="form-label">User</label>
                                <select name="food" id="food" class="form-control">
                                    <option value="" selected disabled>Select the User</option>
                                    @foreach ($user as $item)
                                        <option class="option" value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select><br> --}}
                                <label for="price" class="form-label">Price</label>
                                <input type="text" name="price" id="price" class="form-control">
                            </div>
                            <div class="bottom-submit d-flex justify-content-center p-5">
                                <input type="submit" value="Create" class="btn btn-outline-warning">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <style>

    </style>
@endsection
