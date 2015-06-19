<?php namespace TeachMe\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        view()->composer(
            'tickets/list',
            'TeachMe\Http\ViewComposers\TicketsListComposer'
        );
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
