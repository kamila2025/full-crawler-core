<?php

namespace App\Enums\Member;

enum MemberStatusEnum: string
{
    case 啟用 = 'active';
    case 停用 = 'inactive';
}
