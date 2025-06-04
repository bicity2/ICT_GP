<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>コメントフォーム</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
        crossorigin="anonymous">

</head>

<body>
    <h1>コメント投稿フォーム</h1>
    <div>
        <a href="{{ route('db.detail', ['id' => $book_id]) }}" class="btn btn-secondary" style="margin-left: 16px;margin-top: 16px;">書籍詳細ページへ戻る</a>
    </div>
    <form action="{{ route('db.comment_store') }}" method="post">
        @csrf
        <input type="hidden" name="book_id" value="{{ $book_id ?? $id ?? '' }}">

        <label>コメント:<br>
            <textarea name="comment" rows="5" cols="40" required>{{ old('comment', $review->comment ?? '') }}</textarea>
        </label><br><br>
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
        <button type="submit" class="btn btn-primary">投稿する</button>
    </form>
</body>

</html>