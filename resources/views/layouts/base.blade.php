<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Scripts to use Bootstrap 4 -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script src="{{ asset('js/home.js') }}" defer></script>

        <!-- Google material design styles link -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles to use Bootstrap 4 -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- CSS file used for home pahe -->
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        {{-- Let's suppose that the name of the ecommerce app is ZStore --}}
        <title>ZStore - @yield('title')</title>

    </head>
    <body>

        {{-- The main navigation bar will be displayed here --}}
        @section('navbar')
            <div class="container">
                <div class="row pt-3 pb-2" style="background-color: #f1f1f1; margin-bottom: 30px;">
                    <div class="col-md-2">
                        <h3>ZSTORE</h3>
                    </div>

                    <div class="col-md-7">
                        <form class="form-inline">
                            <input class="form-control col-md-9 mr-2 " type="search" placeholder="SEARCH A PRODUCT" aria-label="Search">
                            <button class="btn btn-outline-success col-md-2 " type="submit">SEARCH</button>
                        </form>
                    </div>

                    <div class="col-md-2">
                        <a href="#">MY ACCOUNT</a>
                    </div>

                    <div class="col-md-1">
                        <div>
                            <div class="" style="width: 30px; height: 30px; border-radius: 50% 50%; background-color: #34b6e9; position: relative; top: 8px; left: 16px;">
                                <p style="position: relative; left: 10px; top: 4px; color: #ffffff;">3</p>
                            </div>
                            <a href=""><span class="material-icons">shopping_cart</span></a>
                        </div>
                    </div>
                </div>
            </div>

        @show

        {{-- The main content of the home page will be displayed here --}}
        <div class="container p-0">
            @yield('content')
        </div>


    </body>
</html>
