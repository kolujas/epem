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
    Route::get('/', 'WebController@inicio')->name('web.inicio');

    Route::middleware('auth')->group(function(){
        Route::middleware('admin')->group(function(){
            Route::get('/panel', 'WebController@panel')->name('web.panel');
        });
    });

    /** CorreoController */
    Route::post('/contactar', 'CorreoController@contactar')->name('correo.contactar');

    Route::get('/gracias', 'CorreoController@gracias')->name('correo.gracias');

/** AuthController */
    Route::get('/ingresar', 'AuthController@showIngresar')->name('auth.showIngresar');

    Route::post('/ingresar', 'AuthController@doIngresar')->name('auth.doIngresar');

    Route::get('/registrar', 'AuthController@showRegistrar')->name('auth.showRegistrar');

    Route::post('/registrar', 'AuthController@doRegistrar')->name('auth.doRegistrar');

    Route::middleware('auth')->group(function(){
        Route::get('/salir', 'AuthController@doSalir')->name('auth.doSalir');
        
/** NoticiaController */
        Route::middleware('admin')->group(function(){
            Route::get('/noticia/crear', 'NoticiaController@showCrear')->name('noticia.showCrear');

            Route::post('/noticia/crear', 'NoticiaController@doCrear')->name('noticia.doCrear');
        });
    });