<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class User_info extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "user_infos";
    protected $guarded = [];
}
