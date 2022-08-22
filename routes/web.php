<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\RequestController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', function () {
    return view('post');
});

//Home 
Route::get('/staybnb', [HomePageController::class, 'home'])->name('auth.home');
//Home page Adds
Route::get('/staybnb{parmalink}', [HomePageController::class, 'allads'])->name('ads');

//REGISTER
Route::post('/home', [UserController::class, 'store'])->name('auth.store');

//LOGIN
// Route::post('/auth/login',[UserController:: class,'login'])->name('auth.login');
Route::post('/auth/dashboard', [UserController::class, 'check'])->name('auth.login');

//LOGOUT
Route::get('/home', [UserController::class, 'logout'])->name('auth.logout');

//USER-DASHBOARD
Route::get('/auth/dashboard', [UserController::class, 'dash']);


//PROFILE
Route::get('/auth/dashboard/profile/{id}', [UserController::class, 'profile'])->name('auth.profile');

//HOST
Route::get('/auth/dashboard/host/{id}', [UserController::class, 'host'])->name('auth.host');
Route::post('/auth/dashboard/host/posts/{id}', [PostController::class, 'store'])->name('auth.host.posts');


//SEARCH
Route::get('/auth/dashboard/search/{id}', [UserController::class, 'search'])->name('auth.search');
Route::post('/auth/dashboard/search/{id}', [SearchController::class, 'getSearchResult']);

//POST DETAILED VIEW
Route::get('/auth/dashboard/search/posts/{User_id}/{post_id}', [PostController::class, 'detailedView'])->name('post.detailedView');

//POST-REQUEST
Route::post('/auth/dashboard/search/posts/{User_id}/{post_id}/checkout', [RequestController::class, 'store1'])->name('post.request1');
Route::post('/auth/dashboard/search/posts/{User_id}/{post_id}', [RequestController::class, 'store2'])->name('post.request2');;


//MIDDLE WARE
// Route::group(['middleware' => ['AuthCheck']], function () {
Route::get('/staybnb/signup', [UserController::class, 'register'])->name('auth.register');

//USER-DASHBOARD
Route::get('/auth/dashboard', [UserController::class, 'dashboard'])->name('auth.dashboard');
// });



//ALL-USER
Route::get('/users', [UserController::class, 'allusers']);
