<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;

class HomeController extends Controller
{
    public function home()
    {
       
        
        return view('welcome',['ms' => Cache::get("all-huas")]);
    }
}
