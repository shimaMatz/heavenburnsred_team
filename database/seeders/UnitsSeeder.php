<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 既存のデータを全て削除
        Unit::truncate();
        Unit::create(['name' => '31A', 'image_path' => 'images/units/img_logo31a.png']);
        Unit::create(['name' => '31B', 'image_path' => 'images/units/img_logo31b.png']);
        Unit::create(['name' => '31C', 'image_path' => 'images/units/img_logo31c.png']);
        Unit::create(['name' => '31D', 'image_path' => 'images/units/img_logo31d.png']);
        Unit::create(['name' => '31E', 'image_path' => 'images/units/img_logo31e.png']);
        Unit::create(['name' => '31F', 'image_path' => 'images/units/img_logo31f.png']);
        Unit::create(['name' => '31X', 'image_path' => 'images/units/img_logo31x.png']);
        Unit::create(['name' => '30G', 'image_path' => 'images/units/img_logo30g.png']);
        Unit::create(['name' => 'AngelBeats!']);
        Unit::create(['name' => '司令部']);
    }
}
