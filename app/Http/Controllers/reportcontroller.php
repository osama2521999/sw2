<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\report;

class reportcontroller extends Controller
{
    public function index()
    {
      return view('reports.A_make_report');
    }
    public function index2()
    {
      return view('reports.W_make_report');
    }

    public function send_report(Request $request){

        $var = $request;
        $this->validate($var,[
            'sender'=>'required',
            's_id'=>'required',
            'receiver_id'=>'required',
            'report'=>'required']);
        
        $report = new report;
        $report -> sender_id = $request->input('s_id');
        $report -> sender = $request->input('sender');
        $report -> receiver_id = $request->input('receiver_id');
        $report -> report = $request->input('report');


        
        if($request->input('sender') == 'admin')
        {
            $report->save();
            $statues = 'Done Successfully';
            return view('Reports.A_make_report',compact('statues'));
        }
        else
        {
            $report -> receiver = 'admin';
            $report->save();
            $statues = 'Done Successfully';
            return view('Reports.W_make_report',compact('statues'));
        }                                

    }

    

}
