<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\DB;

use illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /**
     * Function to display all the products
     */
    public function listProducts()
    {
        // get all the products in the database
        $products = DB::table('products')->select('id','name','description')->get();

        return view('admin.products', [
            'products' => $products
        ]);
    }

    /**
     * Function to add a new product to a database
     */
    public function addNewProduct()
    {
        return view('admin.products');
    }

    /**
     * Create a new controller instance.
     */
    public function store(Request $request)
    {

        $data = json_decode($request->getContent(), true);

        $product_name = $data['name'];
        $product_description = $data['description'];

        DB::insert('insert into products (name, description) values(:product_name, :product_description)', [
            'product_name' => $product_name,
            'product_description' => $product_description
        ]);


        return response()->json([
            'success_message'=>'your product has been created successfully',
            'isError' => false,
        ]);
    }


}
