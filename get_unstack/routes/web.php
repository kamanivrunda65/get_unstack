<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AskquestionController;




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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('layouts.home');
Route::get('/home', [App\Http\Controllers\IndexController::class, 'index'])->name('layouts.home');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('layouts.contact');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('layouts.login');
Route::get('/signup', [App\Http\Controllers\SignupController::class, 'index'])->name('layouts.signup');
Route::get('/question', [App\Http\Controllers\QuestionController::class, 'index'])->name('layouts.question');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('layouts.blog');
Route::get('/askquestion', [App\Http\Controllers\AskquestionController::class, 'index'])->name('layouts.askquestion');



