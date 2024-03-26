@extends('admins.layouts.main')

@section('admins-content')
<aside>
    <div class="layout-admin container">
        <div class="admin-wrapper">
            <div class="admin-section">
                <div class="header">
                    <header><h3>ADMINS</h3></header>
                </div>
                <div class="table-wrapper">
                    <div class="table-admin">
                        <table class="table table-bordered">
                            <thead class="thead">
                                <tr>
                                    <th>SN</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>ROLES</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td class="d-flex">
                                            <form method="get" action="{{ route('admin.edit', ['admin' => $item->id]) }}">
                                                <button type="submit" class="btn btn-secondary">Edit</button>
                                            </form> &nbsp;&nbsp;
                                            <form method="POST" action="{{ route('admin.destroy', ['admin' => $item->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
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
