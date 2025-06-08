{{-- resources/views/db/soumu.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '総務専用メニュー') {{-- <title> に反映 --}}
@section('h1title', '総務専用メニュー') {{-- <h1title> に反映 --}}

<!--<body>-->
@section('content')
    <div class="form-wrapper">
        <div class="button-group">
            <a href="/db/list" class="btn btn-primary mb-2">書籍一覧</a>
            <a href="/db/selectHowToAdd" class="btn btn-success mb-2">書籍の新規登録</a>
            <a href="/db/selectHowToErase" class="btn btn-danger mb-2">書籍の削除</a>
        </div>
        <img src="{{ asset('images/angry.gif') }}" alt="装飾画像" class="side-image">
    </div>
@endsection
<!--</body>-->