<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jamo Audio') }}</title>


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />    
    <link href="{{ asset ('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
<link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">

<link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
{{-- CDN LINK TO BE DELETED --}}


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>


    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        @include('layouts.include.sidebar')
    </aside>
    <div class="main-content position-relative max-height-vh-100 h-100">
        @include('layouts.include.navadmin')
        <div class="container-fluid py-4">
            @yield('content')
        </div>
        <div class="container-fluid py-4">
            @include('layouts.include.adminfooter')
        </div>
    </div>
   
    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/chartjs.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}" defer></script>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
  @yield('scripts')
</body>
</html>
