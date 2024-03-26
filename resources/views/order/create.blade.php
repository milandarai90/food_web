@extends('layouts.main')

@section('content')
<aside>
    <div class="layout-order">
        <div class="order-wrapper container">
            <div class="order-section">
                <div class="heading d-flex justify-content-center p-5">
                    <header>
                        <h3>PLACE YOUR ORDER</h3>
                    </header>
                </div>
                <div class="form-wrapper container d-flex justify-content-center">
                    <form action="{{ route('order.store') }}" class="col-6" method="POST"> @csrf
                        <div class="form-section">
                            <label for="" class="form-label">Receiver Name: </label>
                            <input type="text" name="receiver" id="receiver" class="form-control" value="{{ $user->name
                            }}"><br>
                            <label for="" class="form-label">Contact: </label>
                            <input type="text" name="contact" id="contact" class="form-control" ><br>
                            <label for="" class="form-label">Address: </label>
                            <input type="text" name="address" id="address" class="form-control" ><br>
                        </div><br>
                        <div class="submit d-flex justify-content-center">
                            <input type="submit" value="Order Now" class="order-btn btn">
                        </div><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</aside>
<style>
    .order-btn {
        border-color: #ffa31a;
        border-radius: 8px;
        border-width: 2px;
        color: #eeeeee;
        background-color: #16100f;
        /* border-color: #eeeeee; */
    }

    .order-btn:hover {
        background-color: #ffa31a;
        color: #000000;
        font-weight: bold;
        border-color: #eeeeee;
    }
</style>
@endsection
