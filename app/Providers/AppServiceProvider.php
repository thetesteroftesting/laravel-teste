<?php

namespace App\Providers;


use App\Repositories\Question\Interfaces\QuestionRepositoryInterface;
use App\Repositories\Question\Interfaces\TestRepositoryInterface;
use App\Repositories\Question\QuestionRepository;
use App\Repositories\Question\TestRepository;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(QuestionRepositoryInterface::class, QuestionRepository::class);
        $this->app->bind(TestRepositoryInterface::class, TestRepository::class);
    }
}
