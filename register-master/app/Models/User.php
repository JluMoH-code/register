<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;

    protected $table = "users";
    protected $guarded = [];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function authors() {
        return $this->belongsToMany(Author::class);
    }
}
