<?php

namespace WHMCS\Provider;

use Illuminate\Support\ServiceProvider;
use WHMCS\WHMCSInvoice;

class WHMCSInvoiceServiceProvider extends ServiceProvider {

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
		$this->app->bind('whmcsi', function($app) {
		    return new WHMCSInvoice;
		});

		$this->app->booting(function() {
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('WHMCSInvoice', 'WHMCS\Facades\WHMCSInvoice');
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
		return array('whmcsi');
	}

}
