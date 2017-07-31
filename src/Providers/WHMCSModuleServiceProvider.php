<?php

namespace WHMCS\Providers;

use Illuminate\Support\ServiceProvider;

class WHMCSModuleServiceProvider extends ServiceProvider {

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
		$this->app->bind('whmcsmod', function($app) {
		    return new WHMCSModule;
		});

		$this->app->booting(function() {
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('WHMCSModule', 'WHMCS\Facades\WHMCSModule');
		});

		$this->publishes([
			dirname(__FILE__).'/config/whmcs.php' => config_path('whmcs.php')
		]);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('whmcsmod');
	}

}
