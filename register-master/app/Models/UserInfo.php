<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class UserInfo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "userInfos";
    protected $guarded = [];
}
