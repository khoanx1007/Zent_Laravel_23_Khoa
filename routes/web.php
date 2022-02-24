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

Route::prefix('backend')->name('backend.')->group(function(){
    Route::get('dashboard',function(){
        return view('dashboard');
    })->name('dashboard.index');  
    Route::prefix('categories')->name('categories.')->group(function(){
        Route::get('/list', function () {
            return view('list');
        })->name('list');
        Route::view('/create', 'create')->name('create');
        Route::post('/store', function () {
            return redirect()->route('backend.categories.list');
        })->name('store');
        Route::view('/edit', 'edit')->name('edit');
        Route::put('/update', function () {
            return redirect()->route('backend.categories.list');
        })->name('update');
    }); 
});
