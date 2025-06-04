<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Book;
use App\Models\Review;
use App\Models\Member;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); // すべての本を取得
        return view('index', compact('books'));
    }

    public function add()
    {
        $department = session('department');
        if($department!=="soumu"){
            return redirect('index');
        }
        return view('db.add');
    }

    public function addDone(Request $req)
    {
        $department = session('department');
        if($department!=="soumu"){
            return redirect('index');
        }
        $req->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'isbn' => 'required|string|size:13',
        ]);

        $existingBook = Book::where('isbn', $req->isbn)->first();

        if ($existingBook) {
            // 既存の書籍がある場合 → 在庫を増やす
            $existingBook->increment('stock');
            $book = $existingBook;
        } else {
            // 新しい書籍の場合 → 新規作成（初期在庫は1）
            $book = new Book();
            $book->title = $req->title;
            $book->author = $req->author;
            $book->publisher = $req->publisher;
            $book->isbn = $req->isbn;
            $book->stock = 1;
            $book->save();
        }

        $data = [
            'title' => $book->title,
            'author' => $book->author,
            'publisher' => $book->publisher,
            'isbn' => $book->isbn,
            'stock' => $book->stock,
        ];

        return view('db.addDone', $data);
    }



    public function erase(Request $req)
    {
        $department = session('department');
        if($department!=="soumu"){
            return redirect('index');
        }

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
        $department = session('department');
        if($department!=="soumu"){
            return redirect('index');
        }
        $book = Book::where('isbn', $req->isbn)->first();
        // $book = Book::find($req->id);
        
        if (!$book) {
            return redirect()->route('db.selectHowToErase')->with('error', '書籍が見つかりません');
        }

        if ($book->stock > 1) {
            // 在庫が複数あるならstockをデクリメントして保存
            $book->decrement('stock');
        } else {
            // 在庫が1の場合はレコードを削除
            $book->delete();
        }

        $data = [
            'id' => $req->id,
            'title' => $req->title,
            'author' => $req->author,
            'publisher' => $req->publisher,
            'isbn' => $req->isbn,
        ];

        return view('db.eraseDone', $data);
    }

    public function eraseDoneFromList(Request $req)
    {
        $department = session('department');
        if($department!=="soumu"){
            return redirect('index');
        }

        $book = Book::find($req->id);

        if (!$book) {
            return redirect()->route('db.list')->with('error', '書籍が見つかりません');
        }

        if ($book->stock > 1) {
            // 在庫が複数あるならstockをデクリメントして保存
            $book->decrement('stock');
        } else {
            // 在庫が1の場合はレコードを削除
            $book->delete();
        }

        $data = [
            'id' => $req->id,
            'title' => $req->title,
            'author' => $req->author,
            'publisher' => $req->publisher,
            'isbn' => $req->isbn,
        ];

        return view('db.eraseDoneFromList', $data);
    }


    public function list(Request $request)
    {
        $department = session('department');
        if($department!=="soumu" && $department!=="normal"){
            return redirect('index');
        }

        $keyword = $request->input('keyword'); // フォームからキーワード取得

        $query = Book::query();

        if (!empty($keyword)) {
            $query->where('title', 'like', "%{$keyword}%")
                    ->orWhere('author', 'like', "%{$keyword}%")
                    ->orWhere('publisher', 'like', "%{$keyword}%")
                    ->orWhere('isbn', 'like', "%{$keyword}%");
        }

        $data = [
            'records' => $query->paginate(5)
        ];

        return view('db.list', $data);
    }


    public function detail(Request $req)
    {
        $department = session('department');
        if($department!=="soumu" && $department!=="normal"){
            return redirect('index');
        }

        // 13桁ならISBN、それ以外はidとみなす（必要に応じて調整）
        if (is_numeric($req->id) && strlen($req->id) < 13) {
            $book = Book::find($req->id);
        } else {
            $book = Book::where('isbn', $req->id)->first();
        }
        if (!$book) {
            abort(404, '書籍が見つかりません');
        }
        $comments = Review::where('book_id', $book->isbn)
            ->with('member')
            ->get();

        // 自分のコメントを一番上に
        // セッションからuser_nameとidを取得
        $user_name = session('user_name');
        $user_id = session('user_id');

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

    // 未使用のメソッド？
    public function register(Request $request)
    {
        $department = session('department');
        if($department!=="soumu" && $department!=="normal"){
            return redirect('index');
        }

        // バリデーション（任意だが推奨）
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|size:13|unique:books,isbn',
        ]);

        // 登録（1回で十分）
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'isbn' => $request->isbn,
        ]);


        return redirect()->route('books.index')->with('message', '登録が完了しました');
    }

    public function addWithBarcode()
    {
        $department = session('department');
        if($department!=="soumu"){
            return redirect('index');
        }

        return view('db.addWithBarcode');
    }

    public function addCheck($isbn)
    {
        $department = session('department');
        if($department!=="soumu"){
            return redirect('index');
        }

        $bookInfo = $this->fetchBookInfoByISBN($isbn);

        return view('db.addCheck', [
            'title' => $bookInfo['title'],
            'author' => $bookInfo['author'],
            'isbn13' => $isbn,
            'publisher' => $bookInfo['publisher'] ?? '不明',
        ]);
    }
    //書籍データAPIから「本のタイトル」と「著者名」を取得するためのメソッド
    private function fetchBookInfoByISBN($isbn)
    {
        $url = "https://api.openbd.jp/v1/get?isbn={$isbn}";
        $response = Http::get($url);

        if ($response->failed() || empty($response[0])) {
            return [
                'title' => '取得失敗',
                'author' => '取得失敗',
                'publisher' => '取得失敗',
            ];
        }

        $data = $response[0]['summary'] ?? null;

        if ($data) {
            return [
                'title' => $data['title'] ?? '不明',
                'author' => $data['author'] ?? '不明',
                'publisher' => $data['publisher'] ?? '不明',
            ];
        }

        return [
            'title' => '書籍情報なし',
            'author' => '書籍情報なし',
            'publisher' => '書籍情報なし',
        ];
    }
    
    public function eraseCheck($isbn)
    {
        $department = session('department');
        if($department!=="soumu"){
            return redirect('index');
        }

        // ISBN に一致する書籍を取得
        $book = Book::where('isbn', $isbn)->first();

        // 書籍が見つからない場合はリダイレクト
        if (!$book) {
                    return back()->withErrors([
            'user_name' => 'ISBNが正しくありません。'
        ]);
            // return redirect()->route('db.selectHowToErase')->with('error', '書籍が見つかりません');
        }

        // レコードをビューに渡す
        $data = [
            'record' => $book
        ];

        return view('db.erase', $data);
    }

    public function eraseWithBarcode()
    {
        $department = session('department');
        if($department!=="soumu"){
            return redirect('index');
        }

        return view('db.eraseWithBarcode');
    }

}
