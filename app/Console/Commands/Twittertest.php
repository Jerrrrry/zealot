<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Abraham\TwitterOAuth\TwitterOAuth;
use Cache;

class Twittertest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'twittertest';

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
        $hua=Cache::get("all-huas")[5];
        define('CONSUMER_KEY', '2Ox7QuHLGbTrASfcJNQddAoZ1');
        define('CONSUMER_SECRET', 'hiwXQ0gTqyhWtjTi3SjYwV7uFJGfXX0ZDwjS5EoVhigbP15UzD');
        define('ACCESS_TOKEN', '1164606583168311296-OdHUuihYGYUt5xG3FNcp79LcBZrKAS ');
        define('ACCESS_TOKEN_SECRET', 'q2SVw3QLZVxzM4TZRFo1S8ZA2dnHvavypwVKfoXgWTdft');
        $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
        $name=$hua['data']['Name'];
        $url=$hua['name'];
        $status = "What is $name ? let's learn $name at https://www.cannabiszealot.com/marijuana-data/$url"; //text for your tweet.
        $post_tweets = $connection->post("statuses/update", ["status" => $status]);
    }
}
