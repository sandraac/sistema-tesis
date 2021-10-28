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
    return view('layout/plantilla');
});

// PRODUCTO
Route::get('/Producto','ProductoController@index')->name('Producto.Index');  //index es el almacén
// Route::view('producto-index','productos/index');
// Route::view('producto-buscar','productos/buscar');
// Route::get('Producto/crear','ProductoController@create')->name('Producto.Create');
// Route::get('/Producto/categorias','ProductoController@category')->name('Producto.Category');
// Route::get('/Producto/vendidos','ProductoController@vendidos')->name('Producto.Vendidos'); igual que almacen
// Route::get('/Producto/vencimiento','ProductoController@vencimiento')->name('Producto.Vencimiento'); igual que almacen
// Route::get('/Producto/minimo','ProductoController@minimo')->name('Producto.Minimo'); igual que almacen
Route::get('/Producto-buscar','ProductoController@buscar')->name('Producto.Buscar');