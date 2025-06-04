{{-- resources/views/db/soumu.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '書籍削除画面') {{-- <title> に反映 --}}

@section('content')

<h1>データの削除</h1>
@if(isset($record))
<form action="/db/eraseDone" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$record->id}}" readonly><br>
    <p>書籍番号：{{$record->id}}</p>
    <div class="mb-3">
        <label for="title" class="form-label">タイトル</label>
        <input type="text" name="title" value="{{$record->title}}" readonly><br>
    </div>
    <div class="mb-3">
        <label for="author" class="form-label">著者</label>
        <input type="text" name="author" value="{{$record->author}}" readonly><br>
    </div>
    <div class="mb-3">
        <label for="publisher" class="form-label">出版社</label>
        <input type="text" name="publisher" value="{{$record->publisher}}" readonly><br>
    </div>
    <div class="mb-3">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" name="isbn" value="{{$record->isbn}}" readonly><br>
    </div>
    <input type="submit" value="削除"><br>
    <div class="form-wrapper">
        <div class="button-group">
            <a href="/db/erase" class="btn btn-primary mb-2">投稿番号選択画面に戻る</a>
            <a href="/db/soumu" class="btn btn-primary mb-2">メニューに戻る</a>
        </div>
    </div>
</form>
@else
<form action="/db/erase" method="post">
    @csrf
    投稿番号<input type="number" name="id" required>
    <input type="submit" value="データ表示"><br>
    <div class="form-wrapper">
        <div class="button-group">
            <a href="/db/soumu" class="btn btn-primary mb-2">メニューに戻る</a>
        </div>
    </div>
</form>
@endif
@endsection