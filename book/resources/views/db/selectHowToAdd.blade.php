{{-- resources/views/db/soumu.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '書籍登録方法を選択') {{-- <title> に反映 --}}
@section('h1title', '書籍登録方法を選択') {{-- <h1title> に反映 --}}
@section('mainclass', 'selectHowToAdd-list') {{-- <mainclass> に反映 --}}

@section('head-content')

<style>
    .form-group {
        margin: 20px 0;
    }
    
    /* 左端にボタンを縦に並べて固定表示するスタイル */
    .side-buttons {
        position: absolute;
        top: 50%;
        left: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
</style>
@endsection

@section('content')

{{-- <div class="container"> --}}
<div class="form-wrapper">
    {{-- <div class="d-grid gap-3 col-6 mx-auto"> --}}
    <div class="button-group">
        <form action="{{ url('/db/add') }}" method="get">
            <input type="submit" class="btn btn-primary btn-lg" value="書籍情報を手動で入力">
        </form>

        <form action="{{ url('/db/addWithBarcode') }}" method="get">
            <input type="submit" class="btn btn-success btn-lg" value="バーコードで登録">
        </form>
    </div>
    {{-- </div> --}}
    <img src="{{ asset('images/satisfaction.gif') }}" alt="装飾画像" class="side-image">

</div>
{{-- </div> --}}

@endsection
