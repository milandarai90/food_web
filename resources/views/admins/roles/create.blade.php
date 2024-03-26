@extends('admins.layouts.main')

@section('admins-content')
<aside>
    <div class="layout-role container">
        <div class="role-section-wrapper container">
            <div class="role-section">
                <div class="role-header d-flex justify-content-center p-5">
                    <header><h3>Create a Role</h3></header>
                </div>
                <div class="form-section d-flex justify-content-center">
                    <form action="{{ route('roles.store') }}" method="POST" class="form col-6">
                        @csrf
                        <div class="role-form">
                            <label for="name" class="form-label">Role Name</label>
                            <input type="text" name="role" id="role" class="form-control"><br>
                            <label for="guard" class="form-label">Role Guard</label>
                            <input type="text" name="guard" id="guard" class="form-control">
                        </div><br>
                        <div class="bottom-submit d-flex justify-content-center p-5">
                            <input type="submit" value="Create" class="btn btn-outline-warning">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</aside>
@endsection
