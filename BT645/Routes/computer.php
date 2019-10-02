<?php
/*
|--------------------------------------------------------------------------
| Web Routes for user type
|--------------------------------------------------------------------------
|
 */
Route::get('product/view', function(){
	return view('productView');
});

Route::post('/post-product', [
	'as'=>'product/add',
	'uses'=>'ProductController@AddProduct'
]);