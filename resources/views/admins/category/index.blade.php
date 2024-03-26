@extends('admins.layouts.main')

@section('admins-content')
<aside>
    <div class="layout-category-index">
        <div class="category-index-wrapper container">
            <div class="category-index-section">
                <header class="header d-flex justify-content-center">
                    <h3>CATEGORY</h3>
                </header>
                {{-- <div class="add-new-item">
                    <a href="/food/create">Add New Category</a>
                </div> --}}
                <div class="table-wrapper">
                    <div class="category-table table-responsive container">
                        <table class="table table-bordered table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>SN</th>
                                    <th>NAME</th>
                                    {{-- <th>FOOD ID</th> --}}
                                    @if($user->role == 'Super-Admin')
                                    <td>ACTION</td>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                @foreach ($categories as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        {{-- <td>{{ $item->food_id }}</td> --}}
                                        @if($user->role == 'Super-Admin')
                                        <td class="d-flex">
                                            {{-- <a href="{{ route('food.edit') }}">EDIT</a> --}}
                                            {{-- <a href="{{ route('food.destroy') }}">DELETE</a> --}}
                                            <form method="get" action="{{ route('category.edit', ['category' => $item->id]) }}">
                                                <button type="submit" class="btn btn-secondary">Edit</button>
                                            </form> &nbsp;&nbsp;
                                            <form method="POST" action="{{ route('category.destroy', ['category' => $item->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<style>
    .category-index-section header {
        padding: 40px 0;
    }

</style>
@endsection
