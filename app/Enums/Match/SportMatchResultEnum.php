<?php

namespace App\Enums\Match;

enum SportMatchResultEnum: string
{
    case top_win = '主勝';
    case bottom_win = '客勝';
    case draw = '平手';
    case not_started = '未開賽';
    case pending = '待定';
    case canceled = '取消';
}
