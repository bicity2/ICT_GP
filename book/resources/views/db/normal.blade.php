{{-- resources/views/db/soumu.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '総務専用メニュー') {{-- <title> に反映 --}}

@section('content')
    <h1>社員用メニュー</h1>

    <div class="form-wrapper">
        <div class="button-group">
            <a href="/db/list" class="btn btn-primary mb-2">書籍一覧</a>
        </div>
        {{-- <img src="{{ asset('images/reading.gif') }}" alt="装飾画像" class="side-image"> --}}
    </div>
</body>
</html>