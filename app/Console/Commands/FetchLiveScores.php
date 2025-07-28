<?php

namespace App\Console\Commands;

use App\Models\SportMatch;
use Illuminate\Console\Command;

class FetchLiveScores extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-live-scores';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $service = app(\App\Services\SportsService::class);
        $data = $service->fetchSportMatch();

        // foreach ($data as $item) {
        //     SportMatch::updateOrCreate(
        //         ['home_team' => $item['home'], 'away_team' => $item['away']],
        //         [
        //             'league' => $item['league'] ?? null,
        //             'home_score' => $item['home_score'] ?? null,
        //             'away_score' => $item['away_score'] ?? null,
        //             'match_time' => $item['match_time'],
        //             'status' => $item['status'],
        //         ]
        //     );
        // }
    }
}
