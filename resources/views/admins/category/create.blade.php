@extends('admins.layouts.main')

@section('admins-content')

<aside>
    <div class="layout-category container d-flex justify-content-center">
        <div class="category-wrapper">
            <div class="category-section">
                <div class="header d-flex justify-content-center">
                    <h3>ADD NEW CATEGORY!</h3>
                </div>
                <div class="form">
                    <form action="{{ route('category.store') }}" method="POST" class="form">
                        @csrf
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Name of the Category"><br>
                        <label for="description" class="form-label">Description:</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="6" placeholder="Write the description here..."></textarea><br><br>
                            {{-- <select class="dataSelect select2 form-select" id="food_id" name="food_id[]"
                                multiple="multiple">
                                @foreach ($food as $item)
                                <option value="{{ $item->id }}"> {{ $item->name }}
                                </option>
                                @endforeach
                            </select><br><br> --}}
                              <div class="submit d-flex justify-content-center">
                            <input type="submit" value="Submit" id="submit" class="btn btn-outline-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</aside>
<style>
    .category-section {
        padding: 80px 100px 100px 100px;
        margin: 5rem 0;
        background-color: #1E1817;
        border: none;
    }

    .header {
        padding: 4rem 0;
    }

    #submit {
        color: #ccc;
        font-weight: 600;
        border: 2px solid #ffa31a;
    }

    .submit{
        padding-top: 2rem;
    }

    #submit:hover {
        background-color: #ffa31a;
        color: #000;
        font-weight: 600;
    }

    .form form select  {
        color: #000;
    }

    /* .select2-results__option{
        background-color: #292929;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__rendered li{
        color: black;
    }
    .select2-container--default .select2-results__option[aria-selected=true]{
        background-color: #ffa31a;
        color: #000;
    } */
</style>
{{-- <script>
    $(document).ready(function() {
    $('.dataSelect').select2();
});
</script> --}}
@endsection
