<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.footer', function ($view) {
            $archives = \App\Post::archives();
            $tags = \App\Tag::has('posts')->pluck('name');
            
            $view->with(compact('archives', 'tags'));
        });

        view()->composer(
            ['posts.index', 'galleries.index'],
            function ($view) {
                 $tags = \App\Tag::has('galleries')->pluck('name');
                 $view->with(compact('tags'));
            }
        );
           

        // view()->composer('posts.index', function ($view) {
        //     $tags = \App\Tag::has('galleries')->pluck('name');
        //     $view->with(compact('tags'));
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
