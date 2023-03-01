<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact'])->name('contact');
Route::get('/question', [App\Http\Controllers\QuestionController::class, 'index'])->name('askquestion');
Route::post('/question', [App\Http\Controllers\QuestionController::class, 'store']);
Route::get('/allquestion', [App\Http\Controllers\QuestionController::class, 'allquestion'])->name('allquestion');
Route::get('/questiondetail', [App\Http\Controllers\QuestionController::class, 'singlequestion'])->name('singlequestion');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
Route::get('/setting', [App\Http\Controllers\ProfileController::class, 'setting'])->name('setting');
Route::get('/referral', [App\Http\Controllers\ProfileController::class, 'referral'])->name('referral');
Route::get('/notification', [App\Http\Controllers\ProfileController::class, 'notification'])->name('notification');
Route::get('/post', [App\Http\Controllers\BlogController::class, 'post'])->name('post');
Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'blogs'])->name('blogs');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'singleblog'])->name('singleblog');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admindashboard');
Route::get('/questiontable', [App\Http\Controllers\AdminController::class, 'questiontable'])->name('questiontable');


?>
