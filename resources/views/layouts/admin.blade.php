<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Scripts to use Bootstrap 4 -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script>
            // global app configuration object
            let config = {
                routes: {
                   create_product: "{{ route('ajaxRequest.post') }}"
                }
            };
        </script>

        <script src="{{ asset('js/admin.js') }}" defer></script>

        <!-- Google material design styles link -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles to use Bootstrap 4 -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- CSS file used for home pahe -->
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        {{-- Let's suppose that the name of the ecommerce app is ZStore --}}
        <title>ZStore - @yield('title')</title>

    </head>
    <body>

        {{-- The main navigation bar will be displayed here --}}
        @section('navbar')
            <nav class="navbar navbar-dark bg-dark justify-content-between">
                <a class="navbar-brand">ZStore Dashboard</a>
                <a class="text-white" href="{{ url('admin/products') }}">Products</a>
                <a class="text-white">Users</a>
                <a class="text-white">Deconnexion</a>
            </nav><br><br>
        @show

        {{-- The main content of the home page will be displayed here --}}
        <div class="container">
            @yield('content')
        </div>


    </body>
</html>
