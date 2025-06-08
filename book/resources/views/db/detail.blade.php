{{-- resources/views/db/list.blade.php --}}
@extends('layouts.app') {{-- 共通レイアウトを使用 --}}

@section('title', '書籍詳細とコメント') {{-- <title> に反映 --}}
@section('h1title', '書籍詳細とコメント') {{-- <h1title> に反映 --}}
@section('mainclass', 'main-list') {{-- <mainclass> に反映 --}}

@section('head-content')
    <style>
        .container {
            display: flex;
            /* 横方向中央寄せ */
            justify-content: center;
            min-width: 1500px;
        }

        .left {
            flex: 1;
            padding: 16px;
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
@endsection
<!--</head>
    <body>-->
@section('header-content')
<a href="{{ url('/db/list') }}" class="btn btn-secondary me-2">戻る</a>
@endsection
@section('content')

<div class="form-wrapper">
    {{-- <img src="{{ asset('images/make-effort.gif') }}" alt="装飾画像" class="side-image"> --}}
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

            <a href="https://books.google.com/books?vid={{ $record->isbn }}"
            target="_blank"
            class="btn btn-light border d-inline-flex align-items-center shadow-sm"
            style="font-weight: 500; color: #5f6368;">
                <img src="https://www.google.com/favicon.ico" alt="Google Icon" style="width: 16px; height: 16px; margin-right: 8px;">
                Google Booksで見る
            </a>

            <!-- 評価を表示＆評価をクリックでcommendページ移動する -->
            <h2 class="h4 mt-4">おすすめ度</h2>
            <div>
                <span class="text-warning" style="font-size: 1.5em;">
                    {{ str_repeat('★', floor($average)) }}{{ ($average - floor($average)) >= 0.5 ? '☆' : '' }}{{ str_repeat('☆', 5 - ceil($average)) }}
                </span>

                <p class="mb-0"><strong>おすすめ度：</strong>{{ $average }}</p>
            </div>
            <a href="{{ route('db.comment_input', ['book_id' => $record->isbn]) }}" class="btn btn-primary mt-3">コメント投稿</a>
        </div>
        {{-- @php
        $department = session('department');
        @endphp --}}

        <div class="right">

            <h2>コメント</h2>

            @php
            $user_id = session('user_id');
            @endphp
            <div class="book-details bg-light p-4 rounded shadow-sm mb-4" style="max-height: 700px; overflow-y: auto;">
                <ul class="list-group">
                    @foreach($comments as $comment)
                    <li class="list-group-item" style="display: flex; align-items: flex-start; gap: 16px;">
                        <div style="flex:1;">
                            <!-- ユーザー名とタイトル -->
                            <div>
                                <span class="fw-bold">{{ $comment->member->user_name ?? 'ユーザー' }}</span>
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

                            <!-- 自分のコメントなら削除ボタンを表示 -->
                            @if($comment->user_id == $user_id)
                            <div style="display: flex; justify-content: flex-end; margin-top: 8px;">
                                <form action="{{ route('db.comment_delete', ['id' => $comment->id, 'book_id' => $record->isbn]) }}" method="POST" style="margin: 0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">コメント削除</button>
                                </form>
                            </div>
                            @endif
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <img src="{{ asset('images/dog-understand.gif') }}" alt="装飾画像" class="side-image">
</div>

@endsection
<!--</body>-->