<?php
use App\logi;
use App\art;

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

Route::get('login', function () {
    return view('admin/login');
});


Route::get('start',function(){
	return view('admin/start');
});
Route::post('valid','ArtController@valid');
Route::post('add1','ArtController@add1');
Route::get('add', function () {
    return view('admin/add');
});
//Route::get('user',function(){
	//return view('user');
//});
//Route::get('/',function(){
	//return view('user2');
	//});
Route::get('user2',function(){
	return view('user2');
	});
Route::get('art',function(){
	$res=art::all();
	return view('art',compact('res'));
	});
//Route::get('recip2',function(){
	//$res=art::all();
	//return view('recip2',compact('res'));
	//});
Route::post('retr/{aid}','ArtController@retr');
Route::get('userlog', function () {
    return view('/userlogin');
});

Route::get('viewart',function(){
	$res = art::all();
	return view('admin/viewart',compact('res'));
});
Route::get('register',function(){
    return view('register');
});
Route::get('userlogin',function(){
    return view('userlogin');

});
Route::post('login','ArtController@login');
Route::post('reg','ArtController@reg');




Route::get('viewmore',function(){
    $res = art::all();
    return view('viewmore',compact('res'));
});


Route::get('/viewmore/{aid}','ArtController@viewmore');
Route::get('editrec/{aid}','ArtController@editrec');
Route::post('editq','ArtController@editq');
Route::get('delrec/{aid}','ArtController@delrec');


