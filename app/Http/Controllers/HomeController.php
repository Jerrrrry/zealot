<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $files=scandir('/var/www/html/zealot/public/marijuana/lists/');
        $results=[];
        foreach($files as $file)
        {
            if($file!=='sample.json'&&$file!=='.'&&$file!=='..')
            {
                $results[]=array(
                    'name'=>explode('.',$file)[0],
                    'data'=>json_decode(file_get_contents("/var/www/html/zealot/public/marijuana/lists/$file"),true)
                );
            }
        }
        
        return view('welcome',['ms' => $results]);
    }
}
