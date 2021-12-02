<?php

namespace Laradocs\Repository;

use Illuminate\Support\ServiceProvider;
use Laradocs\Repository\Console\RepositoryMakeCommand;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ( $this->app->runningInConsole() ) {
            $this->commands ( [
                RepositoryMakeCommand::class,
            ] );
        }
    }
}
