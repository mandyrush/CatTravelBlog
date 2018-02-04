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
            ['posts.index', 'photos.index', 'photos.create'],
            function ($view) {
                 //$tags = \App\Tag::has('galleries')->pluck('name');
                 $tags = \App\Tag::get()->all();
                 $view->with(compact('tags'));
            }
        );

        // Run this on a fresh install
        // This will move the 'adminlte' vendor files to a usable spot in the public folder
        $this->publishes([
            base_path('vendor/almasaeed2010/adminlte') => public_path('vendor/adminlte'),
        ], 'vendor');
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
