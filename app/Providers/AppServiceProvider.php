<?php

namespace App\Providers;

use App\Repositories\Question\QuestionAnswerInterface;
use App\Repositories\Question\QuestionAnswerRepository;
use App\Repositories\Question\QuestionRepository;
use App\Repositories\User\QuestionRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\Test\QuestionService;
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
        // Repositories
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(QuestionAnswerInterface::class, QuestionAnswerRepository::class);
        $this->app->bind(\App\Repositories\Question\QuestionRepositoryInterface::class, QuestionRepository::class);

        // Services
        $this->app->bind('QuestionService', QuestionService::class);
    }
}
