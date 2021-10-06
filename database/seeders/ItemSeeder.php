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
                'category_id' => '1',
                'name' => 'ターバン',
                'img_url' => './storage/app/public/all_image/1.JPG',
                'price' => '700',
                'color' => '赤',
                'size' => 'M',
                'PR' => 'テスト',
            ],
            [
                'category_id' => '2',
                'name' => 'ターバン2',
                'img_url' => './storage/app/public/all_image/2.JPG',
                'price' => '700',
                'color' => '青',
                'size' => 'L',
                'PR' => 'テスト',
            ],
            [
                'category_id' => '3',
                'name' => 'ターバン3',
                'img_url' => './storage/app/public/all_image/3.JPG',
                'price' => '700',
                'color' => 'グレー',
                'size' => 'M',
                'PR' => 'テスト',
            ],
        ]);
    }
}
