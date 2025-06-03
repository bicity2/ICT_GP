<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Book;
use App\Models\Review;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); // すべての本を取得
        return view('index', compact('books'));
    }

    public function add()
    {
        return view('db.add');
    }

    public function addDone(Request $req)
    {
        $article = new Book();
        $article->title = $req->title;
        $article->author = $req->author;
        $article->publisher = $req->publisher;
        $article->isbn = $req->isbn;
        $article->save();
        $data = [
            'title' => $req->title,
            'author' => $req->author,
            'publisher' => $req->publisher,
            'isbn' => $req->isbn
        ];
        return view('db.addDone', $data);
    }

    public function erase(Request $req)
    {
        if ($req->isMethod('get'))
            return view('db.erase');
        elseif ($req->isMethod('post'))
            $id = $req->id;
        $data = [
            'record' => Book::find($id)
        ];
        return view('db.erase', $data);
    }

    public function eraseDone(Request $req)
    {
        $article = Book::find($req->id);
        $article->delete();
        $data = [
            'id' => $req->id,
            'title' => $req->title,
            'author' => $req->author,
            'publisher' => $req->publisher,
            'isbn' => $req->isbn
        ];
        return view('db.eraseDone', $data);
    }

    public function list()
    {
        $data = [
            'records' => Book::paginate(5)
        ];
        return view('db.list', $data);
    }

    public function detail(Request $req)
    {
        // 13桁ならISBN、それ以外はidとみなす（必要に応じて調整）
        if (is_numeric($req->id) && strlen($req->id) < 13) {
            $book = Book::find($req->id);
        } else {
            $book = Book::where('isbn', $req->id)->first();
        }
        if (!$book) {
            abort(404, '書籍が見つかりません');
        }
        $comments = Review::where('book_id', $book->isbn)->get();

        // 自分のコメントを一番上に
        $user_id = 1; // 仮のユーザーID
        $comments = $comments->sortByDesc(function ($comment) use ($user_id) {
            return $comment->user_id == $user_id ? 1 : 0;
        })->values();

        // 評価の平均値を計算
        $average = $comments->avg('rating');
        // 小数第1位まで表示したい場合
        $average = $average ? round($average, 1) : 0;

        $data = [
            'record' => $book,
            'comments' => $comments,
            'average' => $average,
        ];
        return view('db.detail', $data);
    }

    public function register(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->save();

        return response()->json(['status' => 'ok']);
    }

    public function addWithBarcode()
    {
        return view('db.addWithBarcode');
    }

    public function addCheck(Request $request)
    {
        // [Check] some action is under return, action should be above return
        return view('db.addCheck', compact('isbn'));
        // バリデーション
        $validated = $request->validate([
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn'   => 'required|string|size:13|unique:books,isbn',
        ]);

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'isbn' => $request->isbn,
        ]);
        $isbn = $request->isbn;

        // [Check] return is two, which should be one
        return view('db.addCheck', compact('isbn'));
        return response()->json(['message' => '登録成功']);
    }
}
