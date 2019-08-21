<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Cache;

class CacheHua extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cachehua';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $files=scandir('/var/www/html/zealot/public/marijuana/lists/');
        $results=[];
        foreach($files as $file)
        {
            if($file!=='sample.json'&&$file!=='.'&&$file!=='..')
            {
                $name=xplode('.',$file)[0];
                $results[]=array(
                    'name'=>$name,
                    'data'=>json_decode(file_get_contents("/var/www/html/zealot/public/marijuana/lists/$file"),true)
                );
                Cache::forever("hua-$name",array(
                    'name'=>$name,
                    'data'=>json_decode(file_get_contents("/var/www/html/zealot/public/marijuana/lists/$file"),true)
                ));
            }
        }
        Cache::forever("all-huas",$results);
    }
}
