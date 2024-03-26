@extends('admins.layouts.main')

@section('admins-content')
    <aside>
        <div class="layout-admin-dashboard">
            <div class="admin-dashboard-wrapper">
                <div class="admin-dashboard-section">
                    <div class="greetings">
                        <header><h5>Welcome to FoodWeb, <span><strong>{{ $user->name}}</strong> - {{ $user->role }}</span></h5></header>
                    </div>
                </div>
            </div>
        </div>
    </aside>
@endsection
