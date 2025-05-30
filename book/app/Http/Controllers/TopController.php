<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class DbController extends Controller
{
    public function add()
    {
        return view('db.add');
    }
    public function add2(Request $req)
    {
        $article = new Article();
        $article->user_name = $req->user_name;
        $article->posted_item = $req->posted_item;
        $article->save();
        $data = [
            'user_name'=>$req->user_name,
            'posted_item'=>$req->posted_item
        ];
        return view('db.add2',$data);
}
    public function erase(Request $req)
    {
        if($req->isMethod('get'))
            return view('db.erase');
        elseif($req->isMethod('post'))
        $id= $req->id;
        $data= [
            'record'=>Article::find($id)
        ];
        return view('db.erase',$data);
    }
    public function erase2(Request $req)
    {
        $article = Article::find($req->id);
        $article->delete();
        $data = [
            'id'=>$req->id,
            'user_name'=>$req->user_name,
            'posted_item'=>$req->posted_item
        ];
        return view('db.erase2',$data);
}
}