<?php

// Route::get('/', function () {
//     return view('auth/login');
// });

// Auth::routes();

Route::get('/', 'AuthController@index')->name('login');
Route::post('/login', 'AuthController@login');

Route::group(['middleware'=>['auth']],function(){

/*==================================LOGOUT=================================*/
    Route::post('/logout',function(){
        Auth::logout();
        return redirect()->route('login');
    });
    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->route('login');
    });
/*============================================================================*/

/*================================TELA INICIAL================================*/
    Route::get('/home', 'HomeController@index')->name('home');
/*============================================================================*/

/*==================================REGISTRAR=================================*/
    Route::get('/register', 'AuthController@create');
    Route::post('register', 'AuthController@store');
/*============================================================================*/
});

Route::resource('imprensa', 'ImprensaController');
Route::resource('solicitadesign', 'SolicitadesignController');
Route::resource('facejorge', 'FacejorgeController');
Route::resource('facepref',  'FaceprefController');