<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;

class HuaController extends Controller
{
    public function hua($name)
    {
        $huas=Cache::has('all-huas')?Cache::get('all-huas'):[];
        $results=[];
        foreach(array_rand($huas, 5) as $index)
        {
            $results[]=$huas[$index];
        }
        return view('marijuana',['marijuana'=>Cache::get("hua-$name"),'relatedhuas'=>$results]);
    }

    public function news()
    {
        return view('news');
    }

    public function tp()
    {
        return view('tp',['content'=>file_get_contents('/var/www/html/zealot/tp/test1.html')]);
    }

}
