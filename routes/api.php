<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventApiController;

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


// Index
Route::get('/', [EventApiController::class, 'index']);
Route::get('/profile/{event}', [EventApiController::class, 'viewProfile']);
Route::get('/details/{event}', [EventApiController::class, 'show']);
Route::post('/search', [EventApiController::class, 'search']);
Route::get('/events/{category}', [EventApiController::class, 'eventPage']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
