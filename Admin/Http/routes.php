<?php

Route::group(['prefix' => 'wadev', 'namespace' => 'Admin\Http\Controllers'], function(){

	Route::get('/', function(){
		return view('wadev.admin::index');
	});
	include('Routes/Api.php');
});

if (env('APP_ENV') != 'prod') {
    include('Routes/Views.php');
} 