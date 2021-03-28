<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Route to the home view when the user request is just like: www.zstore.com
 */
// Route::get('/', function () {
//     return view('mainViews.home');
// });
Route::get('/', 'HomeController@home');

/**
 * Route to the home view when the user request is like: www.zstore.com/home
 */
Route::get('/home', 'HomeController@home');

/**
 * Route to show the product details
 */
Route::get('home/product/{id}', 'HomeController@showProduct')->name('single_product');

/**
 * Route to the view of the dashboard page
 */
Route::get('admin/dashboard', 'AdminController@dashboard');

/**
 * Route to the view of the products page
 */
Route::get('admin/products', 'AdminController@listProducts');

/**
 * Code to test laravel request ajax
 */
Route::get('ajaxRequest', 'AdminController@addNewProduct');
Route::post('ajaxRequest', 'AdminController@store')->name('ajaxRequest.post');
