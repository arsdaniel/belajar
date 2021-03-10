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

use App\Repositories\Admin\Interfaces\SantriRepositoryInterface;
use App\Repositories\Admin\SantriRepository;


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
            AdminRepositoryInterface::class,
            AdminRepository::class
        );

        $this->app->bind(
            BiodatawaliRepositoryInterface::class,
            BiodatawaliRepository::class
        );

        $this->app->bind(
            SantriRepositoryInterface::class,
            SantriRepository::class
        );

        $this->app->bind(
            TagRepositoryInterface::class,
            TagRepository::class
        );

        $this->app->bind(
            DocRepositoryInterface::class,
            DocRepository::class
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
