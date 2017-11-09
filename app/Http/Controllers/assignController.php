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
public function testfunction(){
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

 $data = DB::table('users')->where('position','Teacher')->get();
return view('layouts.courseAssign',compact('data'));
    }



}







