<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\LoginApiController;
use App\Http\Controllers\CetakController;

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

Route::resource('/login',LoginController::class);
Route::get('/halaman_login', function () {
    return view('login');
});
Route::get('profile', [ProfileController::class, 'profil']);

Route::resource('/bisa',LoginApiController::class);
//Route::get('/jurnal/cetak_pdf', 'CetakController@cetak_pdf');
Route::get('jurnal/cetak_pdf', [CetakController::class, 'cetak_pdf']);