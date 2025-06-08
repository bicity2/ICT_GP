{{-- resources/views/db/list.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '書籍登録 - 完了') {{-- <title> に反映 --}}
@section('h1title', '書籍登録 - 完了') {{-- <h1title> に反映 --}}
@section('mainclass', 'addDone-list') {{-- <mainclass> に反映 --}}

<!--<head>-->
@section('head-content')
    <style>
        /* このページのテーブル内リンクだけに適用 */
        .table {
            width: 94vw;
            margin-left: 3vw;
            margin-right: 3vw;
        }

        .table a {
            text-decoration: none;
            transition: text-decoration 0.2s;
        }

        .table a:hover {
            text-decoration: underline;
        }
    </style>
@endsection
<!--</head>
    <body>-->
@section('content')
    <h1>以下のデータを登録しました！</h1>
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
        <img src="{{ asset('images/oops.gif') }}" alt="装飾画像" class="side-image">
    </div>
@endsection
<!--</body>-->