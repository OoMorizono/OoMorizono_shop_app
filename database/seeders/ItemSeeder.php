<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'ターバン',
                'img_url' => 'all_image/1.JPG',
                'price' => '700',
                'PR' => 'テスト',
            ],
            [
                'name' => 'ターバン2',
                'img_url' => 'all_image/2.JPG',
                'price' => '700',
                'PR' => 'テスト',
            ],
            [
                'name' => 'ターバン3',
                'img_url' => 'all_image/3.JPG',
                'price' => '700',
                'PR' => 'テスト',
            ],
        ]);
    }
}
