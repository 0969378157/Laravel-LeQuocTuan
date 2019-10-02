<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
        $this->mapComputerRoutes();

        $this->mapBT646Hotel();

        $this->mapBT647Product();

        $this->mapBT641Student();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    // Map route BT645
    protected function mapComputerRoutes()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/computer.php'));
    }
    // Map route BT646Hotel 
    protected function mapBT646Hotel()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/BT646Hotel.php'));
    }
    //Map router BT647Product
    protected function mapBT647Product()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/BT647Product.php'));
    }
    //Map router BT641
    protected function mapBT641Student()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/BT641Student.php'));
    }
}
