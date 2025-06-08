{{-- resources/views/db/selectHowToErase.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '書籍削除方法を選択') {{-- <title> に反映 --}}
@section('h1title', '書籍削除方法を選択') {{-- <h1title> に反映 --}}
@section('mainclass', 'main-list') {{-- <mainclass> に反映 --}}

<!--<body>-->
@section('content')
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
@endsection
<!--</body>-->