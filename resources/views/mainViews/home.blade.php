@extends('layouts.base')


@section('title', 'Welcome to our online store')

@section('navbar')
    @parent
@endsection

@section('content')

    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-3 mb-2 card product_css" data-id= "{{ $product->id }}">
                <img src="{{ asset('images/homeProductImage/product1.jpg') }}" alt="zstore products">
                <h6>Sportswear</h6>
                <h5>{{ $product->name }}</h5>
                <h6 class="product_price_css">$154,00</h6>
                <div class="product_buttons_block_css">
                    <button class="btn btn-sm col-md-12"><span class="material-icons">shopping_cart</span>ADD TO CART</button>
                    <a href="{{ route('single_product', ['id' => $product->id ]) }}" class="product_quick_view_btn_css product_buttons_block_js"><span class="material-icons">remove_red_eye</span>QUICK VIEW</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
