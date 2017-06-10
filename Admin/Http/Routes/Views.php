<?php

Route::get('/admin/index.html', function() {
	return view()->make('wadev.admin::index');
});