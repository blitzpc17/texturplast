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
    return view('Frontend.inicio');
})->name('inicio');

Route::get('catalogos/productos/{tipo}', 'CatalogosController@CatalogoProductos');
Route::get('glosario', 'GlosarioController@Glosario')->name('glosario');
/*Route::get('glosario/listar', 'GlosarioController@ListarConceptos');*/


Route::group(["prefix"=>"backend"], function(){
    Route::get('glosario/new', 'GlosarioController@GlosarioAdmin')->name('glosario.new');
    Route::post('glosario/add', 'GlosarioController@Add')->name('glosario.add');   
});



