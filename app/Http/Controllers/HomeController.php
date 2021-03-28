<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    public function home()
    {
        // get all the products in the database
        $products = DB::table('products')->select('id','name','description')->get();

        return view('mainViews.home', [
            'products' => $products
        ]);
    }

    /**
     * Function to display a Product
     */
    public function showProduct($id)
    {
        // get the product of the specified id
        $product = DB::table('products')->select('id','name','description')->where('id', '=', $id)
        ->get();

        return view('mainViews.single_product', [
            'product' => $product[0],
        ]);
    }
}
