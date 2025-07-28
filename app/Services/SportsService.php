<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SportsService
{
    public function fetchSportMatch(string $sport = 'MLB', string $date = null): array
    {
        $date = $date ?? now()->format('Y-m-d');

        $url = 'https://api.sportsbot.tech/v2/scores';
        $token = 'FREE_FOR_TEST_20_TIMES_PER_DAY';

        $response = Http::withHeaders([
            'X-JBot-Token' => $token,
        ])->get($url, [
            'sport' => $sport,
            'date'  => $date,
        ]);

        if ($response->ok()) {
            $data = $response->json();

            Log::info('取得賽事資料成功', [
                'sport' => $sport,
                'date' => $date,
                'data' => $data,
            ]);

            return $data;
        }

        Log::error('取得賽事資料失敗', [
            'sport' => $sport,
            'date' => $date,
            'status' => $response->status(),
            'body' => $response->body(),
        ]);

        return [];
    }
}
