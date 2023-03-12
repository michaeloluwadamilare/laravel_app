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


Route::get('/','PollingUnitController@index');
Route::get('polling_units_result/{id}','PollingUnitController@show');
Route::get('lga','LgaController@index');
Route::get('pollsave','PollingUnitController@pollsave');
Route::post('/lga_result','LgaController@result'); 
Route::post('/poll_store','PollingUnitController@store'); 
// Route::get('polling_units', function()
// {
//     return View::make('polling_units');
    
// });
