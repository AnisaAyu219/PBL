<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\ImageController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\RatingController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('create_absen', [AbsenController::class, 'create']);
Route::get('/detail_absen/{nisn}', [AbsenController::class, 'detail']);
Route::get('/detail_absen', [AbsenController::class, 'index']);
Route::post('/create_jurnal', [JurnalController::class, 'create']);
Route::patch('/update_jurnal/{id}', [JurnalController::class, 'update']);
Route::delete('/delete_jurnal/{id}', [JurnalController::class, 'delete']);
Route::get('/detail_jurnal/{id}', [JurnalController::class, 'detail']);
Route::get('/detail_jurnal', [JurnalController::class, 'index']);
Route::post('/create_rating', [RatingController::class, 'create']);
Route::post('/image',[ImageController::class, 'imageStore']);
