<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Element;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // 既存のデータを全て削除
        Element::truncate();
        Element::create(['name' => '火', 'color' => 'red-700']);
        Element::create(['name' => '氷', 'color' => 'blue-700']);
        Element::create(['name' => '雷', 'color' => 'yellow-500']);
        Element::create(['name' => '光', 'color' => 'stone-500']);
        Element::create(['name' => '闇', 'color' => 'gray-50']);
    }
}
