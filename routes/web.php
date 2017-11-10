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

Route::get('/sessionCreate',function(){
	return view('layouts.sessionCreate');
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

Route::get('/courseAssign3',function(){
	return view('layouts.courseAssign3');
});






Route::get('/collection',function(){
	return view('layouts.collection');
});







///diffrent

Route::get('/Rshow','CreatesController@Rshow');
Route::get('/Radding',function(){
	return view('layouts.Radding');
});
Route::post('/insert','CreatesController@add');
///different 2


///teachers route

Route::get('/courseEntry3',function(){
	return view('layouts.courseEntry3');
});
Route::post('/insert2','coursesEntry@add');
///different 2



///for session create



Route::post('/insert5','createSession@add');


//for testing


Route::get('/courseEntry4',function(){
	return view('layouts.courseEntry4');
});
Route::post('/insert4','coursesEntry@store');



Route::get('/courseAssign','assignController@testfunction');

Route::post('/insert7','assignController@testfunction');


Route::get('/courseAssign3','assignController2@myfunction');



///testing..





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
