<?php

use Illuminate\Support\Facades\Route;

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
Route::get('a',function(){
    \Illuminate\Support\Facades\Log::error('Test Error');
    \Illuminate\Support\Facades\Log::info('Test Info 2');
    return view('form');
})->name('home');
Route::prefix('backend')->name('backend.')->group(function(){
    Route::get('dashboard',function(){
        return view('backend/dashboard');
    })->name('dashboard');  
    Route::prefix('posts')->name('posts.')->group(function(){
        Route::get('/list', function () {
            return view('backend/posts/list');
        })->name('list');
        Route::view('/create', 'backend/posts/create')->name('create');
        Route::post('/store', function () {
            return redirect()->route('backend.posts.list');
        })->name('store');
        Route::view('/edit', 'backend/posts/edit')->name('edit');
        Route::put('/update', function () {
            return redirect()->route('backend.posts.list');
        })->name('update');
    }); 
    Route::prefix('users')->name('users.')->group(function(){
        Route::get('/list', function () {
            return view('backend/users/list');
        })->name('list');
        Route::view('/create', 'backend/users/create')->name('create');
        Route::post('/store', function () {
            return redirect()->route('backend.users.list');
        })->name('store');
        Route::view('/edit', 'backend/users/edit')->name('edit');
        Route::put('/update', function () {
            return redirect()->route('backend.users.list');
        })->name('update');
    }); 
    Route::prefix('users2')->name('users2.')->group(function(){
        Route::get('/list', function () {
            return view('backend/users2/list');
        })->name('list');
        Route::view('/create', 'backend/users2/create')->name('create');
        Route::post('/store', function () {
            return redirect()->route('backend.users2.list');
        })->name('store');
        Route::view('/edit', 'backend/users2/edit')->name('edit');
        Route::put('/update', function () {
            return redirect()->route('backend.users2.list');
        })->name('update');
    }); 
});
