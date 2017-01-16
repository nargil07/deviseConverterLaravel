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

Route::get('/web', function (){
    return view('base');
});

Route::get('/', ['uses'=>'DeviseController@all']);

Route::get('/{identifiant}', ['uses'=>'DeviseController@detail']);

Route::get('/{idFrom}/{idTo}', ['uses'=>'DeviseController@convert']);
