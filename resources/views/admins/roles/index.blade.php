@extends('admins.layouts.main')

@section('admins-content')
<aside>
    <div class="layout-roles container">
        <div class="roles-wrapper">
            <div class="roles-section">
                <div class="header d-flex justify-content-center p-5">
                    <header>
                        <h3>Roles</h3>
                    </header>
                </div>
                <div class="table-wrapper">
                    <div class="roles-table table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>SN</th>
                                    <th>ROLE</th>
                                    <th>GUARD</th>
                                </tr>
                            </thead>
                            <tbody class="tbody">
                                @foreach ($roles as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->guard_name }}</td>
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
