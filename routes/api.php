<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\TransactionController;


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
Route::post('register', [RegisterController::class, 'register'])->name('register');;
Route::post('login', [RegisterController::class, 'login'])->name('login');
Route::get('login', [RegisterController::class, 'showLogin'])->name('showlogin');

Route::middleware('auth:api')->group( function () {
    Route::get('transactions',[TransactionController::class, 'index']);
});
// Route::get('transactions',[TransactionController::class, 'index'])->middleware('auth:api');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
