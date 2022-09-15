<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\FacturaController;
use App\Http\Controllers\AutenticarController;

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

Route::group(['middleware' => ['cors']], function () {
    Route::get('producto',[ProductController::class, 'index']);
    Route::post('cliente',[ClientController::class, 'store']);
    Route::post('registro',[AutenticarController::class, 'registro']);
    Route::post('login',[AutenticarController::class, 'login']);
    Route::post('venta',[FacturaController::class, 'factura']);
    Route::get('producto/{product}',[ProductController::class, 'show']);
});

//Route::get('producto',[ProductController::class, 'index']);
//Route::post('cliente',[ClientController::class, 'store']);
//Route::get('producto/{product}',[ProductController::class, 'show']);
