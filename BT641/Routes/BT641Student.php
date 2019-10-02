<?php

Route::group(['prefix' => '/studentbt641'], function () {
		Route::get('/view', 'StudentControllerBt641@showAll')->name('showAll');

		Route::get('/edit-student', 'StudentControllerBt641@editStudent')->name('edit-student');

		Route::post('/add-student', 'StudentControllerBt641@addStudent')->name('add-student');

		Route::post('/delete-student', 'StudentControllerBt641@deleteStudent')->name('delete-student');
	});