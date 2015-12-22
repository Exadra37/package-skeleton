<?php

namespace Exadra37\PackageSkeleton;

use Illuminate\Support\ServiceProvider;

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
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Controllers\BaseControllerInterface', 'Exadra37\PackageSkeleton\Controllers\BaseController');
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Controllers\ResourceControllerInterface', 'Exadra37\PackageSkeleton\Controllers\ResourceController');
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Exceptions\ResourceControllerExceptionInterface', 'Exadra37\PackageSkeleton\Exceptions\ResourceControllerException');
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Handlers\ResourceHandlerInterface', 'Exadra37\PackageSkeleton\Handlers\ResourceHandler');
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Models\ResourceModelInterface', 'Exadra37\PackageSkeleton\Models\ResourceModel');
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Repositories\ResourceRepositoryInterface', 'Exadra37\PackageSkeleton\Repositories\ResourceRepository');
        $this->app->bind('Exadra37\PackageSkeleton\Interfaces\Services\ResourceServiceInterface', 'Exadra37\PackageSkeleton\Services\ResourceService');
    }
}
