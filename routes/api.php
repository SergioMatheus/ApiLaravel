<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/cadastro','UserController@registrar');

Route::group(['middleware' => ['auth:api']], function () {



Route::get('/', function () {

    return response()->json([
        'mensage' => 'Jobs API', 'status' => 'connect',
    ]);
});

// Route::resource('/jobs', 'JobsController');
// Route::resource('/companies', 'CompaniesController');
Route::get('/jobs', 'JobsController@index')->middleware('scope:usuario,administrador');
Route::get('/companies', 'CompaniesController@index')->middleware('scope:usuario,administrador');
Route::post('/companies/{id}', 'CompaniesController@store')->middleware('scope:administrador');
Route::post('/jobs/{id}', 'JobsController@store')->middleware('scope:administrador');
Route::put('/jobs/{id}', 'JobsController@update')->middleware('scope:administrador');
Route::put('/companies/{id}', 'CompaniesController@update')->middleware('scope:administrador');
Route::delete('/companies/{id}', 'CompaniesController@destroy')->middleware('scope:administrador');
Route::delete('/jobs/{id}', 'JobsController@destroy')->middleware('scope:administrador');


Route::get('/', function () {
    return redirect('api');
});

});
