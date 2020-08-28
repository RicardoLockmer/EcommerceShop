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
Route::get('producto/{item}', 'ItemsController@show');

// MAIN ROUTES
// MY STORE ROUTE
Route::get('/negocio/{myStore:nombreNegocio}', 'StoreController@index')->middleware('auth'); // mi tienda view


//CREAR NEGOCIO
Route::get('/iniciar-mi-negocio', 'StoreController@create')->middleware('auth'); // crear negocio view
Route::post('/iniciar-mi-negocio', 'StoreController@store')->middleware('auth'); // guardar info del negocio


//CREAR PRODUCTO
Route::get('/negocio/{myStore:nombreNegocio}/nuevo-producto', 'StoreController@createItem')->middleware('auth'); // crear view
Route::post('/negocio/{myStore:nombreNegocio}/nuevo-producto',
'StoreController@storeItem')->middleware('auth');//guardar
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
