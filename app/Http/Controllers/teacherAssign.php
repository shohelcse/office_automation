<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
class teacherAssign extends Controller
{

  
public function add(Request $request){
	$this->validate($request,[
		'session'=> 'required',
		'semester'=> 'required',
		'courseCode'=> 'required',
		'courseTitle'=>'required',
		'internal'=>'required',
		'external'=>'required']);
	$teachers=new Teacher;
	$teachers->session=$request->input('session');
	$teachers->semester=$request->input('semester');
	$teachers->courseCode=$request->input('courseCode');
	$teachers->courseTitle=$request->input('courseTitle');
	$teachers->internal=$request->input('internal');
	$teachers->external=$request->input('external');
	$teachers->save();
	return redirect('/home')->with('info','Student saved successfully');
}




}
