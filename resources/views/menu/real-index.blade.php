@extends('layouts.main')

@section('content')
<aside>
    <div class="layout-menu container">
        <div class="menu-wrapper">
            <div class="menu-section">
                <div class="header d-flex justify-content-center p-5">
                    <header>
                        <h3>OUR MENU</h3>
                    </header>
                </div>

                {{-- mileko --}}
                {{-- <div class="menu-display-wrapper">
                    @foreach ($categoryinfo->groupBy('category_id') as $category_id => $categoryItems)
                        <div class="menu-display-section">
                            <div class="menu-header">
                                <h5>{{ $categoryItems[0]->category->name }}</h5>
                            </div>
                            <div class="menu-display-items">
                                @foreach ($categoryItems as $item)
                                    {{ $item->food->name }}<br>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div> --}}

                <div class="menu-display-wrapper">
                    @foreach ($categoryinfo->groupBy('category_id') as $category_id => $categoryItems)
                        <div class="menu-display-section">
                            <div class="menu-header">
                                <h5>{{ $categoryItems[0]->category->name }}</h5>
                            </div>
                            <div class="menu-display-items row">
                                @foreach ($categoryItems as $item)
                                <div class="menu-items col-6">

                                    {{ $item->food->name }}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</aside>
<style>
    .menu-display-items{
        background-color: #1e1817;
    }
</style>
@endsection
