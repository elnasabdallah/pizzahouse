<?php

use App\Http\Controllers\KebabController;
use App\Http\Controllers\PizzaController;
use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pizzas', 'PizzaController@index')->name('pizza.index')->middleware('auth');
Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create');
Route::post('/pizzas', 'PizzaController@store')->name('pizzas.store');
Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');
Route::delete('/pizzas/{id}', 'PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

Route::get('/kebab', 'KebabController@index');
Route::get('/kebab/create', 'KebabController@create')->name('kebab.create');
Route::post('/kebab', 'KebabController@store');
Route::get('/kebab/{id}', 'KebabController@show');


Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
