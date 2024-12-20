<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\CategotyInterface;
use App\Contracts\PostInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->singleton(CategoryInterface::class, CategoryRepository::class);
        $this->app->singleton(PostInterface::class, PostRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
