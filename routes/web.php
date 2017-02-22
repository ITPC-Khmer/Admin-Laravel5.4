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
    return view('layouts.admin');
});



Route::get('/a/{id}', 'MyController@index')
    ->middleware(['myauth:1,2,3,dara,true']);
    //->middleware('myauth:1,5,[1,5,8,9,"Dara"]');


Route::group(['namespace'=>'Admin','prefix'=>'cpanel'],function (){
    //===== Page =====
    Route::get('/page.html','PageController@index');
    Route::get('/page-form.html','PageController@form');
    Route::put('/page-form.html','PageController@edit');
    Route::post('/page-save.html','PageController@save');
    Route::delete('/page-delete.html','PageController@delete');

});
