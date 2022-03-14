<?php


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
Route::get('a',function(){
    \Illuminate\Support\Facades\Log::error('Test Error');
    \Illuminate\Support\Facades\Log::info('Test Info 2');
    return view('form');
})->name('home');
Route::prefix('backend')
    ->name('backend.')
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
    // Route::prefix('posts')->name('posts.')->group(function(){
    //     Route::get('/list', function () {
    //         return view('backend/posts/list');
    //     })->name('list');
    //     Route::view('/create', 'backend/posts/create')->name('create');
    //     Route::post('/store', function () {
    //         return redirect()->route('backend.posts.list');
    //     })->name('store');
    //     Route::view('/edit/{id}', 'backend/posts/edit')->name('edit');
    //     Route::put('/update/{id}', function () {
    //         return redirect()->route('backend.posts.list');
    //     })->name('update');
    //     Route::resource('posts',PostController::class);
    //     Route::get('dashboard',function(){
    //         return view('backend/posts/dashboard');
    //}); 
        //Route::prefix('users')->name('users.')->group(function(){
        // Route::get('/list', function () {
        //     return view('backend/users/list');
        // })->name('list');
        // Route::view('/create', 'backend/users/create')->name('create');
        // Route::post('/store', function () {
        //     return redirect()->route('backend.users.list');
        // })->name('store');
        // Route::view('/edit/{id}', 'backend/users/edit')->name('edit');
        // Route::put('/update/{id}', function () {
        //     return redirect()->route('backend.users.list');
        // })->name('update');
        //}); 
});
