<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Cache;

class Tophuas extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tophuas';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Top Huas list';

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
        $huas=Cache::has('all-huas')?Cache::get('all-huas'):[];
        $results=[];
        foreach(array_rand($huas, 5) as $index)
        {
            $results[]=$huas[$index];
        }
        Cache::forever('top-huas',$results);
        //https://newsapi.org/v2/everything?q=marijuana&apiKey=fa1790410a29459786c4f779b1a1b409
    }
}
