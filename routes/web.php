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
//Forn-end
Route::get('/', 'HomeController@index');
Route::get('/trang-chu','HomeController@index');
//Back-end
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');
//Category-product
Route::get('/all-category-product','CategoryProduct@all_category_product');
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/save-category-product','CategoryProduct@save_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');
Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');

//Prduct
Route::get('/all-product','Product@all_product');
Route::get('/add-product','Product@add_product');
Route::get('/save-product','Product@save_product');
Route::get('/edit-product/{product_id}','Product@edit_product');
Route::post('/update-product/{product_id}','Product@update_product');
Route::get('/active-product/{product_id}','Product@active_product');
Route::get('/unactive-product/{product_id}','Product@unactive_product');
Route::get('/delete-product/{product_id}','Product@delete_product');


//
