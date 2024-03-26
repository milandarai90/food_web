@extends('layouts.main')
@section('content')
<div class="main-div">
    <div class="heading d-flex justify-content-center p-5">
        <h2>OUR MENU</h2>
    </div>
    @foreach ($category as $item)
    {{-- @dd($item->categoryInfo->food) --}}
    <div class="menu-header container p-3">
        <span style="font-size:1.5rem;">{{ $item->name }}</span>
    </div>
    <div class="food-item container">
        <div class="starter-nonveg col-12">
            <ul>
                @foreach ($item->categoryInfo as $items)

                <a href="/food/view/{{ $items->food->id }}">
                    <li>{{ $items->food->name }}</li>
                </a>
                @endforeach

            </ul>

        </div>
        {{-- <div class="starter-img"> --}}
            {{-- @dd($item) --}}
            {{-- @dd($item->categoryImage->image) --}}
            {{-- @dd($item->categoryImage->image->path) --}}
            {{-- <img src="{{ asset('storage/images/'.$item->categoryImage->image->path) }}"
                alt="{{ $item->name }}"><br> --}}
            {{-- <img src="{{ asset('storage/images/1696033262.rollls-cat.png' ) }}" alt="{{ $item->name }}"
                style="width: 10rem; height:auto; border-radius:8px;"><br> --}}
            {{-- </div> --}}
    </div>
    @endforeach
    {{-- <div class="food-item container">
        <div class="starter-nonveg col-6">
            <P>BBQ (NON-VEG)</P>
            <ul>
                <li>Chicken Cheesy Roll</li>
                <li>Belgium cicken</li>
                <li>Chicken Wrapped Sausage Roll</li>
                <li>Dragon Chicken</li>
                <li>Pocket Fish</li>
                <li>Chicken Manchurian</li>
            </ul>
        </div>
        <div class="starter-img">
            <img src="{{ asset('images\IMG-20231002-WA0008.jpg') }}" alt="">
            <ul>
                <li>Chicken Chopsuey</li>
                <li>Chcken cutlet</li>
                <li>Chicken Caeser Salad</li>
            </ul>
        </div>

    </div>
    <div class="food-item container">
        <div class="starter-nonveg col-6">
            <P>MO:MO (NON-VEG)</P>
            <ul>
                <li>Chicken Cheesy Roll</li>
                <li>Belgium cicken</li>
                <li>Chicken Wrapped Sausage Roll</li>
                <li>Dragon Chicken</li>
                <li>Pocket Fish</li>
                <li>Chicken Manchurian</li>
            </ul>
        </div>
        <div class="starter-img">
            <img src="{{ asset('images\IMG-20231002-WA0010.jpg') }}" alt="">
            <ul>
                <li>Chicken Chopsuey</li>
                <li>Chcken cutlet</li>
                <li>Chicken Caeser Salad</li>
            </ul>
        </div>

    </div>
    <div class="food-item container">
        <div class="starter-nonveg col-6">
            <P>NOODLES(NON-VEG)</P>
            <ul>
                <li>Chicken Cheesy Roll</li>
                <li>Belgium cicken</li>
                <li>Chicken Wrapped Sausage Roll</li>
                <li>Dragon Chicken</li>
                <li>Pocket Fish</li>
                <li>Chicken Manchurian</li>
            </ul>
        </div>
        <div class="starter-img">
            <img src="{{ asset('images\IMG-20231002-WA0009.jpg') }}" alt="">
            <ul>
                <li>Chicken Chopsuey</li>
                <li>Chcken cutlet</li>
                <li>Chicken Caeser Salad</li>
            </ul>
        </div>

    </div>
    <div class="food-item container">
        <div class="starter-nonveg col-6">
            <P>PIZZA (NON-VEG)</P>
            <ul>
                <li>Chicken Cheesy Roll</li>
                <li>Belgium cicken</li>
                <li>Chicken Wrapped Sausage Roll</li>
                <li>Dragon Chicken</li>
                <li>Pocket Fish</li>
                <li>Chicken Manchurian</li>
            </ul>
        </div>
        <div class="starter-img">
            <img src="{{ asset('images\IMG-20231002-WA0011.jpg') }}" alt="">
            <ul>
                <li>Chicken Chopsuey</li>
                <li>Chcken cutlet</li>
                <li>Chicken Caeser Salad</li>
            </ul>
        </div>

    </div>
    <div class="food-item container">
        <div class="starter-nonveg col-6">
            <P>SALAD (VEG)</P>
            <ul>
                <li>Chicken Cheesy Roll</li>
                <li>Belgium cicken</li>
                <li>Chicken Wrapped Sausage Roll</li>
                <li>Dragon Chicken</li>
                <li>Pocket Fish</li>
                <li>Chicken Manchurian</li>
            </ul>
        </div>
        <div class="starter-img">
            <img src="{{ asset('images\IMG-20231002-WA0003.jpg') }}" alt="">
            <ul>
                <li>Chicken Chopsuey</li>
                <li>Chcken cutlet</li>
                <li>Chicken Caeser Salad</li>
            </ul>
        </div>

    </div>
    <div class="food-item container">
        <div class="starter-nonveg col-6">
            <P>WINGS (NON-VEG)</P>
            <ul>
                <li>Chicken Cheesy Roll</li>
                <li>Belgium cicken</li>
                <li>Chicken Wrapped Sausage Roll</li>
                <li>Dragon Chicken</li>
                <li>Pocket Fish</li>
                <li>Chicken Manchurian</li>
            </ul>
        </div>
        <div class="starter-img">
            <img src="{{ asset('images\IMG-20231002-WA0006.jpg') }}" alt="">
            <ul>
                <li>Chicken Chopsuey</li>
                <li>Chcken cutlet</li>
                <li>Chicken Caeser Salad</li>
            </ul>
        </div>

    </div>
    <div class="food-item container">
        <div class="starter-nonveg col-6">
            <P>FRIES (VEG)</P>
            <ul>
                <li>Chicken Cheesy Roll</li>
                <li>Belgium cicken</li>
                <li>Chicken Wrapped Sausage Roll</li>
                <li>Dragon Chicken</li>
                <li>Pocket Fish</li>
                <li>Chicken Manchurian</li>
            </ul>
        </div>
        <div class="starter-img">
            <img src="{{ asset('images\IMG-20231002-WA0012.jpg') }}" alt="">
            <ul>
                <li>Chicken Chopsuey</li>
                <li>Chcken cutlet</li>
                <li>Chicken Caeser Salad</li>
            </ul>
        </div>

    </div>
    <div class="food-item container">
        <div class="starter-nonveg col-6">
            <P>DRINKS (BEVERAGE)</P>
            <ul>
                <li>Chicken Cheesy Roll</li>
                <li>Belgium cicken</li>
                <li>Chicken Wrapped Sausage Roll</li>
                <li>Dragon Chicken</li>
                <li>Pocket Fish</li>
                <li>Chicken Manchurian</li>
            </ul>
        </div>
        <div class="starter-img">
            <img src="{{ asset('images\IMG-20231002-WA0001  .jpg') }}" alt="">
            <ul>
                <li>Chicken Chopsuey</li>
                <li>Chcken cutlet</li>
                <li>Chicken Caeser Salad</li>
            </ul>
        </div>

    </div>
    <div class="food-item container">
        <div class="starter-nonveg col-6">
            <P>ROLLS</P>
            <ul>
                <li>Chicken Cheesy Roll</li>
                <li>Belgium cicken</li>
                <li>Chicken Wrapped Sausage Roll</li>
                <li>Dragon Chicken</li>
                <li>Pocket Fish</li>
                <li>Chicken Manchurian</li>
            </ul>
        </div>
        <div class="starter-img">
            <img src="{{ asset('images\IMG-20231002-WA0014.jpg') }}" alt="">
            <ul>
                <li>Chicken Chopsuey</li>
                <li>Chcken cutlet</li>
                <li>Chicken Caeser Salad</li>
            </ul>
        </div>

    </div>
    <div class="food-item container">
        <div class="starter-nonveg col-6">
            <P>SANDWITCH</P>
            <ul>
                <li>Chicken Cheesy Roll</li>
                <li>Belgium cicken</li>
                <li>Chicken Wrapped Sausage Roll</li>
                <li>Dragon Chicken</li>
                <li>Pocket Fish</li>
                <li>Chicken Manchurian</li>
            </ul>
        </div>
        <div class="starter-img">
            <img src="{{ asset('images\IMG-20231002-WA0014.jpg') }}" alt="">
            <ul>
                <li>Chicken Chopsuey</li>
                <li>Chcken cutlet</li>
                <li>Chicken Caeser Salad</li>
            </ul>
        </div>
    </div> --}}
</div>


<style>
    /* body{
        font-family:'Inter',sans-serif;
        background: #16100F;
    } */
    /* .main-div h2{
        padding: 30px;

    } */
    /* .heading h2{
        color: #FFF;
        font-family:'Inter';
        text-align: center;
    } */
    .food-item {
        padding: 1rem 0;
    }

    .starter-nonveg ul {
        list-style: none;
        color: #FFF;
        font-family: 'Inter';

    }

    .starter-nonveg p {
        text-align: left;
        padding-left: 40px;
        font-size: 22px;
        color: #FFF;
        font-family: 'Inter';
    }

    .starter-img ul {
        list-style: none;
        color: #FFF;
        font-family: 'Inter';
        width: 528.755px;
        height: 45px;
    }

    .food-item {
        display: flex;
        justify-content: space-between;
        background-color: #1e1817;
    }

    .starter-nonveg ul li {
        padding: 10px 0px;
        border-top: 1px solid white;
        border-bottom: 1px solid white;

    }

    .starter-img ul li {
        border-bottom: 1px solid white;
        padding: 10px 0px;
    }

    .food-item {
        margin-bottom: 5rem;
    }
</style>
@endsection
