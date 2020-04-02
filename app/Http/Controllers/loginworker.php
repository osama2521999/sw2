<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class aloginC extends Controller
{
    //<?php



 public function loginworker(request $req){

$username=$req->input('field3');
$password=$req->input('field4');
$checklogin= DB::table('worker')->where(['username'=>$username,'password'=>$password])->get();
if(count($checklogin)>0){
return redirect('/successlogin');
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