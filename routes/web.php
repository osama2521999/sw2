<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

// Route::get('/', 'HomeController@index');
Route::get('/gallery', 'HomeController@index2');
Route::get('/contact', 'HomeController@index3');



Route::get('/alogin',function(){
    return view('admin_login');
});

Route::get('/wlogin',function(){
    return view('workers_login');
});

// Route::get('/workerlogged',function(){
//     return view('wsuccesslogin');
// });

// Route::get('/adminlogged',function(){
//     return view('asuccesslogin');
// });

Route::post('/adminlogged', 'aloginC@login');
Route::post('/workerlogged', 'loginworker@login');

Route::get('/aloggedout', 'aloginC@logout');
Route::get('/wloggedout', 'loginworker@logout');


// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registerworker', 'workerController@index');
Route::post('registerworker','workerController@store');
//Route::resource('/registerworker','workerController');



Route::get('/add_med', 'medicineController@index');
Route::post('/add_med', 'medicineController@add');

Route::get('/delete_med', 'medicineController@index3');
Route::post('/delete_med', 'medicineController@delete');

Route::get('/update_med', 'medicineController@index2');
Route::post('/update_med', 'medicineController@update');

Route::get('/show_med', 'medicineController@index4');
Route::get('/show_med', 'medicineController@show');
Route::get('/show_med/{id}/delete', 'medicineController@destroy');

