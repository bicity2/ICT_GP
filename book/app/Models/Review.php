<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //mass assignment(まとめて代入)対策のために$fillableプロパティを追加する
    //一括代入を許可するカラム(フォーム送信などで必要)
    protected $fillable = ['member_id', 'book_id', 'comment', 'rating'];

    //レビューは一つの本に属する
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    //レビューは一人のメンバーに属する
    public function member()
    {
        return $this->belongsTo(\App\Models\Member::class, 'user_id');
    }
}
