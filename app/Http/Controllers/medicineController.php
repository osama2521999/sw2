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
            elseif($request->input('id')<0 ||!is_numeric($request->input('id')))
           {
              $statues = 'You should put right id !!';
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

   
    
    public function delete(Request $request){
       
        $var = $request;
        $this->validate($var,[
            'id'=>'required'
            ]);

            $med = $request->input('id');

            if (medicine::where('id', $request->id)->exists())  {
              $medicine =  medicine::find($med);
              
              $medicine->delete();

              $statues = 'Done Successfully';
              return view('main_functions.delete_med',compact('statues'));

           }else
           {
            $statues = 'This medicine Not Found !!';
            return view('main_functions.delete_med',compact('statues'));
           }    
    }

    public function update(Request $request){
      
      $var = $request;
        $this->validate($var,[
            'id'=>'required',
            'n_name'=>'required',
            'Quantity'=>'required',
            'year'=>'required',
            'price'=>'required']);

            $med = $request->input('id');

            if (medicine::where('id', $request->id)->exists())  {
              $medicine =  medicine::find($med);
              $medicine -> name = $request->input('n_name');
              $medicine -> quantity = $request->input('Quantity');
              $medicine -> expire_year = $request->input('year');
              $medicine -> price = $request->input('price');
              
              
              if($request->input('year')<2020)
              {
                $statues = 'This medicine Already Expired !!';
                return view('main_functions.update_med',compact('statues'));
              }
              if($request->input('Quantity') <= 0)
              {
                $statues = 'Medicines Quantity should be more than zero !!';
                return view('main_functions.update_med',compact('statues'));
              }
              if($request->input('price') <= 0)
              {
                $statues = 'Medicines Price should be more than zero !!';
                return view('main_functions.update_med',compact('statues'));
              }

              $medicine->save();
              $statues = 'Done Successfully';
              return view('main_functions.update_med',compact('statues'));

           }else
           {
            $statues = 'This medicine Not Found !!';
            return view('main_functions.update_med',compact('statues'));
           }
    }

  public function show(){
      $medicines =  medicine::all();
      return view('main_functions.show_med',compact('medicines'));
  }

  public function destroy($id){
    $id =  medicine::find($id);
    $id->delete();
    return redirect('/show_med');
  }

    
    


}
