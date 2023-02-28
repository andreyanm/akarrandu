<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['middleware' => 'api', 'namespace' => 'App\Http\Controllers\API','prefix' => 'auth'], function ($router) {
    Route::post('register', [APIAuthController::class, 'register']);
	Route::post('login', [APIAuthController::class, 'login']);
    Route::post('logout', [APIAuthController::class, 'logout']);
    Route::post('refresh', [APIAuthController::class, 'refresh']);
});

Route::group(['middleware' => 'jwt.auth'],function(){
    //API PENJUALAN
    Route::get('get_kecamatan', [APIKecamatanController::class, 'list']);
    Route::get('get_kelurahan', [APIKelurahanController::class, 'list']);
    Route::get('get_kelurahan/{id}', [APIkelurahanController::class, 'show']);
});