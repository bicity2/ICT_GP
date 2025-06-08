{{-- resources/views/db/addCheck.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '書籍登録 - 確認') {{-- <title> に反映 --}}
@section('h1title', '書籍登録 - 確認') {{-- <h1title> に反映 --}}

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
<a href="{{ url('/db/addWithBarcode') }}" class="btn btn-secondary me-2">戻る</a>
@endsection
<!--</head>
    <body>-->
@section('content')
    <div class="form-wrapper">
        <div class="button-group">
            <form action="/db/addDone" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">タイトル</label>
                    <input type="text" name="title" value="{{$title}}" readonly><br>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">著者</label>
                    <input type="text" name="author" value="{{$author}}" readonly><br>
                </div>
                <div class="mb-3">
                    <label for="publisher" class="form-label">出版社</label>
                    <input type="text" name="publisher" value="{{$publisher}}" readonly><br>
                </div>
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" name="isbn" value="{{$isbn13}}" readonly><br>
                </div>
                <button type="submit" class="btn btn-primary mb-2">登録</button><br>
            </form>
        </div>
        <img src="{{ asset('images/full-of-motivation.gif') }}" alt="装飾画像" class="side-image">
    </div>
@endsection
<!--</body>-->