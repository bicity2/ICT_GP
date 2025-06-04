<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class ReviewController extends Controller
{
    public function comment_input(Request $req)
    {
        $department = session('department');
        if($department!=="soumu" && $department!=="normal"){
            return redirect('index');
        }

        // セッションからuser_nameとidを取得
        $user_name = session('user_name');
        $user_id = session('user_id');

        // 既存のレビューを取得（book_idはISBNの場合もあるので注意）
        $review = \App\Models\Review::where('book_id', $req->book_id)
            ->where('user_id', $user_id)
            ->first();


        $data = [
            'book_id' => $req->book_id,
            'review' => $review,
            // 'user_name' => $req->user_name,
            // 'comment' => $req->comment
        ];
        return view('db.comment_input', $data);
    }

    public function store(Request $request)
    {
        $department = session('department');
        if($department!=="soumu" && $department!=="normal"){
            return redirect('index');
        }

        // セッションからuser_nameとidを取得
        $user_name = session('user_name');
        $user_id = session('user_id');
        // 既存のレビューがあれば取得、なければ新規作成
        $review = Review::where('book_id', $request->book_id)
            ->where('user_id', $user_id)
            ->first();

        if (!$review) {
            $review = new Review();
            $review->book_id = $request->book_id;
            $review->user_id = $user_id;
        }

        $review->comment = $request->comment;
        $review->rating = $request->rating;
        $review->save();

        // 詳細画面にリダイレクト
        return redirect()->route('db.detail', ['id' => $request->book_id]);
    }

    public function destroy($id, Request $request)
    {
        $department = session('department');
        if($department!=="soumu" && $department!=="normal"){
            return redirect('index');
        }

        $review = \App\Models\Review::findOrFail($id);
        $review->delete();
        return redirect()->route('db.detail', ['id' => $request->book_id]);
    }
}
