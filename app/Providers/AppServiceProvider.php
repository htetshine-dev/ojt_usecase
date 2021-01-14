<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //usecase
        $this->app->bind(
            \Domain\Usecase\TestUsecase::class,
            \Domain\Usecase\Interactor\TestInteractor::class
        );

        //repository
        $this->app->bind(
            \Domain\Repository\TestRepository::class,
            \App\RepositoryImpl\TestRepositoryImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
