<?php

namespace Exadra37\PackageSkeleton;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class PackageSkeletonServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/../routes.php';
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->updateModelFactoriesPath();
        $this->bindInterfaces();
    }

    /**
     * Change the model factories path to point within the package
     *
     * @return void
     */
    protected function updateModelFactoriesPath()
    {
        if ($this->app->environment() === 'testing') {
            $this->app->singleton('Illuminate\Database\Eloquent\Factory', function () {
                $faker = \Faker\Factory::create();

                return Factory::construct($faker, __DIR__ . '/../setup/factories/');
            });
        }
    }

    /**
     * Bind the interfaces to concrete implementations so Laravel's IoC knows what classes to inject
     *
     * @return void
     */
    public function bindInterfaces()
    {
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Controllers\BaseControllerInterface', 'Exadra37\PackageSkeleton\Controllers\BaseController');
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Controllers\ResourceControllerInterface', 'Exadra37\PackageSkeleton\Controllers\ResourceController');
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Exceptions\ResourceControllerExceptionInterface', 'Exadra37\PackageSkeleton\Exceptions\ResourceControllerException');
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Handlers\ResourceHandlerInterface', 'Exadra37\PackageSkeleton\Handlers\ResourceHandler');
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Models\ResourceModelInterface', 'Exadra37\PackageSkeleton\Models\ResourceModel');
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Repositories\ResourceRepositoryInterface', 'Exadra37\PackageSkeleton\Repositories\ResourceRepository');
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Services\ResourceServiceInterface', 'Exadra37\PackageSkeleton\Services\ResourceService');
    }

}