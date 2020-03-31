<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class aloginC extends Controller
{
    //<?php



 public function login(request $req){

$username=$req->input('field1');
$password=$req->input('field2');
$checklogin= DB::table('admin')->where(['username'=>$username,'password'=>$password])->get();
if(count($checklogin)>0){
return redirect('/successlogin');
}
else{
	echo "error";
}


  }



 function logout()
    {
     Auth::logout();
     return redirect('home');
    }
}