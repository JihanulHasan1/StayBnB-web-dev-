<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', function () {
    return view('post');
});

//Home 
Route::get('/staybnb', [UserController::class, 'home'])->name('auth.home');



//register 
Route::post('/home', [UserController::class, 'store'])->name('auth.store');

//login
// Route::post('/auth/login',[UserController:: class,'login'])->name('auth.login');
Route::post('/auth/dashboard', [UserController::class, 'check'])->name('auth.login');

//Logout
Route::get('/home', [UserController::class, 'logout'])->name('auth.logout');


//profile
Route::post('/auth/dashboard/profile', [UserController::class, 'profile'])->name('auth.profile');




Route::get('/users', [UserController::class, 'allusers']);



//host
Route::get('/auth/dashboard/host/{id}', [UserController::class, 'host'])->name('auth.host');
Route::post('/auth/dashboard/host/posts/{id}', [PostController::class, 'store'])->name('auth.host.posts');


//search
Route::get('/auth/dashboard/search/{id}', [UserController::class, 'search'])->name('auth.search');
Route::post('/auth/dashboard/search/{id}', [UserController::class, 'getSearchResult']);


//all Ads
Route::get('/index/{parmalink}', [UserController::class, 'allads'])->name('ads');




Route::get('/auth/dashboard', [UserController::class, 'dash']);



//Middle Ware
// Route::group(['middleware' => ['AuthCheck']], function () {

Route::get('/staybnb/signup', [UserController::class, 'register'])->name('auth.register');


//dashboad
Route::get('/auth/dashboard', [UserController::class, 'dashboard'])->name('auth.dashboard');
// });
