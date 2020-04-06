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
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/alogin', function () {	
    return view('admin_login');
});


Route::get('/wlogin', function () {	
    return view('workers_login');
});


Route::get('/workerlogged', function () {
    return view('wsuccesslogin');
});

Route::get('/adminlogged', function () {
    return view('asuccesslogin');
});


Route::post('/adminlogged','aloginC@login');

Route::post('/workerlogged','loginworker@login');

