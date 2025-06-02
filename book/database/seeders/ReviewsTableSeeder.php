<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Delete reviews
         */
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('reviews')->truncate(); // 既存データ削除
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        // サンプルコメント
        $comments = [
            'とても面白かったです！',
            '分かりやすい内容でした。',
            'また読みたいと思います。',
            '役立つ情報が多かったです。',
            '少し難しかったです。',
            '初心者にもおすすめです。',
            '内容が充実していました。',
            '説明が丁寧で良かったです。',
            '実践的な内容でした。',
            '図解が多くて理解しやすいです。',
        ];

        // booksテーブルからisbnとidの対応を取得
        $books = DB::table('books')->select('id', 'isbn')->get();
        $bookIsbns = $books->pluck('isbn', 'id')->toArray(); // [id => isbn]

        // membersテーブルからidを取得
        $userIds = DB::table('members')->pluck('id')->toArray();

        // book_idはisbnを使う（reviewsテーブルのbook_idカラムにはisbnを入れる想定）
        // 1つのuser_idにつき1つのbook_id（isbn）あたり1件のみ
        $pairs = [];
        foreach ($bookIsbns as $bookId => $isbn) {
            foreach ($userIds as $userId) {
                $pairs[] = ['book_id' => $isbn, 'user_id' => $userId];
            }
        }
        shuffle($pairs);
        $pairs = array_slice($pairs, 0, 50);

        $reviews = [];
        foreach ($pairs as $pair) {
            $reviews[] = [
                'book_id' => $pair['book_id'], // isbn
                'user_id' => $pair['user_id'],
                'comment' => $comments[array_rand($comments)],
                'rating' => rand(1, 5),
            ];
        }

        DB::table('reviews')->insert($reviews);
    }
}
