<?php

Route::group(['prefix' => '/product647'], function () {
		Route::get('/view', 'ProductControllerBt647@showAll')->name('showAll');
	});