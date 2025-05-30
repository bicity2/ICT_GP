<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function showLogin()
    {
        return view('index');//ログインフォーム
    }

    public function login(Request $req)
    {
        $credentials = $req->only('user_name', 'password');

        if(Auth::guard('member')->attempt($credentials)){
            $user=Auth::guard('member')->user();

            //departmentによって遷移先を変更
            if($user->department ==='soumu'){
                return redirect('/db/soumu');//総務向けメニュー
            }else{
                return redirect('/db/normal');//一般社員向けメニュー
            }
        }
        return back()->withErrors([
            'user_name'=>'IDまたはパスワードが正しくありません'
        ]);   
    }
    public function logout(Request $req)
    {
        Auth::guard('member')->logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/');
    }
    public function soumu(Request $req)
    {
        return view('db.soumu');
    }
}
