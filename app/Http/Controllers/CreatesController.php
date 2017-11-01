<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roaster;



class CreatesController extends Controller
{
     public function Rshow(){
    	$roasters=Roaster::all();
    	return view('layouts.Rshow',['roasters'=> $roasters]);
    }


public function add(Request $request){
	$this->validate($request,[
		'session'=> 'required',
		'semester'=>'required',
		'start'=>'required',
		'end'=>'required']);

	$roasters=new Roaster;
	$roasters->session=$request->input('session');
	$roasters->semester=$request->input('semester');
	$roasters->start=$request->input('start');
	$roasters->end=$request->input('end');
	$roasters->save();
	return redirect('/Rshow')->with('info','Student saved successfully');
	//return redirect('/layouts.Radding')->with('info','Student saved successfully');
}


}

