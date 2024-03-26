@extends('admins.layouts.main')

@section('admins-content')
<aside>
    <div class="layout-food-index">
        <div class="food-index-wrapper container">
            <div class="food-index-section">
                <header class="d-flex justify-content-center">
                    <h3>FOODS</h3>
                </header>
                {{-- <div class="add-new-item">
                    <a href="/food/create">Add New Item</a>
                </div> --}}
                <div class="table-wrapper">
                    <div class="food-table table-responsive">
                        <table class="table table-hover table-bordered ">
                            <thead class="thead text-dark" id="thead">
                                <tr>
                                    <th>SN</th>
                                    <th>NAME</th>
                                    {{-- <th>DESCRIPTION</th> --}}
                                    @if($user->role == 'Super-Admin')
                                    <th>ACTION</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="tbody table-border-bottom-0" id="tbody">
                                @foreach ($foods as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    {{-- <td>{{ $item->description }}</td> --}}
                                    @if($user->role == 'Super-Admin')
                                    <td class="d-flex">
                                        {{-- <a href="{{ route('food.edit') }}">EDIT</a> --}}
                                        {{-- <a href="{{ route('food.destroy') }}">DELETE</a> --}}
                                        <form method="get" action="{{ route('food.edit', ['food' => $item->id]) }}">
                                            <button type="submit" class="btn btn-secondary">Edit</button>
                                        </form> &nbsp;&nbsp;
                                        <form method="POST" action="{{ route('food.destroy', ['food' => $item->id]) }}">
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
                <div class="about-food d-flex justify-content-center" style="padding: 2rem 0 1rem 0;">
                    <h5>!!!All foods may not be able to find in one restaurant, but every foods are available in atleast one restaurant!!!</h5>
                </div>
            </div>
        </div>
    </div>
</aside>
<style>
    .food-index-section header {
        padding: 40px 0;
    }
</style>
@endsection
