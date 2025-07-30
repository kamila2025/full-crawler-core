<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\SportMatchCrawlerService;

class SportMatchCrawl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sport-match-crawl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '爬取並儲存運彩賽事分析資料';

    public function __construct(protected SportMatchCrawlerService $crawlerService)
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('開始爬取...');

        $this->crawlerService->crawl();

        $this->info('完成！');
    }
}
