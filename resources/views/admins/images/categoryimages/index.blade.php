@extends('admins.layouts.main')

@section('admins-content')
<aside>
    <div class="layout-category-images">
        <div class="category-images wrapper">
            <div class="category-images-section">
                <div class="header">
                    <header><h3>Category Images Index</h3></header>
                </div>
                <div class="category-images-division">
                    @foreach ($categoryimages as $item)
                    <div class="category-section">
                        Category: {{ $item->category->name }}
                    </div>
                    <div class="image-section">
                        {{-- <img src="{{ asset('public\storage\images'). $item->image->path }}" alt=""> --}}
                        <img src="{{ asset('storage/images/'. $item->image->path) }}" alt="{{ $item->name }}">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</aside>
@endsection
