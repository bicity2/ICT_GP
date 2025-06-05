{{-- resources/views/db/list.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '書籍削除方法を選択') {{-- <title> に反映 --}}
@section('h1title', '書籍削除方法を選択') {{-- <h1title> に反映 --}}
@section('mainclass', 'main-list') {{-- <mainclass> に反映 --}}

<!--<head>-->
@section('head-content')

    <style>
        /* body {
            text-align: center;
            padding-top: 100px;
            position: relative;
            height: 100vh;
        } */

        /* .form-group {
            margin: 20px 0;
        } */

        /* 左端にボタンを縦に並べて固定表示するスタイル */
        /* .side-buttons {
            position: absolute;
            top: 50%;
            left: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        } */
    </style>
@endsection
<!--</head>
    <body>-->
@section('content')

    {{-- <div class="container" --}}
        <div class="form-wrapper">
            <div class="button-group">
                <form action="{{ url('/db/erase') }}" method="get">
                    <input type="submit" class="btn btn-primary btn-lg" value="書籍管理番号で削除">
                </form>

                <form action="{{ url('/db/eraseWithBarcode') }}" method="get">
                    <input type="submit" class="btn btn-success btn-lg" value="バーコードで削除">
                </form>
            </div>
            <img src="{{ asset('images/anxiety.gif') }}" alt="装飾画像" class="side-image">
        </div>
    {{-- </div> --}}

@endsection
<!--</body></html>-->