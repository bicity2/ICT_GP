<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Book;

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
    public function add2(Request $req)
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
        return view('db.add2', $data);
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
    public function erase2(Request $req)
    {
        $article = Book::find($req->id);
        $article->delete();
        $data = [
            'id'=>$req->id,
            'title'=>$req->title,
            'author'=>$req->author,
            'publisher'=>$req->publisher,
            'isbn'=>$req->isbn
        ];
        return view('db.erase2', $data);
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
        $data = [
            'record' => Book::find($req->id)
        ];
        return view('db.detail', $data);
    }
<<<<<<< HEAD

    }

=======
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
    return view('db.addCheck', compact('isbn'));


    return response()->json(['message' => '登録成功']);

    } 
}
>>>>>>> 4156c02488012ab8746686780be0170ebe94c546
