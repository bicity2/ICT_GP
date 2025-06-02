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
                'password' =>Hash::make('1'),
                'department' => 'ippan',
            ],
            [
                'user_name' => 'soumu',
                'password' =>Hash::make('2'),
                'department' => 'soumu',
            ],
            [
                'user_name' => 'tanaka',
                'password' =>Hash::make('3'),
                'department' => 'ippan',
            ],
            [
                'user_name' => 'suzuki',
                'password' =>Hash::make('4'),
                'department' => 'soumu',
            ],
            [
                'user_name' => 'kobayashi',
                'password' =>Hash::make('5'),
                'department' => 'ippan',
            ],
            [
                'user_name' => 'nakamura',
                'password' =>Hash::make('6'),
                'department' => 'soumu',
            ],
            [
                'user_name' => 'kato',
                'password' =>Hash::make('7'),
                'department' => 'ippan',
            ],
            [
                'user_name' => 'yoshida',
                'password' =>Hash::make('8'),
                'department' => 'soumu',
            ],
            [
                'user_name' => 'yamaguchi',
                'password' =>Hash::make('9'),
                'department' => 'ippan',
            ],
            [
                'user_name' => 'matsumoto',
                'password' =>Hash::make('10'),
                'department' => 'soumu',
            ],
        ]);
    }
}
