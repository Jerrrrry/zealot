<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Cache;
use Carbon\Carbon;

class Sliders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sliders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get 6 articles image from wp api';

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
            $client=new \GuzzleHttp\Client();
            $response=$client->get("https://loveplanet.live/wp-json/wp/v2/posts?per_page=6&page=1");
            $data=[];
            $results=json_decode($response->getBody(),true);
            if(is_array($results) || is_object($results))
            {
                foreach($results as $result)
                {
                    $imageid=$result['featured_media'];
                    $data[]=array(
                        'data'=>$result,
                        'image'=>featureFullImage($imageid),
                    );
                }
            }
            Cache::forever('sliders',$data);
          }catch(\GuzzleHttp\Exception\ClientException $ce){
            $this->error($ce->getMessage());
          }catch(\GuzzleHttp\Exception\RequestException $re){
            $this->error($re->getMessage());
          }catch(\Exception $e){
            $this->error($e->getMessage());
          }
    }
}
