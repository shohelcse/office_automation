<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class assignController extends Controller
{
	/*
    public function testfunction(){
    	$data=DB::table('users')->get();
    	return view('layouts.courseAssign',compact('data'));
    }
    */
public function testfunction(Request $request){
     
 $this->validate($request,[
        'session'=> 'required',
        'semester'=> 'required'
    ]);
  //var_dump($request->input('session'));
    	//$query=DB::table('users')->get();
    //	$results = DB::select('select * from users where 'position'='Teacher');
    //	$data = DB::table('users')->where('name', 'shohel');
    	//return view('layouts.courseAssign',compact('data'));


	/*
$users = DB::table('users')->where('position','Teacher')->get();

foreach ($users as $user)
{
    var_dump($user->name);
}

*/


/*

$data = DB::table('users')->where('position','Teacher')->where('department','CSE')->get();
return view('layouts.courseAssign',compact('data'));
 */

/*
 $data = DB::table('users')->where('position','Teacher')->get();
 $result = DB::table('courses')->get();
*/ 



  $data = DB::table('users')->where('position','Teacher')->get();
 $result = DB::table('courses')->where('session',$request->input('session'))->where('semester',$request->input('semester'))->get();

return view('layouts.courseAssign',compact('data','result'));
    }



}





