@extends('admins.layouts.main')

@section('admins-content')
<aside>
    <div class="layout-foodtype-index">
        <div class="foodtype-index-wrapper container">
            <div class="foodtype-index-section container">
                <header class="d-flex justify-content-center">
                    <h3>FOOD TYPES</h3>
                </header>
                {{-- <div class="add-new-type">
                    <a href="/foodtype/create">Add New Type</a>
                </div> --}}
                <div class="table-wrapper">
                    <div class="foodtype-table table-responsive">
                        <table class="table table-hover table-bordered container">
                            <thead class="thead text-dark">
                                <tr>
                                    <th>SN</th>
                                    <th>NAME</th>
                                    {{-- <th>DESCRIPTION</th> --}}
                                    @if($user->role == 'Super-Admin')
                                        <th>ACTION</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody class="tbody table-border-bottom-0">
                                @foreach ($types as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    {{-- <td>{{ $item->description }}</td> --}}
                                    @if($user->role == 'Super-Admin')
                                        <td class="d-flex">
                                            <form method="get" action="{{ route('foodtype.edit', ['foodtype' => $item->id]) }}">
                                                <button type="submit" class="btn btn-secondary">Edit</button>
                                            </form> &nbsp;&nbsp;
                                            <form method="POST" action="{{ route('foodtype.destroy', ['foodtype' => $item->id]) }}">
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
    .foodtype-index-section header {
        padding: 40px 0;
    }
</style>
@endsection
