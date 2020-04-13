<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\worker;

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
            
            
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function register(Request $request)
    {
       
    }




}
