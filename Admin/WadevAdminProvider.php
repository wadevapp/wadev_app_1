<?php
namespace Admin;

use Illuminate\Support\ServiceProvider;

/**
* 
*/
class WadevAdminProvider extends ServiceProvider {
	
	function boot() {
		require __DIR__ .'/Http/routes.php';

		$this->loadViewsFrom(__DIR__ . 'Resources/Views', 'wadev.admin');

		$this->publishes([__DIR__.'/Database/Migrations' => database_path('migrations/wadev/admin')], 'migrations');
	}
	public function register() {
		//$this->mergeConfigFrom(__DIR__ .'/Config/admin.php', 'wadev.admin');
	}
}