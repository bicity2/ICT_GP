<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//記述することでLaravelの認証機能と連携可能になる
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Model
{
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
