<?php

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
    return view('home');
});
//Vistas

Route::get('perfil','HomeController@perfil');
Route::get('contacto','HomeController@contacto');
Route::get('servicios','ServiciosControler@VerServiciosWeb');
Route::get('gaming','HomeController@gaming');
Route::get('galeria','ProductosController@VerProductos');
Route::get('login','HomeController@login');
Route::get('admin','HomeController@admin')->name('admin');
Route::get('Subirproducto','HomeController@Subirproducto')->name('Subirproducto');
Route::get('ModificarProducto','HomeController@ModificarProducto')->name('ModificarProducto');
Route::get('EliminarProducto','HomeController@EliminarProducto')->name('EliminarProducto');
route::post('BorraProducto','ProductosController@destroy')->name('BorraProducto');
route::post('subirproducto','ProductosController@insert')->name('subirproducto');
Route::put('modificarproducto','ProductosController@editProducto')->name('modificarproducto');

//
Route::get('Modificaruser','HomeController@Modificaruser')->name('Modificaruser');
Route::get('/mModificarsuer', function () {
    return view('admin,Modificaruser');
});
Route::put('modificaruser','usuariosscontroller@editUser')->name('modificaruser');

Route::get('adservisios','HomeController@adservisiosver')->name('adservisiosver');

Route::get('adservisios','ServiciosControler@VerServicios')->name('adservisios');
Route::get('carrito/{_id?}','ProductosController@GoCarrito')->name('carrito');
//Route::get('registraServicio','ServiciosControler@formulario');
Route::get('editaServicio/{_id?}','ServiciosControler@form')->name('editaServicio.edit');
Route::get('registraServicio/{_id?}','ServiciosControler@formulario');
Route::put('registraServicio/update/{_id}','ServiciosControler@editServicio')->name('registraServicio.update');
Route::put('editaServicio/update/{_id}','ServiciosControler@editServicio')->name('editaServicio.update');
Route::get('editaServicio/{_id?}','ServiciosControler@formulario');



route::post('registraServicio','ServiciosControler@insert')->name('registraServicio');
route::delete('{id?}','ServiciosControler@destroy');


Route::resource('varios','variosmetodosrecursos');

Route::resource('varios1','variosmetodosrecursos')->only(['index','show']);

Route::resource('varios2','variosmetodosrecursos')->except(['create','store','update','destroy']);

Route::resource('varios3','variosmetodosrecursos')->only(['index','show'])->names(['index' => 'varios.inicio']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
