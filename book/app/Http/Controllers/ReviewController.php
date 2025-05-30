<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function comment_input(Request $req)
    {
        $data = [
            'book_id' => $req->book_id,
            'user_name' => $req->user_name,
            'comment' => $req->comment
        ];
        return view('db.comment_input', $data);
    }
    
}
