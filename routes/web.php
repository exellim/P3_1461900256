<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerDokter;

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
    return view('welcome');
});

Route::resource('pasien0256',ControllerDokter::class);
Route::resource('/pasien0256', 'App\Http\Controllers\ControllerDokter');
Route::post('/pasien0256/update','ControllerDokter@update');
Route::resource('/pasien0256', ControllerDokter::class);

//Route::get('/pasien', 'App\Http\Controllers\ControllerDokter@index');