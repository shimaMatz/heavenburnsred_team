<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rarity;


class RaritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 既存のデータを全て削除
        Rarity::truncate();

        Rarity::create(['name' => 'SS', 'color' => 'amber-300', 'image_path' => 'images/rarities/ss.png']);
        Rarity::create(['name' => 'S', 'color' => 'sky-300', 'image_path' => 'images/rarities/s.png']);
        Rarity::create(['name' => 'A', 'color' => 'red-500', 'image_path' => 'images/rarities/a.png']);
    }
}
