<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//記述することでLaravelの認証機能と連携可能になる
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
//これでログイン対象にできるようになる
{
    protected $fillable = ['user_name', 'password', 'department'];
    protected $hidden = ['password'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
