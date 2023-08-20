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
        Unit::create(['name' => '31A']);
        Unit::create(['name' => '31B']);
        Unit::create(['name' => '31C']);
        Unit::create(['name' => '31D']);
        Unit::create(['name' => '31E']);
        Unit::create(['name' => '31F']);
        Unit::create(['name' => '31X']);
        Unit::create(['name' => '30G']);
        Unit::create(['name' => 'AngelBeats!']);
        Unit::create(['name' => '司令部']);
    }
}
