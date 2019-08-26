<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;

class HuaController extends Controller
{
    public function hua($name)
    {
        return view('marijuana',['marijuana'=>Cache::get("hua-$name"),'top-huas'=>Cache::get("top-huas")]);
    }

    public function test()
    {
        return Cache::get('top-huas');
    }
}
