{{-- resources/views/db/normal.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '社員用メニュー') {{-- <title> に反映 --}}
@section('h1title', '社員用メニュ') {{-- <h1title> に反映 --}}
@section('mainclass', 'main-normal') {{-- <mainclass> に反映 --}}

@section('content')

    <div class="form-wrapper">
            <a href="/db/list" class="btn btn-primary mb-2">書籍一覧</a>
        <img src="{{ asset('images/reading.gif') }}" alt="装飾画像" class="side-image">
    </div>
@endsection