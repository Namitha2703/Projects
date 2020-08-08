<?php
use App\logi;
use App\recipe;

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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('login', function () {
    return view('login');
});
Route::get('recipea', function () {
    return view('recipea');
});
Route::get('recipeb', function () {
    return view('recipeb');
});
Route::get('recipec', function () {
    return view('recipec');
});


Route::get('juice1', function () {
    return view('juice1');
});
Route::get('north1', function () {
    return view('north1');
});*/
Route::get('login', function () {
    return view('admin/login');
});

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('food1', function () {
    return view('food1');});
Route::get('food3', function () {
    return view('food3');
});
Route::get('food2', function () {
    return view('food2');
});
Route::get('food4', function () {
    return view('food4');
});
Route::get('food5', function () {
    return view('food5');
});
Route::get('start',function(){
	return view('admin/start');
});
Route::post('valid','RecController@valid');
Route::post('add1','RecController@add1');
Route::get('add', function () {
    return view('admin/add');
});
Route::get('user',function(){
	return view('user');
});
Route::get('/',function(){
	return view('user2');
	});
Route::get('user2',function(){
	return view('user2');
	});
Route::get('recip',function(){
	$res=recipe::all();
	return view('recip',compact('res'));
	});
Route::get('recip2',function(){
	$res=recipe::all();
	return view('recip2',compact('res'));
	});
Route::post('retr/{rid}','RecController@retr');
Route::get('userlog', function () {
    return view('/userlogin');
});
Route::get('eggcur', function () {
    return view('eggcur');
});
Route::get('gobi', function () {
    return view('recipe/recipea');
});
Route::get('panman', function () {
    return view('recipe/recipec');
});
Route::get('chilchic', function () {
    return view('recipe/recipeb');
});
Route::get('eggbir', function () {
    return view('recipe/recipe1');
});
Route::get('chicbir', function () {
    return view('recipe/recipe2');
});
Route::get('vegbir', function () {
    return view('recipe/recipe3');
});
Route::get('upma', function () {
    return view('recipe/ra');
});
Route::get('neer', function () {
    return view('recipe/rb');
});
Route::get('bisi', function () {
    return view('recipe/rc');
});
Route::get('vada', function () {
    return view('recipe/rd');
});
Route::get('kofta', function () {
    return view('recipe/northa');
});
Route::get('naan', function () {
    return view('recipe/north2');
});
Route::get('makhni', function () {
    return view('recipe/north1');
});
Route::get('rajma', function () {
    return view('recipe/re');
});
Route::get('mango', function () {
    return view('recipe/juice1');
});
Route::get('mojito', function () {
    return view('recipe/juice2');
});
Route::get('cran', function () {
    return view('recipe/juice3');
});
Route::get('zucc', function () {
    return view('recipe/r1');
});
Route::get('piss', function () {
    return view('recipe/r3');
});
Route::get('kaju', function () {
    return view('recipe/r2');
});

Route::get('viewrecipe',function(){
	$res = recipe::all();
	return view('admin/viewrecipe',compact('res'));
});

Route::get('/viewmore/{rid}','RecController@viewmore');
Route::get('editrec/{rid}','RecController@editrec');
Route::post('editq','RecController@editq');
Route::get('delrec/{rid}','RecController@delrec');


