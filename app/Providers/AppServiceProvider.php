<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menu = ['Phone','Laptop'];
        View::share('menu',$menu);
        Paginator::useBootstrap();
        $categories = Category::all();
        View::share('categories',$categories);
        $posts = Post::paginate(1);
        View::share('posts',$posts);
        $posts2 = Post::paginate(3);
        View::share('posts2',$posts2);
    }
}
