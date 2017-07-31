<?php

namespace WHMCS\Provider;

use Illuminate\Support\ServiceProvider;

class WHMCSTicketServiceProvider extends ServiceProvider {

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
		$this->app->bind('whmcst', function($app) {
		    return new WHMCSTicket;
		});

		$this->app->booting(function() {
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('WHMCSTicket', 'WHMCS\Facades\WHMCSTicket');
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
		return array('whmcst');
	}

}
