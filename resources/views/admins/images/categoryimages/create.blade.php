@extends('admins.layouts.main')

@section('admins-content')
<aside>
    <div class="layout-category-image container">
        <div class="category-image-wrapper">
            <div class="category-image-section">
                <div class="header d-flex justify-content-center">
                    <header>
                        <h3>Link image with category</h3>
                    </header>
                </div>
                <div class="form-section d-flex justify-content-center">
                    <form action="{{ route('categoryimages.store') }}" method="POST" class="col-6">
                        @csrf
                        <div class="category-section">
                            <select name="category" id="category" class="form-select">
                                <option value="" disabled selected>Choose a category</option>
                                @foreach ($categories as $item)
                                <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                @endforeach
                            </select>
                        </div><br>
                        <div class="image-section">
                            <select name="image" id="image" class="form-select">
                                <option value="" disabled selected>Choose an image</option>
                                @foreach ($images as $item)
                                <option value="{{ $item->id }}" class="option">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div><br><br>
                        <div class="submit-button d-flex justify-content-center">
                            <input type="submit" value="Submit" class="btn btn-outline-primary">
                        </div>
                    </form>
                </div><br><br>
                <div class="images-display-section">
                    <div class="image-display row" style="margin: 1rem 0;">
                        @foreach ($images as $item)
                        <div class="image-section col-2">
                            <img src="{{ asset('storage/images/'. $item->path) }}" alt="{{ $item->name }}"
                                style="width: 10rem; height:auto; border-radius:8px;"><br>
                            <span>{{ $item->name }} | {{ $item->path }}</span>
                        </div>
                        @if($loop->iteration % 6 == 0)
                    </div>
                    <div class="row" style="margin: 1rem 0;">
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<style>
    header {
        padding: 5rem 0;
    }

    .form-select {
        background-color: #1e1817;
        color: #ccc;
    }

    .option:hover{
        background-color: #ffa31a;
        color: #000;
    }
</style>
@endsection
