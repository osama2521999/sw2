<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\worker;
use App\report;

class workerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('RegisterWorker');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
       
    {    
        $var = $request;
        $this->validate($var,[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'repassword'=>'required']);

            if($var['password']==$var['repassword'])
                {
                $worker = new worker;
                $worker -> name = $request->input('name');
                $worker -> email = $request->input('email');
                $worker -> password = $request->input('password');
                $worker -> active = 0;
                
                if (worker::where('email', $request->email)->exists())  {
                    $statues = 'User Already Exists Bruh :(';
                    return view('RegisterWorker',compact('statues'));
                 }

                $worker->save();
                $statues = 'Done';
                return view('RegisterWorker',compact('statues'));
                }
                else
                {
                $statues = 'check credintials plz :(!!';
                return view('RegisterWorker',compact('statues'));
                }
            

             public function show_A_report()
    {
        $reports = report::select ('reports.report','reports.sender','reports.id','reports.created_at')
        ->where(['reports.receiver' =>  'admin'])
        ->get();
        return view('Reports.A_view_report',compact('reports'));
    }


     public function destroy2($id){
        $id =  report::find($id);
        $id->delete();
        return redirect('/A_view_report');
    }
          
    }

}
