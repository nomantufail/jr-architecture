<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */

    protected $webNamespace = 'App\Http\Controllers\Web';
    protected $apiNamespace = 'App\Http\Controllers\Api';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        //web routes
        $router->group(['prefix'=>'web', 'namespace' => $this->webNamespace], function ($router) {
            require app_path('Http/Routes/web.php');
        });

        //api routes
        $router->group(['prefix' => 'api', 'namespace' => $this->apiNamespace], function ($router) {
            require app_path('Http/Routes/api.php');
        });
    }
}
