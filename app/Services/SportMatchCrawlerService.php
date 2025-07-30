<?php

namespace App\Services;

namespace App\Services;

use GuzzleHttp\Client;
use App\Models\SportMatch;
use Illuminate\Support\Facades\Log;
use Symfony\Component\DomCrawler\Crawler;

class SportMatchCrawlerService
{
    protected Client $client;
    protected string $baseUrl = 'https://www.good-luck888.com';

    public function __construct()
    {
        $this->client = new Client([
            'timeout' => 10.0,
            'headers' => [
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36',
                'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
                'Accept-Language' => 'zh-TW,zh;q=0.9,en;q=0.8',
                'Referer' => 'https://www.good-luck888.com/',
                'Connection' => 'keep-alive',
                'DNT' => '1',
                'Upgrade-Insecure-Requests' => '1',
                'Sec-Fetch-Dest' => 'document',
                'Sec-Fetch-Mode' => 'navigate',
                'Sec-Fetch-Site' => 'same-origin',
            ],
        ]);
    }

    public function crawl(): void
    {
        $page = 0;

        do {
            $url = $this->baseUrl . '/index.php/game_analysis/pages_list/7';

            $response = $this->client->get($url);
            $html = (string) $response->getBody();
            $crawler = new Crawler($html);

            $rows = $crawler->filter('table.table tr')->each(function (Crawler $tr, $i) {
                $tds = $tr->filter('td');
                Log::info("row $i count: " . $tds->count());
                Log::info($tds->each(fn($td) => $td->text()));
                if ($tds->count() < 8) {
                    return null;
                }

                return [
                    'match_date'  => trim($tds->eq(0)->text()),
                    'category'    => trim($tds->eq(1)->text()),
                    'team_top'    => trim($tds->eq(2)->text()),
                    'spread'      => trim($tds->eq(3)->text()),
                    'team_bottom' => trim($tds->eq(4)->text()),
                    'result'      => trim($tds->eq(5)->text()),
                    'score'       => trim($tds->eq(6)->text()),
                ];
            });

            foreach (array_filter($rows) as $row) {
                SportMatch::updateOrCreate(
                    [
                        'match_date'  => $row['match_date'],
                        'team_top'    => $row['team_top'],
                        'team_bottom' => $row['team_bottom'],
                    ],
                    $row
                );
            }

            $hasNext = $crawler->filter('#paginate a[rel="next"]')->count() > 0;
            $page++;
        } while ($hasNext);
    }
}
