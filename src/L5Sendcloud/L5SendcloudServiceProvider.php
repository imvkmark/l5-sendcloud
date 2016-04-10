<?php namespace Imvkmark\L5Sendcloud;

use Illuminate\Support\ServiceProvider;

class L5SendcloudServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 * @return void
	 */
	public function register() {
		$this->app->bind('Imvkmark\L5Sendcloud\Contracts\Api', 'Imvkmark\L5Sendcloud\Repositories\Api');
		$this->app->bind('Imvkmark\L5Sendcloud\Contracts\Sender', 'Imvkmark\L5Sendcloud\Repositories\Sender');
		$this->app->singleton('lemon.sendcloud', function ($app) {
			return $app->make('Imvkmark\L5Sendcloud\Contracts\Sender');
		});
	}

	/**
	 * Get the services provided by the provider.
	 * @return array
	 */
	public function provides() {
		return ['lemon.sendcloud'];
	}

}
