<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \Spatie\Sitemap\SitemapGenerator;
use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Cache;


class Sitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap';

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
        $site=Sitemap::create('https://cannabiszealot.com');
        $huas=Cache::get('all-huas');
        foreach($huas as $hua)
        {
            $site ->add(Url::create('/marijuana/'.$hua['name'])
            ->setLastModificationDate(Carbon::yesterday())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.8));
        }
        $site->writeToFile('/var/www/html/zealot/public/sitemap.xml');
    }
}
