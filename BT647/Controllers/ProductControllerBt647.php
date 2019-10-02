<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductControllerBt647 extends Controller
{
    //
    public function showAll(Request $request){
    	$product = DB::table('bt647_product')->paginate(10);

    	return view('indexBT647')->with([
    		'product' => $product
    	]);
    }
}
