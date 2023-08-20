<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WeaponAttribute;

class WeaponAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 既存のデータを全て削除
        WeaponAttribute::truncate();
        WeaponAttribute::create(['name' => '斬', 'color' => 'purple-600']);
        WeaponAttribute::create(['name' => '打', 'color' => 'green-600']);
        WeaponAttribute::create(['name' => '突', 'color' => 'yellow-500']);
    }
}
