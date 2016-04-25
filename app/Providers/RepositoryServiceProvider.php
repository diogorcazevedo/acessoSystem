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
            'acessoSystem\Repositories\ProjectRepository',
            'acessoSystem\Repositories\ProjectRepositoryEloquent'
        );

        $this->app->bind(
            'acessoSystem\Repositories\DeliverableRepository',
            'acessoSystem\Repositories\DeliverableRepositoryEloquent'
        );

        $this->app->bind(
            'acessoSystem\Repositories\DeliverableFilesRepository',
            'acessoSystem\Repositories\DeliverableFilesRepositoryEloquent'
        );

        $this->app->bind(
            'acessoSystem\Repositories\ContactRepository',
            'acessoSystem\Repositories\ContactRepositoryEloquent'
        );

        $this->app->bind(
            'acessoSystem\Repositories\AppealRepository',
            'acessoSystem\Repositories\AppealRepositoryEloquent'
        );

        $this->app->bind(
            'acessoSystem\Repositories\WarningRepository',
            'acessoSystem\Repositories\WarningRepositoryEloquent'
        );
        $this->app->bind(
            'acessoSystem\Repositories\RoleRepository',
            'acessoSystem\Repositories\RoleRepositoryEloquent'
        );
        $this->app->bind(
            'acessoSystem\Repositories\PermissionRepository',
            'acessoSystem\Repositories\PermissionRepositoryEloquent'
        );
        $this->app->bind(
            'acessoSystem\Repositories\EntryRepository',
            'acessoSystem\Repositories\EntryRepositoryEloquent'
        );
        $this->app->bind(
            'acessoSystem\Repositories\FreeRepository',
            'acessoSystem\Repositories\FreeRepositoryEloquent'
        );
        $this->app->bind(
            'acessoSystem\Repositories\BankingRepository',
            'acessoSystem\Repositories\BankingRepositoryEloquent'
        );
        $this->app->bind(
            'acessoSystem\Repositories\BradescoBankingsRepository',
            'acessoSystem\Repositories\BradescoBankingsRepositoryEloquent'
        );
    }
}
