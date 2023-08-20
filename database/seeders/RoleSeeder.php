<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 既存のデータを全て削除
        Role::truncate();
        Role::create(['name' => 'アタッカー', 'en_name' => 'ATTACKER', 'color' => 'pink-500']);
        Role::create(['name' => 'ブレイカー',  'en_name' => 'BREAKER', 'color' => 'red-500']);
        Role::create(['name' => 'ブラスター', 'en_name' => 'BLASTER',  'color' => 'red-500']);
        Role::create(['name' => 'ヒーラー',  'en_name' => 'HEALER', 'color' => 'green-900']);
        Role::create(['name' => 'バッファー', 'en_name' => 'BYFFER',  'color' => 'green-400']);
        Role::create(['name' => 'デバッファー',  'en_name' => 'BEBUFFER', 'color' => 'fuchsia-600']);
        Role::create(['name' => 'ディフェンダー',  'en_name' => 'DEFENDER', 'color' => 'blue-900']);
    }
}
