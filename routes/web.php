<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tpcontr;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/inscription', function () {
    return view('inscription');
});
*/
Route::get('/formemm', function () {
    return view('formemm');
});
Route::post('/index',[Tpcontr::class,'index'])->name('affichage');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
