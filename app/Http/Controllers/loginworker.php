<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// use App\active_worker;

class loginworker extends Controller
{
    //<?php



 public function login(request $req){

  DB::update('update workers set active = ? ',['0']);

  $username=$req->input('field3');
  $password=$req->input('field4');
  // $checklogin= DB::table('team')->where(['email'=>$username,'password'=>$password])->get();

  $checklogin= DB::table('workers')->where(['email'=>$username,'password'=>$password])->get();

  if(count($checklogin)>0){
    
    //return redirect('/workerlogged');
    // $checklogin -> active = 'sdadas';
    // $checklogin->save();
    
    DB::update('update workers set active = ? where email = ?',['1',$username]);
  

    return view('wsuccesslogin');
    }else
    {
	    return redirect('/wlogin');
    }


}



 function logout()
  {
    //  Auth::logout();
    DB::update('update workers set active = ? ',['0']);
    return redirect('/');
  }
}