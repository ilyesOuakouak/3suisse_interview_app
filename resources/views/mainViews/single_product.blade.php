@extends('layouts.base')

@section('title', 'Welcome to our online store')

@section('navbar')
    @parent
@endsection

@section('content')

    <div class="row">
        <div class="col-md-5" >
            <div class="col-md-12 pt-5 pl-5" style="height: 500px; background-color: #f1f1f1; border: 2px solid #aeafaf">
                <img src="{{ asset('images/homeProductImage/product3.png') }}" width="90%;" height="80%;" alt="">
            </div><br>
            <div class="col-md-12" style="height: 180px; background-color: #4e4e4e;">
                <div class="row">
                    <div class="col-md-4 pt-4 pl-3" style="height: 180px; background-color: #f1f1f1; border: 2px solid #aeafaf">
                        <img src="{{ asset('images/homeProductImage/mini_product_1.png') }}" width="90%;" height="80%;" alt="">
                    </div>

                    <div class="col-md-4 pt-4 pl-3" style="height: 180px; background-color: #f1f1f1; border: 2px solid #aeafaf">
                        <img src="{{ asset('images/homeProductImage/mini_product_2.png') }}" width="90%;" height="80%;" alt="">
                    </div>

                    <div class="col-md-4 pt-4 pl-3" style="height: 180px; background-color: #f1f1f1; border: 2px solid #aeafaf">
                        <img src="{{ asset('images/homeProductImage/mini_product_3.png') }}" width="90%;" height="80%;" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="col-md-12 p-0" style="height: 60px; background-color: #f1f1f1; border: 2px solid #aeafaf">
                <div class="row">
                    <div class="col-md-7 pl-5 pt-2">
                        <h6>{{ $product->name }}</h6>
                        <p>Clothes</p>
                    </div>
                    <div class="col-md-4 pt-4">
                        <p style="float: right;">55€</p>
                    </div>
                </div>
            </div><br>

            <div class="col-md-12" style="height: 310px; background-color: #f1f1f1; border: 2px solid #aeafaf">
               <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#description">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#livraison">Livraison</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#payement">Garanties & paiement</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="description">{{ $product->description }}</div>
                    <div class="tab-pane container fade" id="livraison">Livraison</div>
                    <div class="tab-pane container fade" id="payement">Garantie et paiment </div>
                </div>
            </div><br>

            <div class="col-md-12 p-2" style="height: 80px; background-color: #f1f1f1; border: 2px solid #aeafaf">
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-info">Ajouter au panier</button>
                    </div>
                </div>
            </div>
        </div>

@endsection
