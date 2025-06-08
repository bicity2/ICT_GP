{{-- resources/views/db/erase.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '書籍管理番号で削除') {{-- <title> に反映 --}}
@section('h1title', '書籍管理番号で削除') {{-- <h1title> に反映 --}}

<!--<head>-->
@section('head-content')
    <style>
        .form-label {
            display: block;
            text-align: left;
            margin-left: 00px;
        }

        .form-group {
            width: 100%;
            max-width: 400px;
            margin-bottom: 15px;
        }

        input[type="text"],
        input[type="password"],
        input[type="number"],
        textarea {
            width: 400px;
            padding: 10px;
            margin: 0px auto 10px auto;
        }
    </style>
@endsection
@section('header-content')
    @if(isset($record))
        <a href="{{ url('/db/erase') }}" class="btn btn-secondary me-2">戻る</a>
    @else
        <a href="{{ url('/db/selectHowToErase') }}" class="btn btn-secondary me-2">戻る</a>
    @endif
@endsection
<!--</head>
    <body>-->
@section('content')
    @if(isset($record))
        <div class="form-wrapper">
            <div class="button-group">
                <form action="/db/eraseDone" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">書籍番号</label>
                        <input type="text" name="title" value="{{$record->id}}" readonly><br>
                    </div>

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
                    <button type="submit" class="btn btn-danger mb-2">削除</button><br>
                </form>
            </div>
            <img src="{{ asset('images/vacuuming.gif') }}" alt="装飾画像" class="side-image">
        </div>
    @else
        <div class="form-wrapper">
            <div class="button-group">
                <form action="/db/erase" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="delete-book-id" class="form-label">書籍管理番号</label>
                        <input type="number" name="id" required>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">削除内容確認</button><br>
                </form>
            </div>
            <img src="{{ asset('images/crying.gif') }}" alt="装飾画像" class="side-image">
        </div>
    @endif
@endsection
<!--</body>-->