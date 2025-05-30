<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
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
            'id' => $req->id,
            'user_name' => $req->user_name,
            'posted_item' => $req->posted_item
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
}
