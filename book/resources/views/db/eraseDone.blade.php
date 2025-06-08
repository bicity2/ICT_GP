{{-- resources/views/db/eraseDone.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '書籍削除 - 完了') {{-- <title> に反映 --}}
@section('h1title', '書籍削除 - 完了') {{-- <h1title> に反映 --}}
@section('mainclass', 'eraseDone-list') {{-- <mainclass> に反映 --}}

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

        .side-image {
            width: 250px;
            padding: 5px;
            margin: 5px;
        }

        .button-group{
            padding-bottom: 5px;
            padding-top: 5px;
            margin-bottom: 5px;
            margin-top: 5px;
        }
    </style>
@endsection
<!--</head>
    <body>-->
@section('header-content')
<a href="{{ url('/db/selectHowToErase') }}" class="btn btn-secondary me-2">戻る</a>
@endsection
@section('content')
<h1>以下のデータを削除しました。</h1>

<div class="form-wrapper">
    <div class="button-group">
        <table class="table">
            <tr>
                <th>タイトル</th>
                <th>著者</th>
                <th>出版社</th>
                <th>ISBN</th>
            </tr>
            <tr>
                <td>{{$title}}</td>
                <td>{{$author}}</td>
                <td>{{$publisher}}</td>
                <td>{{$isbn}}</td>
            </tr>
        </table>
    </div>
</div>

<div class="form-wrapper">
    <img src="{{ asset('images/trash-can.gif') }}" alt="装飾画像" class="side-image">
</div>

<div class="form-wrapper">
    <div class="button-group">
    <a href="{{ url('/db/selectHowToErase') }}" class="btn btn-primary me-2">戻る</a>
    </div>
</div>

@endsection