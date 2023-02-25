<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AllquestionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdmindashboardController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('layouts.home');
Route::get('/home', [App\Http\Controllers\IndexController::class, 'index'])->name('layouts.home');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('layouts.contact');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('layouts.login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);
Route::get('/signup', [App\Http\Controllers\SignupController::class, 'index'])->name('layouts.signup');
Route::post('/signup', [App\Http\Controllers\SignupController::class, 'store']);
Route::get('/question', [App\Http\Controllers\QuestionController::class, 'index'])->name('layouts.question');
Route::post('/question', [App\Http\Controllers\QuestionController::class, 'store']);
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('layouts.blog');
Route::get('/allquestion', [App\Http\Controllers\AllquestionController::class, 'index'])->name('layouts.allquestion');
Route::get('/questiontable', [App\Http\Controllers\AllquestionController::class, 'showquestions'])->name('admin.questiontable');

Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('layouts.post');
Route::get('/notification', [App\Http\Controllers\NotificationController::class, 'index'])->name('layouts.notification');
Route::get('/referral', [App\Http\Controllers\ReferralController::class, 'index'])->name('layouts.referral');
Route::get('/setting', [App\Http\Controllers\SettingController::class, 'index'])->name('layouts.setting');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('layouts.profile');
Route::get('/admindashboard', [App\Http\Controllers\AdmindashboardController::class, 'index'])->name('admin.admindashboard');








