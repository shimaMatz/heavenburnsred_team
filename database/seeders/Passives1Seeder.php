<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Passives1;

class Passives1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Passives1::create(['name' => '火の波動', 'description' => '味方全体の火属性スキル攻撃力を常時+10%']);
        Passives1::create(['name' => '氷の波動', 'description' => '味方全体の氷属性スキル攻撃力を常時+10%']);
        Passives1::create(['name' => '雷の波動', 'description' => '味方全体の雷属性スキル攻撃力を常時+10%']);
        Passives1::create(['name' => '光の波動', 'description' => '味方全体の光属性スキル攻撃力を常時+10%']);
        Passives1::create(['name' => '闇の波動', 'description' => '味方全体の闇属性スキル攻撃力を常時+10%']);
    }
}
