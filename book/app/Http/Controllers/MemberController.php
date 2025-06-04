<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function showLogin()
    {
        return view('index'); //ログインフォーム
    }

    public function login(Request $req)
    {
        $credentials = $req->only('user_name', 'password');

        if (Auth::guard('member')->attempt($credentials)) {
            $user = Auth::guard('member')->user();

            if ($user->department === 'soumu') {
                // user_nameとidを両方セッションに保存
                session([
                    'user_name' => $user->user_name,
                    'user_id' => $user->id,
                    'department' => $user->department,
                ]);
                return redirect('/db/soumu'); //総務向けメニュー
            } else {
                // user_nameとidを両方セッションに保存
                session([
                    'user_name' => $user->user_name,
                    'user_id' => $user->id,
                    'department' => $user->department,
                ]);
                return redirect('/db/normal'); //一般社員向けメニュー
            }
        }
        return back()->withErrors([
            'user_name' => 'IDまたはパスワードが正しくありません'
        ]);
    }
    // public function soumuMenu()
    // {
    //     return view('soumu');
    // }

    // public function normalMenu()
    // {
    //     return view('normal');
    // }

    // public function listBooks()
    // {
    //     $books = Book::all();
    //     return view('book_list', compact('books'));
    // }

    // public function showAddForm()
    // {
    //     return view('book_create');
    // }

    // public function store(Request $req)
    // {
    //     Book::create($req->only('isbn', 'title', 'author'));
    //     return redirect('/db/soumu');
    // }

    // public function delete($id)
    // {
    //     Book::destroy($id);
    //     return redirect('/db/soumu');
    // }
    public function logout(Request $req)
    {
        Auth::guard('member')->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return view('db.logout');
    }

    public function soumu(Request $req)
    {
        $department = session('department');
        if($department!=="soumu"){
            return redirect('index');
        }
        return view('db.soumu');
    }

    public function normal(Request $req)
    {
        $department = session('department');
        if($department!=="soumu" && $department!=="normal"){
            return redirect('index');
        }
        return view('db.normal');
    }
}
