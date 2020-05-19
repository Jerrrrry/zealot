<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Cache;

class Traffic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'traffic';

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
      try{
        $api=env('API');
        $data=json_encode(file_get_contents("https://api.getproxylist.com/proxy?country[]=US&protocol[]=socks4&api=$api"));
        $ip=$data['ip'];
        $port=$data['port'];
        $proxy="socks4://$ip:$port";
        shell_exec('node /var/www/html/traffic/basics/get_title.js '.$proxy);
      }catch(\Exception $e){
        $this->error($e->getMessage());
      }

    }
}
