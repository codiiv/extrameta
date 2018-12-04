<?php

namespace Codiiv\Extrameta;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\ServiceProvider;

class ExtrametaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      // $this->publishes([
      //   __DIR__.'/config/projectmgr.php' => config_path('projectmgr.php'),
      //   __DIR__.'/public' => public_path('projectmgr/assets'),
      // ]);
      $this->publishes([
          __DIR__.'/database/' => database_path(),
      ], 'extrameta');
      $this->loadMigrationsFrom(__DIR__.'/database/migrations');

      /**
       * Send global $postmeta, $usermeta, $termmeta
       */
      view()->composer('*', function ($view){
        $view->with('postmeta', new Models\Postmeta());
        $view->with('termmeta', new Models\Termmeta());
        $view->with('usermeta', new Models\Usermeta());
      });

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      // register our controller
      $this->app->make('Codiiv\Extrameta\Controllers\ExtrametaController');

    }
}
