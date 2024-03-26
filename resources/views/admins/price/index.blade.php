@extends('admins.layouts.main')

@section('admins-content')
    <aside>
        <div class="layout-food-price">
            <div class="food-price-wrapper">
                <div class="food-price-section">
                    <div class="header d-flex justify-content-center p-5">
                        <header><h3>View Price</h3></header>
                    </div>
                    <div class="table-wrapper">
                        <div class="price-table table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead class="thead text-dark" id="thead">
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        {{-- @hasrole('Admin') --}}
                                        @if($user->role === 'Admin')
                                        <th>Action</th>
                                        @endif
                                        {{-- @endhasrole --}}
                                    </tr>
                                </thead>
                                <tbody class="tbody" style="text-align: center;">
                                    @foreach ($prices as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->priceFood->name }}</td>
                                        <td>Rs {{ $item->price }}</td>
                                        {{-- @hasrole('Admin') --}}
                                        @if($user->role === 'Admin')
                                        <td class="d-flex">
                                            <form method="get" action="{{ route('price.edit', ['price' => $item->id]) }}">
                                                <button type="submit" class="btn btn-secondary">Edit</button>
                                            </form>                                            &nbsp;
                                            <form method="POST" action="{{ route('price.destroy', ['price' => $item->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                        @endif
                                        {{-- @endhasrole --}}
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
@endsection
