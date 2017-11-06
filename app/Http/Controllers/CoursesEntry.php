<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
class CoursesEntry extends Controller
{
    

 
   


public function add(Request $request){
	$this->validate($request,[
		'session'=> 'required',
		'semester'=> 'required',
		'courseCode'=> 'required',
		'courseTitle'=>'required',
		'TheoryLab'=>'required',
		'credit'=>'required']);

	$courses=new Course;
	$courses->session=$request->input('session');
	$courses->semester=$request->input('semester');
	$courses->courseCode=$request->input('courseCode');
	$courses->courseTitle=$request->input('courseTitle');
	$courses->TheoryLab=$request->input('TheoryLab');
	$courses->credit=$request->input('credit');
	$courses->save();
	return redirect('/home')->with('info','Student saved successfully');
}
}
