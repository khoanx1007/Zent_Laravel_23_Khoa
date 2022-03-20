<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;

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
Route::get('/',function(){
    return view('frontend/main/index');
    })->name('home');
Route::prefix('backend')
    ->name('backend.')
    ->middleware('auth')
    ->namespace('Backend')
    ->group(function(){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/users/recycle', 'UserController@index2')->name('users.index2');  
    Route::get('/users/recycle/{user}','UserController@restore')->name('users.restore');
    Route::get('/categories/recycle', 'CategoryController@index2')->name('categories.index2');  
    Route::get('/categories/recycle/{user}','CategoryController@restore')->name('categories.restore');
    Route::resources([
        'posts' => PostController::class,
        'users' => UserController::class,
        'categories' => CategoryController::class,
    ]); 
});
    Route::prefix('/')
        ->namespace('Auth')
        ->name('auth.')->group(function(){
            Route::get('/register', 'RegisteredUserController@create')
            ->middleware('guest')
            ->name('register');
            Route::post('/register','RegisteredUserController@store')
            ->middleware('guest');
            Route::get('/login', 'LoginController@create')
            ->middleware('guest')
            ->name('login');
            Route::post('/login', 'LoginController@authenticate')
            ->middleware('guest')
            ->name('login');
            Route::post('/logout', 'LoginController@logout')
            ->name('logout');
        });
