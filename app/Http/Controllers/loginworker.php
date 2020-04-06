<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class loginworker extends Controller
{
    //<?php



 public function login(request $req){

$username=$req->input('field3');
$password=$req->input('field4');
$checklogin= DB::table('team')->where(['email'=>$username,'password'=>$password])->get();


if(count($checklogin)>0){
return redirect('/workerlogged');
}
else{
	return redirect('/wlogin');
}


  }



 function logout()
    {
     Auth::logout();
     return redirect('home');
    }
}