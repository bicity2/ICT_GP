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
                'title' => 'リーダブルコード ―より良いコードを書くためのシンプルで実践的なテクニック',
                'author' => 'Dustin Boswell, Trevor Foucher',
                'publisher' => 'オライリージャパン',
                'isbn' => '9784873115658',
                'stock' => '1',
            ],
            [
                'title' => '独習PHP 第4版',
                'author' => '山田 祥寛',
                'publisher' => '翔泳社',
                'isbn' => '9784798161483',
                'stock' => '1',
            ],
            [
                'title' => 'スッキリわかるSQL入門 第3版',
                'author' => '中山 清喬, 国本 大悟',
                'publisher' => 'インプレス',
                'isbn' => '9784295012674',
                'stock' => '1',
            ],
            [
                'title' => 'ゼロから作るDeep Learning',
                'author' => '斎藤 康毅',
                'publisher' => 'オライリージャパン',
                'isbn' => '9784873117584',
                'stock' => '1',
            ],
            [
                'title' => '1Q84 BOOK 1',
                'author' => '村上 春樹',
                'publisher' => '新潮社',
                'isbn' => '9784103534228',
                'stock' => '1',
            ],
            [
                'title' => 'ノルウェイの森 上',
                'author' => '村上 春樹',
                'publisher' => '講談社',
                'isbn' => '9784062749120',
                'stock' => '1',
            ],
            [
                'title' => '火花',
                'author' => '又吉 直樹',
                'publisher' => '文藝春秋',
                'isbn' => '9784163902307',
                'stock' => '1',
            ],
            [
                'title' => 'コンビニ人間',
                'author' => '村田 沙耶香',
                'publisher' => '文藝春秋',
                'isbn' => '9784167911305',
                'stock' => '1',
            ],
            [
                'title' => '嫌われる勇気',
                'author' => '岸見 一郎, 古賀 史健',
                'publisher' => 'ダイヤモンド社',
                'isbn' => '9784478025819',
                'stock' => '1',
            ],
            [
                'title' => 'FACTFULNESS(ファクトフルネス)',
                'author' => 'Hans Rosling',
                'publisher' => '日経BP',
                'isbn' => '9784822289602',
                'stock' => '1',
            ],
            [
                'title' => '思考は現実化する',
                'author' => 'ナポレオン・ヒル',
                'publisher' => 'きこ書房',
                'isbn' => '9784877713492',
                'stock' => '1',
            ],
            [
                'title' => '夢をかなえるゾウ',
                'author' => '水野敬也',
                'publisher' => '文響社',
                'isbn' => '9784866510139',
                'stock' => '1',
            ],
            [
                'title' => 'ハリー・ポッターと賢者の石',
                'author' => 'J.K.ローリング',
                'publisher' => '静山社',
                'isbn' => '9784915512377',
                'stock' => '1',
            ],
            [
                'title' => '進撃の巨人(1)',
                'author' => '諫山 創',
                'publisher' => '講談社',
                'isbn' => '9784063842769',
                'stock' => '1',
            ],
            [
                'title' => 'ONE PIECE 1',
                'author' => '尾田 栄一郎',
                'publisher' => '集英社',
                'isbn' => '9784088725093',
                'stock' => '1',
            ],
            [
                'title' => 'ドラえもん 1',
                'author' => '藤子・F・不二雄',
                'publisher' => '小学館',
                'isbn' => '9784091400019',
                'stock' => '1',
            ],
            [
                'title' => '君たちはどう生きるか',
                'author' => '吉野源三郎',
                'publisher' => 'マガジンハウス',
                'isbn' => '9784838729470',
                'stock' => '1',
            ],
            [
                'title' => 'サピエンス全史(上)',
                'author' => 'ユヴァル・ノア・ハラリ',
                'publisher' => '河出書房新社',
                'isbn' => '9784309226712',
                'stock' => '1',
            ],
            [
                'title' => 'LIFE SHIFT(ライフ・シフト)',
                'author' => 'リンダ・グラットン, アンドリュー・スコット',
                'publisher' => '東洋経済新報社',
                'isbn' => '9784492533872',
                'stock' => '1',
            ],
            [
                'title' => 'アルゴリズム図鑑 絵で見てわかる26のアルゴリズム',
                'author' => '石田 保輝',
                'publisher' => '翔泳社',
                'isbn' => '9784798150732',
                'stock' => '1',
            ],
        ]);
    }
}
