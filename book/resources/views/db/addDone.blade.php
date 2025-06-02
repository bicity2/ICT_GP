{{-- resources/views/db/soumu.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '書籍登録画面 - 完了') {{-- <title> に反映 --}}

@section('content')
    <h1>以下のデータを登録しました</h1>
    <table class="table">
        <tr><th>タイトル</th><th>著者</th><th>出版社</th><th>ISBN</th></tr>
        <tr>
            <td>{{$title}}</td>
            <td>{{$author}}</td>
            <td>{{$publisher}}</td>
            <td>{{$isbn}}</td>
        </tr>
    </table>
    <br>

    <div class="form-wrapper">
        <div class="button-group">
            <a href="/db/soumu" class="btn btn-primary mb-2">メニューに戻る</a>
        </div>
    </div>
@endsection
