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
// remmember in the future to change namespace in the routeserviceprovider.php to be able to use controllers like in the tutorial
Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', 'PizzasController@index');
Route::get('/pizzas/create', 'PizzasController@create');
Route::post('/pizzas', 'PizzasController@store');
Route::get('/pizzas/{id}', 'PizzasController@show');
Route::delete('/pizzas/{id}', 'PizzasController@destroy');

