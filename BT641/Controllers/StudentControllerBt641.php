<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentControllerBt641 extends Controller
{
    public function showAll(Request $request){

    	$student = DB::table('Student_bt641')->get();

    	return view('indexBt641')->with([
    		'student' => $student,
    		'edit' => false
    	]);
    }

    public function editStudent(Request $request){
    	$student = DB::table('Student_bt641')->get();
    	$id = 0;
    	$fullname = $age = $address ='';
    	if(isset($request->id) && ($request->id) > 0){
    		$id = $request->id;
    		$studentUpdate = DB::table('Student_bt641')
    		->where('id', $id)
    		->get();

    		if($studentUpdate != null && count($studentUpdate) >0){
    			$fullname = $studentUpdate[0]->fullname;
    			$id = $studentUpdate[0]->id;
    			$age = $studentUpdate[0]->age;
    			$address = $studentUpdate[0]->address;
    		}
    	}

    	return view('indexBt641')->with([
    		'student' => $student,
    		'id' => $id,
    		'fullname' => $fullname, 
    		'age' => $age,
    		'address' => $address,
    		'edit' => true
    	]);
    }

    public function addStudent(Request $request){
    	$id = $request->id;
    	$fullname = $request->fullname;
    	$age = $request->age;
    	$address = $request->address;

    	if($id > 0){
    		DB::table('Student_bt641')
    		->where('id', $id)
    		->update([
    			'fullname' => $fullname,
	    		'age' => $age,
	    		'address' => $address
    		]);
    	}else{
    		DB::table('Student_bt641')->insert([
	    		'fullname' => $fullname,
	    		'age' => $age,
	    		'address' => $address
    		]);
    	}
    	return redirect()->route('showAll');
    }

    public function deleteStudent(Request $request){
    	DB::table('Student_bt641')
    	->where('id', $request->id)
    	->delete();
    }
}
