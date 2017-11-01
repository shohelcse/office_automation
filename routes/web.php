<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/courseModify',function(){
	return view('layouts.courseModify');
});

Route::get('/header',function(){
	return view('template.header');
});

Route::get('/courseAssign',function(){
	return view('layouts.courseAssign');
});
Route::get('/courseEntry',function(){
	return view('layouts.courseEntry');
});

Route::get('/roasterduty',function(){
	return view('layouts.roasterduty');
});

Route::get('/courseEntry2',function(){
	return view('layouts.courseEntry2');
});

Route::get('/courseAssign2',function(){
	return view('layouts.courseAssign2');
});

Route::get('/courseTracking',function(){
	return view('layouts.courseTracking');
});


Route::get('/viewCourseStatus',function(){
	return view('layouts.viewCourseStatus');
});
Route::get('/viewCourseStatus2',function(){
	return view('layouts.viewCourseStatus2');
});
Route::get('/courseTracking2',function(){
	return view('layouts.courseTracking2');
});





///another try


Route::get('/testing',function(){
	return view('layouts.testing');
});

///testing site
Route::get('/entry3',function(){
	return view('layouts.entry3');
});
Route::get('/app2',function(){
	return view('layouts.app2');
});

Route::get('/Radding',function(){
	return view('layouts.Radding');
});











///diffrent
Route::get('/Rshow','CreatesController@Rshow');
Route::get('/Radding',function(){
	return view('layouts.Radding');
});

Route::post('/insert','CreatesController@add');



///different 2

Route::get('/Rshow','CreatesController@Rshow');
Route::get('/Radding',function(){
	return view('layouts.Radding');
});

Route::post('/insert','CreatesController@add');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
