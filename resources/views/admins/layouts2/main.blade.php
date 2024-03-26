@include('layouts.utilities')
{{-- @include('layouts.app') --}}
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css   "> --}}

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">


    <title>FOOD WEB</title>
</head>

<body>
    <div class="layout-wrapper">
        <div class="nav-bar">
            @include('layouts.top-nav-bar')
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('layouts.footer')
        </div>
    </div>

</body>


</html>
