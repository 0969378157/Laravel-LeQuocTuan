<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HotelController extends Controller
{
    public function showAll(Request $request){
    	$roomList = DB::table('_room__hotel')->get();

    	return view('indexBT646')->with([
    		'roomList' => $roomList
    	]);
    }

    public function showDetail(Request $request){
    	$detail = DB::table('_room__hotel')->select('id_room', 'type_room', 'floor', 'price')->get();

    	return view('viewBT646')->with([
    		'detail' => $detail
    	]);
    }
}
