<?php

use Illuminate\Support\Facades\Route;

#Importación del controlador
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FollowsController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('follow/{user}', [FollowsController::class,'store'] );

Route::get('/p/create',[PostsController::class,'create'])->name('post.create');

Route::post('/p',[PostsController::class,'store'])->name('posts.store');

Route::get('/p/{post}',[PostsController::class,'show']);

#Enrutando profile/user
Route::get('/profile/{user}', [ProfilesController::class,'index'])->name('profile.show');

Route::get('/profile/{user}/edit', [ProfilesController::class,'edit'])->name('profile.edit');

Route::patch('/profile/{user}', [ProfilesController::class,'update'])->name('profile.update');
