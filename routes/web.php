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
    return view('plantilla');
});

Route::view('/', 'paginas.inicio');
Route::view('/administradores', 'paginas.administradores');
Route::view('/anuncios', 'paginas.anuncios');
Route::view('articulos', 'paginas.articulos');
Route::view('/banner', 'paginas.banner');
Route::view('/categorias', 'paginas.categorias');
Route::view('/opiniones', 'paginas.opiniones');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
