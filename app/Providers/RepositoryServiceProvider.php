<?php

namespace acessoSystem\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {



        $this->app->bind(
            'acessoSystem\Repositories\UserRepository',
            'acessoSystem\Repositories\UserRepositoryEloquent'
        );

        $this->app->bind(
            'acessoSystem\Repositories\ClientRepository',
            'acessoSystem\Repositories\ClientRepositoryEloquent'
        );

        $this->app->bind(
            'acessoSystem\Repositories\SponsorRepository',
            'acessoSystem\Repositories\SponsorRepositoryEloquent'
        );

        $this->app->bind(
            'acessoSystem\Repositories\ProtocolRepository',
            'acessoSystem\Repositories\ProtocolRepositoryEloquent'
        );
        $this->app->bind(
            'acessoSystem\Repositories\ProtocolFileRepository',
            'acessoSystem\Repositories\ProtocolFileRepositoryEloquent'
        );

        $this->app->bind(
            'acessoSystem\Repositories\DeliverableRepository',
            'acessoSystem\Repositories\DeliverableRepositoryEloquent'
        );

        $this->app->bind(
            'acessoSystem\Repositories\DeliverableFilesRepository',
            'acessoSystem\Repositories\DeliverableFilesRepositoryEloquent'
        );

    }
}
