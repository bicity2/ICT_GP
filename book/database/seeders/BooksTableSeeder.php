<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Delete books
         */
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('books')->truncate(); // 既存データ削除
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('books')->insert([
            [
                'title' => 'はじめてのLaravel',
                'author' => '山田 太郎',
                'publisher' => '技術評論社',
                'isbn' => '9784774191234',
                'stock'=>'1',
            ],
            [
                'title' => 'PHP入門',
                'author' => '佐藤 花子',
                'publisher' => '翔泳社',
                'isbn' => '9784798156789',
                'stock'=>'1',
            ],
            [
                'title' => 'JavaScriptの教科書',
                'author' => '田中 一郎',
                'publisher' => 'SBクリエイティブ',
                'isbn' => '9784797394564',
                'stock'=>'1',
            ],
            [
                'title' => 'SQL徹底入門',
                'author' => '鈴木 次郎',
                'publisher' => '日経BP',
                'isbn' => '9784822298765',
                'stock'=>'1',
            ],
            [
                'title' => 'HTML&CSSデザイン',
                'author' => '高橋 美咲',
                'publisher' => 'マイナビ出版',
                'isbn' => '9784839961230',
                'stock'=>'1',
            ],
            [
                'title' => 'Pythonスタートブック',
                'author' => '中村 健',
                'publisher' => 'インプレス',
                'isbn' => '9784295001234',
                'stock'=>'1',
            ],
            [
                'title' => 'AI時代の仕事術',
                'author' => '小林 直樹',
                'publisher' => 'ダイヤモンド社',
                'isbn' => '9784478101234',
                'stock'=>'1',
            ],
            [
                'title' => 'Webアプリ開発実践',
                'author' => '松本 由紀',
                'publisher' => '技術評論社',
                'isbn' => '9784774195678',
                'stock'=>'1',
            ],
            [
                'title' => 'Linuxコマンドブック',
                'author' => '石田 剛',
                'publisher' => 'オーム社',
                'isbn' => '9784274221234',
                'stock'=>'1',
            ],
            [
                'title' => 'ネットワーク基礎',
                'author' => '村上 洋介',
                'publisher' => '秀和システム',
                'isbn' => '9784798051234',
                'stock'=>'1',
            ],
        ]);
    }
}
