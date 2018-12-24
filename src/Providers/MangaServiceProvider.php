<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Api\Support\Router;
use Railken\Amethyst\Common\CommonServiceProvider;

class MangaServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();

        $this->loadExtraRoutes();
        $this->app->register(\Railken\Amethyst\Providers\CategoryServiceProvider::class);
    }

    /**
     * Load Extra routes.
     */
    public function loadExtraRoutes()
    {
        $config = Config::get('amethyst.manga.http.admin.manga-category');

        if (Arr::get($config, 'enabled')) {
            Router::group('admin', Arr::get($config, 'router'), function ($router) use ($config) {
                $controller = Arr::get($config, 'controller');

                $router->get('/', ['as' => 'index', 'uses' => $controller.'@index']);
                $router->post('/{id}', ['as' => 'attach', 'uses' => $controller.'@attach']);
                $router->delete('/{id}', ['as' => 'detach', 'uses' => $controller.'@detach']);
            });
        }
    }
}