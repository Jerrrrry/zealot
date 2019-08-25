<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \Spatie\Sitemap\SitemapGenerator;


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
        SitemapGenerator::create('https://cannabiszealot.com')->writeToFile('/var/www/html/zealot/public/sitemap.xml');
    }
}
