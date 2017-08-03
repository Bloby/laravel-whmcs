<?php

namespace WHMCS\Providers;

use Illuminate\Support\ServiceProvider;
use WHMCS\WHMCSMisc;

class WHMCSMiscServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
        //
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('whmcsm', function($app) {
		    return new \WHMCS\WHMCSMisc;
		});

		$this->app->booting(function() {
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('WHMCSMisc', 'WHMCS\Facades\WHMCSMisc');
		});

        $configPath = config_path('whmcs.php');
        if (!\Illuminate\Support\Facades\File::exists($configPath)) {
            $this->publishes([
                __DIR__ . '/../config/whmcs.php' => $configPath
            ]);
        }
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('whmcsm');
	}

}
