{{-- resources/views/db/soumu.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', 'コメント投稿フォーム') {{-- <title> に反映 --}}
@section('h1title', 'コメント投稿フォーム') {{-- <h1title> に反映 --}}

@section('head-content')
<style>
    form {
        max-width: 1200px;
        min-width:1000px;
        margin: 0 auto; /* ← 中央寄せの基本！ */
    }

    .form-wrapper {
        width: 100%;
        margin-bottom: 1.5em;
    }
</style>
@endsection
<!--</head>
<body>-->
@section('header-content')
<a href="{{ route('db.detail', ['id' => $book_id]) }}" class="btn btn-secondary me-2">戻る</a>
@endsection
@section('content')

    <form action="{{ route('db.comment_store') }}" method="post">
        @csrf
        <input type="hidden" name="book_id" value="{{ $book_id ?? $id ?? '' }}">

        <div class="form-wrapper">
            <div class="mb-3">
                <label for="author"class="form-label">コメント：</label>
                <textarea name="comment" class="form-control" rows="5" cols="40" required>{{ old('comment', $review->comment ?? '') }}</textarea>
            </div>
        </div>

            <br><br>

        <div class="form-wrapper">
            <label>おすすめ度：
                <select name="rating" required style="font-size:1.2em;">
                    <option value="">選択してください</option>
                    @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}" {{ (old('rating', $review->rating ?? '') == $i) ? 'selected' : '' }}>
                        {{ $i }} - {{ str_repeat('★', $i) }}
                    </option>
                    @endfor
                </select>
            </label><br><br>
        </div>

        <div class="form-wrapper">
            <button type="submit" class="btn btn-primary">投稿する</button>
        </div>
    </form>
@endsection
