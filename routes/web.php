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

// DASHBOARD
Route::get('/Dashboard','DashboardController@index')->name('Dashboard.dashboard');

// CATEGORÍAS
Route::get('/Categoria','CategoriaController@create')->name('Categoria.Create');

// PROVEEDOR
Route::get('/Proveedor','ProveedorController@create')->name('Proveedor.Create');

// USUARIO
Route::get('/Usuario','UsuarioController@create')->name('Usuario.Create');

// CLIENTE
Route::get('/Cliente','ClienteController@create')->name('Cliente.Create');

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
Route::get('/devoluciones/buscar','UserController@create')->name('devoluciones.buscar');
Route::get('/devoluciones/listar','UserController@index')->name('devoluciones.listar');
Route::get('/Producto/crear','ProductoController@create')->name('Producto.Create');
Route::get('/Producto/categorias','ProductoController@category')->name('Producto.Category');
// Route::get('/Producto/vendidos','ProductoController@vendidos')->name('Producto.Vendidos');// igual que almacen
// Route::get('/Producto/vencimiento','ProductoController@vencimiento')->name('Producto.Vencimiento'); //igual que almacen
// Route::get('/Producto/minimo','ProductoController@minimo')->name('Producto.Minimo'); //igual que almacen
Route::get('/Producto/buscar','ProductoController@buscar')->name('Producto.Buscar');

// COMPRA
Route::get('/Compra','CompraController@index')->name('Compra.Index');  
Route::get('/Compra/crear','CompraController@create')->name('Compra.Create');  
Route::get('/Compra/buscar','CompraController@buscar')->name('Compra.Buscar');  

// VENTA
Route::get('/Venta','VentaController@index')->name('Venta.Index');  
Route::get('/Venta/crear','VentaController@create')->name('Venta.Create');  
Route::get('/Venta/mayoreo','VentaController@mayoreo')->name('Venta.Mayoreo');  
Route::get('/Venta/pendiente','VentaController@pendiente')->name('Venta.Pendiente');  
Route::get('/Venta/buscarFecha','VentaController@buscarfecha')->name('Venta.BuscarFecha');  
Route::get('/Venta/BuscarCodigo','VentaController@buscarcodigo')->name('Venta.BuscarCodigo');
  
