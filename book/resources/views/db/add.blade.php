{{-- resources/views/db/soumu.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '書籍登録画面') {{-- <title> に反映 --}}

@section('content')
    <h1>書籍データ新規登録</h1>

    <main class="content">
        <div class="form-wrapper">
            <form action="/db/addDone"method="post">
                @csrf
                <div class="mb-3">
                    <label for="title"class="form-label">タイトル</label>
                    <input type="text"class="form-control"name="title"id="title"required>
                </div>
                <div class="mb-3">
                    <label for="author"class="form-label">著者</label>
                    <input type="text"class="form-control"name="author"id="author"required>
                </div>
                <div class="mb-3">
                    <label for="publisher"class="form-label">出版社</label>
                    <input type="text"class="form-control"name="publisher"id="publisher"required>
                </div>
                <div class="mb-3">
                    <label for="isbn"class="form-label">ISBN</label>
                    <input type="text"class="form-control"name="isbn"id="isbn"required>
                </div>
                <input type="submit"value="登録"class="btn btn-primary">
            </form>
            {{-- <img src="{{ asset('images/jump.gif') }}" alt="装飾画像" class="side-image"> --}}
        </div>
    </main>

@endsection