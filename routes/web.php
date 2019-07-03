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

/** WebController */
    Route::get('/', function (){
        return redirect()->route('web.inicio');
    });

    Route::get('/el-club', 'WebController@inicio')->name('web.inicio');

    Route::prefix('el-club')->middleware('admin')->group(function(){
/** CorreoController */
        Route::post('/contactar', 'CorreoController@contactar')->name('correo.contactar');

        Route::get('/gracias', 'CorreoController@gracias')->name('correo.gracias');
    });