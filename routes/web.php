<?php

use App\Http\Controllers\controlsiswa;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/login', 'AuthController@login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/kelas', 'controlsiswa@index');
Route::post('/kelas/create', 'controlsiswa@create');
Route::get('/kelas/create', 'controlsiswa@create');
Route::get('/kelas/{kelas_id}/edit', 'controlsiswa@edit');
Route::post('/kelas/{kelas_id}/update', 'controlsiswa@update');
Route::get('/kelas/{kelas_id}/delete', 'controlsiswa@delete');
