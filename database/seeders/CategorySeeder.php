<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'ファブリック',
            ],
            [
                'name' => 'キッチン雑貨',
            ],
            [
                'name' => 'バス美容',
            ],
            [
                'name' => 'ファッション雑貨',
            ],
            [
                'name' => 'インテリア雑貨',
            ],
            [
                'name' => 'ファブリック',
            ],
        ]);
    }
}
