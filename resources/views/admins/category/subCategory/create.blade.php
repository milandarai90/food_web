@extends('admins.layouts.main')

@section('admins-content')
<aside>
    <div class="layout-subccategory container">
        <div class="subcategory-wrapper">
            <div class="subcategory-section">
                <div class="header d-flex justify-content-center p-5">
                    <header><h3>Create Sub-Category</h3></header>
                </div>
                <div class="form-wrapper d-flex justify-content-center">
                    <form action="{{ route('subcategory.store') }}" method="POST" class="form col-6">
                        @csrf
                        <div class="form-section">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" id="name" class="form-control"><br>
                            <label for="description" class="form-label">Description:</label>
                            <input type="text" name="description" id="description" class="form-control"><br>
                            <label for="category" class="form-label">Category:</label>
                            <select name="category" id="category" class="form-select">
                                <option value="" disabled selected>Choose the Category</option>
                                @foreach ($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="submit-button d-flex justify-content-center p-5">
                            <input type="submit" value="Submit" class="btn btn-outline-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</aside>
@endsection
