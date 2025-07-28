<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SportMatch extends Model
{
    protected $table = 'sport_matchs';

    protected $fillable = [
        'league',
        'home_team',
        'away_team',
        'home_score',
        'away_score',
        'match_time',
        'status',
    ];
}
