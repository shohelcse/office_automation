<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class sessionController extends Controller
{
    public function myfunction(){
     
 

$data = DB::table('sessions')->get();
return view('layouts.courseEntry3',compact('data'));
 

    }

}
