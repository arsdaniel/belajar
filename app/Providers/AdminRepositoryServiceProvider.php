<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Admin\Interfaces\PostRepositoryInterface;
use App\Repositories\Admin\PostRepository;

use App\Repositories\Admin\Interfaces\PageRepositoryInterface;
use App\Repositories\Admin\PageRepository;

use App\Repositories\Admin\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Admin\CategoryRepository;

use App\Repositories\Admin\Interfaces\TagRepositoryInterface;
use App\Repositories\Admin\TagRepository;

class AdminRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PostRepositoryInterface::class,
            PostRepository::class
        );

        $this->app->bind(
            PageRepositoryInterface::class,
            PageRepository::class
        );

        $this->app->bind(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );

        $this->app->bind(
            TagRepositoryInterface::class,
            TagRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       
    }

    
}
