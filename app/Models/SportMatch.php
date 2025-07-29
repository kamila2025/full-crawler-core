<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SportMatch extends Model
{
    protected $table = 'sports_matches';

    protected $fillable = [
        'match_date',
        'category',
        'team_top',
        'team_bottom',
        'spread',
        'result',
    ];

    protected $casts = [
        'result' => SportMatchResultEnum::class,
    ];
}
