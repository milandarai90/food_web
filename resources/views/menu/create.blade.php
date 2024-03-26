@extends('layouts.main')

@section('content')
<aside>
    <div class="layout-menu container">
        <div class="menu-wrapper">
            <div class="menu-section">
                <div class="header d-flex justify-content-center p-5">
                    <header><h3>Link Food with Category</h3></header>
                </div>
                <div class="form-wrapper d-flex justify-content-center">
                    <form action="{{ route('categoryinfo.store') }}" method="POST" class="col-6">
                        @csrf
                        <div class="form-section">
                            <label for="category" class="form-label">Category:</label>
                            <select name="category" id="category" class="form-select">
                                <option value="" selected disabled>Select a Category</option>
                                @foreach ($category as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select><br>
                            <label for="food" class="form-label">Food:</label>
                            <select name="food" id="food" class="form-select">
                                <option value="" selected disabled>Select foods for the category</option>
                                @foreach ($food as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select><br>
                        </div><br>
                        <div class="submit-button d-flex justify-content-center">
                            <input type="submit" value="Submit" class="btn btn-outline-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</aside>
<script>
    $(document).ready(function() {
        $('.dataSelect').select2();
    });
</script>
@endsection
