@extends('admins.layouts.main')

@section('admins-content')

<aside>
    <div class="food-items-layout container d-flex justify-content-center">
        <div class="food-items-wrapper">
            <div class="food-items-section">
                <form action="/food/update/{{ $food->id }}"  class="form form-control">
                    <div class="entry-of-food d-flex justify-content-center">
                        <h5>EDIT FOOD</h5>
                    </div>
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name of the food" value="{{ $food->name }}"><br>
                    <label for="description" class="form-label">Description:</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="6" placeholder="Write the description here..." value="{{ $food->description }}"></textarea><br><br>
                    <div class="submit d-flex justify-content-center">
                        <input type="submit" value="Update" id="submit" class="btn">
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
