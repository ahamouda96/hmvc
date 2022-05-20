<?php

namespace Customers\Providers;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $moduleName = basename(dirname(__DIR__, 2));
        config([
            $moduleName => File::getRequire(loadEntity('routes.php', 'config', $moduleName))
        ]);

        $this->loadRoutesFrom(loadEntity('web.php', 'routes', $moduleName));
        $this->loadViewsFrom(loadEntity('views', 'resources', $moduleName), $moduleName);
        $this->loadTranslationsFrom(loadEntity('lang', 'resources', $moduleName), $moduleName);
        $this->loadMigrationsFrom(loadEntity('migrations', 'database', $moduleName));        
    }
}
