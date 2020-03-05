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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quem-somos', function () {
    return view('quem_somos');
});

Route::get('/apaixonados-por-pizza', function () {
    return view('apaixonados');
});

Route::get('master', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cardapio ', 'CardapioController@getIndex');