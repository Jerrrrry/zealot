<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Cache;


class GenerateSitemap extends Command
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
            $site ->add(Url::create('https://www.cannabiszealot.com/marijuana-strains/'.$hua['name'])
            ->setLastModificationDate(Carbon::now())
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            ->setPriority(0.8));
            $this->info($hua['name']);
        }

        $site ->add(Url::create('https://www.cannabiszealot.com/news')
        ->setLastModificationDate(Carbon::now())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        ->setPriority(0.8));

        $site->writeToFile('/var/www/html/zealot/public/sitemap.xml');
    }
}
