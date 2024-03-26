@extends('admins.layouts.main')

@section('admins-content')
<aside>
    <div class="admin-layout container">
        <div class="admin-wrapper">
            <div class="admin-section">
                <div class="header d-flex justify-content-center p-5">
                    <header>
                        <h3>Edit User</h3>
                    </header>
                </div>
                <div class="form-section-wrapper d-flex justify-content-center">
                    <form action="{{ route('admin.update',['admin' => $users->id]) }}"  class="form col-6">
                        @csrf
                        <div class="form-section">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required value="{{ $users->name }}"><br>
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" required value="{{ $users->email }}"><br>
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" required ><br>
                            <label for="confirm_password" class="form-label">Confirm Password:</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" required ><br>
                            <label for="role" class="form-label">Role:</label>
                            <input type="text" name="role" id="role" class="form-control" required value="{{ $users->role }}"><br>
                            <label for="restaurant" class="form-label">Restaurant:</label>
                            <select name="restaurant" id="restaurant" class="form-select">
                                <option value="{{ $users->restaurant_id }}" selected disabled>{{ $users->restaurant->restaurant_name }}</option>
                                @foreach ($restaurant as $item)
                                <option value="{{ $item->id }}" >{{ $item->restaurant_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="submit-btn d-flex justify-content-center p-5">
                            <input type="submit" value="Create" class="btn btn-outline-warning">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</aside>
@endsection
