<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medicine;

class medicineController extends Controller
{
    public function index()
    {
      return view('main_functions.add_med');
    }
    public function index2()
    {
      return view('main_functions.update_med');
    }
    public function index3()
    {
      return view('main_functions.delete_med');
    }
    public function index4()
    {
      return view('main_functions.show_med');
    }
    public function index5()
    {
      return view('main_functions.sale_med');
    }

    
    public function add(Request $request){
      $var = $request;
        $this->validate($var,[
            'id'=>'required',
            'name'=>'required',
            'Quantity'=>'required',
            'year'=>'required',
            'price'=>'required']);

            $medicine = new medicine;
            $medicine -> id = $request->input('id');
            $medicine -> name = $request->input('name');
            $medicine -> quantity = $request->input('Quantity');
            $medicine -> expire_year = $request->input('year');
            $medicine -> price = $request->input('price');

            if (medicine::where('id', $request->id)->exists()) 
            {
              $statues = 'This medicines Id Already Exist !!';
              return view('main_functions.add_med',compact('statues'));
            }
           elseif($request->input('year')<2020)
           {
              $statues = 'This medicine Already Expired !!';
              return view('main_functions.add_med',compact('statues'));
           }
           elseif($request->input('Quantity') <= 0)
            {
              $statues = 'Medicines Quantity should be more than zero !!';
              return view('main_functions.add_med',compact('statues'));
            }
            elseif($request->input('price') <= 0)
            {
              $statues = 'Medicines Price should be more than zero !!';
              return view('main_functions.add_med',compact('statues'));
            }
           else
           {
            $medicine->save();
            $statues = 'Done Successfully';
            
            // $request->session()->flash('success','Done Successfully');
            
            return view('main_functions.add_med',compact('statues'));
           }
    }

   
 

}
