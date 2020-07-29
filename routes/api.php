<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/pizza','PizzaController@getAllPizzas');
Route::get('/pizza/{id}','PizzaController@getPizzaById');
Route::get('/convert','OrderController@convertPrice');

Route::post('/user','UserController@register');
Route::post('/login','UserController@login');
Route::post('/order', 'OrderController@makeOrder');
Route::group(['middleware' => 'jwtAuth'], function () {
    Route::get('/orders', 'OrderController@getUserOrders');

});

