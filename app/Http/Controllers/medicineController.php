<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class medicineController extends Controller
{
    public function index()
    {
      return view('browse');
    }
}
