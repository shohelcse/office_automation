<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class assignController2 extends Controller
{
    

/*
    public function testfunction(){
    	$data=DB::table('users')->get();
    	return view('layouts.courseAssign',compact('data'));
    }
    */
public function myfunction(){
     
 

$data = DB::table('sessions')->get();
return view('layouts.courseAssign3',compact('data'));
 

    }




}
