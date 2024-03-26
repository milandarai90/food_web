@extends('admins.layouts.main')

@section('admins-content')

<aside>
    <div class="food-items-layout container d-flex justify-content-center">
        <div class="food-items-wrapper">
            <div class="food-items-section">
                <form action="/restaurant/update/{{ $restaurant->id }}" method="POST" class="form form-control">
                    @csrf
                    <div class="entry-of-food d-flex justify-content-center">
                        <h5>EDIT THE RESTAURANT</h5>
                    </div>
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name of the Restaurant" value="{{ $restaurant->restaurant_name }}"><br>
                    <label for="name" class="form-label">Code:</label>
                    <input type="text" name="code" id="code" class="form-control" placeholder="Restaurant Code" value="{{ $restaurant->restaurant_code }}"><br>
                    <label for="name" class="form-label">Address:</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Address of the Restaurant" value="{{ $restaurant->address }}"><br>
                    <label for="name" class="form-label">Contact1:</label>
                    <input type="text" name="contact1" id="contact1" class="form-control" placeholder="9*********" value="{{ $restaurant->contact1 }}"><br>
                    <label for="name" class="form-label">Contact2:</label>
                    <input type="text" name="contact2" id="contact2" class="form-control" placeholder="9*********" @if ($restaurant->contact2)
                    value="{{ $restaurant->contact2 }}"
                    @endif ><br>
                    <label for="name" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="*****@***.com" value="{{ $restaurant->email }}"><br>
                    <label for="name" class="form-label">Owner:</label>
                    <input type="text" name="owner" id="owner" class="form-control" placeholder="" value="{{ $restaurant->restaurant_owner }}"><br>
                    <label for="name" class="form-label">Pan Number:</label>
                    <input type="text" name="pan_no" id="pan_no" class="form-control" placeholder="" value="{{ $restaurant->pan_number }}"><br>
                    <div class="submit d-flex justify-content-center">
                        <input type="submit" value="Submit" id="submit" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <style>
        .form{
            padding: 80px 100px 100px 100px;
            margin: 5rem 0;
            background-color: #1E1817;
            border: none;
        }
        #submit{
            color: #ccc;
            font-weight: 600;
            border: 2px solid #ffa31a;

        }
        #submit:hover {
            background-color: #ffa31a;
            color: #000;
            font-weight: 600;
        }
        .entry-of-food{
            padding: 40px 0;
        }
    </style>
</aside>

@endsection
