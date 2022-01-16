<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// GUEST PAGES
Route::get('/', 'MainPageController@index');
Route::get('destacados/{item}', 'MainPageController@show');
Route::get('producto/{varItem}', 'ItemsController@show');
Route::get('/Account', 'StoreController@AccountTypeShow');
 
//CART ROUTES
Route::get('/ShoppingCart', 'ShoppingController@index');
Route::get('/shoppingCart', 'ShoppingController@store');
Route::post('/updateCart', 'ShoppingController@update');
Route::post('/deleteCartItem', 'ShoppingController@destroy');

//BUUY ROUTES
Route::get('/comprar', 'BuyItemController@index');
Route::get('/ADDR', 'BuyItemController@ADDR');
Route::post('/newADDR', 'BuyItemController@newADDR');
Route::get('/drumroll', 'BuyItemController@tryTransaction')->middleware('auth');

// MAINPAGE ROUTES
Route::get('/paraHombres', 'CategoryController@paraHombres');
Route::get('/ComoVender', 'MainPageController@comoVender')->name('comoVender');
Route::get('Categorias/{categoria}', 'CategoriasController@index');

// MY STORE ROUTE
Route::get('/negocio/{myStore:nombreNegocio}', 'StoreController@index')->middleware('auth');

// USER ROUTES
Route::get('/perfil/{user:name}', 'UserController@index')->middleware('auth');
Route::get('/prefil/{user:name}/update')->middleware('auth'); //inclompleto
Route::get('/perfil/{user:name}/direcciones', 'DireccionesController@index')->middleware('auth');
Route::get('/perfil/{user:name}/direcciones/agregar', 'DireccionesController@create')->name('direcciones')->middleware('auth');


Route::post('/NuevaDireccion', 'DireccionesController@store')->middleware('auth');
// DELETE ADDRESS\
Route::delete('/perfil/{direccion:id}/delete', 'DireccionesController@destroy')->middleware('auth');
Route::delete('/negocio/{store:id}/delete', 'StoreController@destroy')->middleware('auth');
Route::delete('/user/{user:id}/delete', 'UserController@destroy')->middleware('auth');
// UPDATE ADDRESS
Route::get('/perfil/{direccion:id}/editar', 'DireccionesController@edit')->middleware('auth');
Route::put('/perfil/{direccion:id}/update', 'DireccionesController@update')->middleware('auth');
//CREAR NEGOCIO
Route::get('/iniciar-mi-negocio', 'StoreController@create'); // crear negocio view
Route::post('/iniciar-mi-negocio', 'StoreController@store'); // guardar info del negocio
Route::get('/cheese', 'ItemsController@update');
Route::get('/updateItem', 'ItemsController@updateItem');
Route::get('/selectedSize', 'ItemsController@updateSizeItem');
//CREAR PRODUCTO
Route::get('/negocio/{myStore:nombreNegocio}/nuevo-producto', 'StoreController@createItem'); // crear view
Route::post('/nuevo-producto', 'StoreController@storeItem');//guardar
Route::get('/negocio/{myStore:nombreNegocio}/productos/', 'StoreController@showItem')->middleware('auth');// items view
Route::get('/negocio/{myStore:nombreNegocio}/productos/{item}', 'StoreController@thisItem')->middleware('auth'); // 1


// DELETE ITEM
Route::delete('/negocio/{myStore:nombreNegocio}/productos/{item:id}', 'StoreController@destroyItem');


//EDIT Store 
Route::get('/negocio/{myStore:nombreNegocio}/editar', 'StoreController@edit')->middleware('auth');
Route::put('/negocio/{myStore:nombreNegocio}/editar', 'StoreController@update')->middleware('auth');
Auth::routes();


// EDIT ITEM
Route::get('/negocio/{myStore:nombreNegocio}/{item}/editar', 'StoreController@editItem')->middleware('auth');
Route::put('/negocio/{myStore:nombreNegocio}/{item:id}/editar', 'StoreController@updateItem')->middleware('auth');




// SEARCH
Route::post ( '/search', 'SearchController@mySearch');
Route::get('/negocio/compras/{negocio}', 'SearchController@masNegocio');
