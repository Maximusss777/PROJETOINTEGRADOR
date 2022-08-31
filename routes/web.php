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

Route::get('/massimo', function () {
    return view('massimo');
});

Route::get('ola','App\Http\Controllers\OlaController@ola');


Route::get('/cadastrodeempregados', function () {
    return view('cadastrodeempregados');
});


Route::get('/cardapio', function () {
    return view('cardapio');
});


Route::get('/cadastrodeemp', function () {
    return view('cadastrodeemp');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route:: get ('/login', function (){
  return view ('login');
});
