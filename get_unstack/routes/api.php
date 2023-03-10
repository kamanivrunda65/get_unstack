<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/questiondata', [App\Http\Controllers\QuestionController::class, 'show']);
Route::get('/blogdata', [App\Http\Controllers\BlogController::class, 'show']);
Route::get('/deletequestion/{id}', [App\Http\Controllers\QuestionController::class, 'destroy']);
Route::post('/postquestion', [App\Http\Controllers\QuestionController::class, 'store']);
Route::post('/changepassword', [App\Http\Controllers\ProfileController::class, 'changepassword']);



