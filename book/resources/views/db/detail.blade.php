<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        /* body {
            width: 1200px;
            margin: 10px auto;
        } */
    </style>
    <title>書籍詳細とコメント</title>
    <style>
        .container {
            display: flex;
            /* 横方向中央寄せ */
            justify-content: center;

        }

        .left {
            flex: 1;

            padding: 16px;
            border-right: 1px solid #ccc;
        }

        .right {
            flex: 1;
            padding: 16px;
  
        }

        /* コメント間の余白を大きくする */
        .list-group-item {
            margin-bottom: 24px;
        }

        /* 最後のコメントの下余白をなくす */
        .list-group-item:last-child {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <h1>書籍詳細とコメント</h1>
    <div class="d-flex justify-content-start align-items-center" style="margin-top: 16px; margin-left: 16px;">
        <a href="{{ url('db/list') }}" class="btn btn-secondary">書籍一覧に戻る</a>
    </div>
    <div class="container">

        <div class="left">
            <h2>書籍詳細</h2>
            <div class="book-details bg-light p-4 rounded shadow-sm mb-4">

                <div class="book-title text-primary fw-bold mb-5" style="font-size: 40px;">
                    {{ $record->title }}
                </div>
                <p class="mb-2"><strong>著者：</strong>{{ $record->author }}</p>
                <p class="mb-2"><strong>出版社：</strong>{{ $record->publisher }}</p>
                <p class="mb-2"><strong>ISBN：</strong>{{ $record->isbn }}</p>
            </div>

            <!-- 評価を表示＆評価をクリックでcommendページ移動する -->
            <h2 class="h4 mt-4">評価</h2>
            <div>
                <span class="text-warning" style="font-size: 1.5em;">
                    {{ str_repeat('★', floor($average)) }}{{ ($average - floor($average)) >= 0.5 ? '☆' : '' }}{{ str_repeat('☆', 5 - ceil($average)) }}
                </span>

                <p class="mb-0"><strong>評価：</strong>{{ $average }}</p>
            </div>
            <a href="{{ route('db.comment_input', ['book_id' => $record->isbn]) }}" class="btn btn-primary mt-3">コメント投稿</a>
        </div>
        <div class="right">

            <h2>コメント</h2>
            <div class="book-details bg-light p-4 rounded shadow-sm mb-4" style="max-height: 700px; overflow-y: auto;">
                <ul class="list-group">
                    @foreach($comments as $comment)
                    <li class="list-group-item" style="display: flex; align-items: flex-start; gap: 16px;">
                        <div style="flex:1;">
                            <!-- ユーザー名とタイトル -->
                            <div>
                                <span class="fw-bold">{{ $comment->user_id ?? 'ユーザー' }}</span>
                                <span class="text-warning ms-2" style="font-size: 1.2em;">
                                    {{ str_repeat('★', $comment->rating) . str_repeat('☆', 5 - $comment->rating) }}
                                </span>
                                <span class="fw-bold ms-2">{{ $comment->title ?? '' }}</span>
                            </div>
                            <!-- 投稿日 -->
                            <div class="small text-muted mb-1">
                                {{ \Carbon\Carbon::parse($comment->created_at)->format('Y年n月j日') }}
                            </div>

                            <!-- コメント本文 -->
                            <div>
                                <span class="fw-bold">{!! nl2br(e($comment->comment)) !!}</span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

</html>