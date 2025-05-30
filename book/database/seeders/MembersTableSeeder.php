<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('members')->insert([
            [
                'user_name' => 'ippan',
                'password' => 1,
                'department' => '一般',
            ],
            [
                'user_name' => 'soumu',
                'password' => 2,
                'department' => '総務部',
            ],
            [
                'user_name' => 'tanaka',
                'password' => 3,
                'department' => '一般',
            ],
            [
                'user_name' => 'suzuki',
                'password' => 4,
                'department' => '総務部',
            ],
            [
                'user_name' => 'kobayashi',
                'password' => 5,
                'department' => '一般',
            ],
            [
                'user_name' => 'nakamura',
                'password' => 6,
                'department' => '総務部',
            ],
            [
                'user_name' => 'kato',
                'password' => 7,
                'department' => '一般',
            ],
            [
                'user_name' => 'yoshida',
                'password' => 8,
                'department' => '総務部',
            ],
            [
                'user_name' => 'yamaguchi',
                'password' => 9,
                'department' => '一般',
            ],
            [
                'user_name' => 'matsumoto',
                'password' => 0,
                'department' => '総務部',
            ],
        ]);
    }
}
