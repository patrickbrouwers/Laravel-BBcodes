<?php namespace Brouwers\Bbcodes;

use Illuminate\Support\ServiceProvider;

class BbcodesServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boot the package
	 * @return void
	 */
	public function boot()
	{
		$this->package('brouwers/bbcodes');
		$this->registerBbcodes();
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerShortcodesServiceProvider();
		$this->registerBbcodeClass();
	}

	protected function registerShortcodesServiceProvider()
	{
		$this->app->register('Brouwers\Shortcodes\ShortcodesServiceProvider');
	}

	/**
	 * Register the bbcode class
	 * @return void
	 */
	protected function registerBbcodeClass()
	{
		$this->app->bindShared('bbcode', function($app) {
			return new Bbcode($app['shortcode.compiler']);
		});
	}

	/**
	 * Register bbcodes
	 * @return void
	 */
	protected function registerBbcodes()
	{
		$shortcode = app('shortcode');

		foreach($this->app['config']->get('bbcodes::codes', array()) as $code)
		{
			$shortcode->register($code, $this->getClass($code));
		}
	}

	/**
	 * Get code class
	 * @param  [type] $code [description]
	 * @return [type]       [description]
	 */
	protected function getClass($code)
	{
		return 'Brouwers\\Bbcodes\\Codes\\' . studly_case($code);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('bbcode');
	}
}