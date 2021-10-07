<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'name'=>'ちひろ',
                'title'=>'かわいすぎワロタ',
                'img_url'=> 'all_image/6.JPG',
                'content'=>'テスト',
                'comment'=>'テスト',

            ],
            [
                'name'=>'ひろこ',
                'title'=>'#1 ひろこの部屋',
                'img_url'=> 'all_image/7.JPG',
                'content'=>'テスト',
                'comment'=>'テスト',

            ],
            [
                'name'=>'なつみ',
                'title'=>'だいきちの考え事',
                'img_url'=> 'all_image/8.JPG',
                'content'=>'テスト',
                'comment'=>'テスト',

            ],
        ]);
    }
}
