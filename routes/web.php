<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/contact_us',[\App\Http\Controllers\ContactController::class,'contact']);

Route::post('/send_message',[\App\Http\Controllers\ContactController::class,'sendEmail'])->name('contact.send');



Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('comments/{post_id}', [\App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');

