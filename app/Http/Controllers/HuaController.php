<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;

class HuaController extends Controller
{
    public function hua($name)
    {
        return view('marijuana',['marijuana'=>Cache::get("hua-$name")]);
    }
}