<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            ['content' => 'ご注文・配送について'],
            ['content' => '返品・交換について'],
            ['content' => '不具合・トラブルについて'],
            ['content' => 'サービス全般に関するお問い合わせ'],
            ['content' => 'その他のお問い合わせ'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

    }
}
