@include('admins.layouts.utilities')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Data Table --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    {{--
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css   "> --}}

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">


    <title>FOOD WEB</title>
</head>

{{--

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admins.layouts.side-nav-bar')
            <!-- Layout container -->
            <div class="layout-page">
                @include('admins.layouts.top-nav-bar')
                <div class="content-wrapper">
                    <!-- Content -->
                    @yield('admins-content')
                </div>
                <!-- Content wrapper -->
            </div>
        </div>
    </div>
</body> --}}

<body>
    {{-- @dd($user->role == 'Admin' || $user->role == 'Super-Admin') --}}
    @if($user->role == 'Admin' || $user->role == 'Super-Admin')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admins.layouts.side-nav-bar')
            <!-- Layout container -->
            <div class="layout-page">
                @include('admins.layouts.top-nav-bar')
                <div class="content-wrapper">
                    {{-- @include('errors.errors') --}}
                    <!-- Content -->
                    @yield('admins-content')
                </div>
                <!-- Content wrapper -->
            </div>
        </div>

        <!-- Overlay -->
        {{-- <div class="layout-overlay layout-menu-toggle"></div> --}}
    </div>
    @else

    {{-- <strong style="color: white; font-size:2rem">{{ 'User has no access to it.' }}</strong> --}}
    @endif
</body>
<style>
    /* .layout-page {
        width: 82%;
        height: 100%;
        position: absolute;
        top: 0;
        right: 0;
    } */

    .content-wrapper {
        position: absolute;
        top: 10%;
        left: 18%;
        width: 82%;
        height: 90%;
        overflow-y: scroll;
        padding: 0;
    }
</style>

</html>
