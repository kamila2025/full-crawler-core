<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\Member\MemberStatusEnum;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
  protected $table = 'members';

  protected $fillable = [
    'name',
    'email',
    'password',
    'phone',
    'status',
  ];

  protected $casts = [
    'status' => MemberStatusEnum::class,
  ];

  public static function boot()
  {
    parent::boot();

    static::creating(function ($model) {
        if (empty($model->status)) $model->status = MemberStatusEnum::啟用;
    });
  }
}
