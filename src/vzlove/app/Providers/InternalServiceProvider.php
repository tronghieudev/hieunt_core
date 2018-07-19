<?php

namespace App\Providers;

use App\Services\Internals\UserService\UserService;
use App\Services\Internals\UserService\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class InternalServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserServiceInterface::class, UserService::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            UserServiceInterface::class
        ];
    }

}
