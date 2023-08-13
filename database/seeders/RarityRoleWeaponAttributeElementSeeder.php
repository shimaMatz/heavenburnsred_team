<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rarity;
use App\Models\Role;
use App\Models\WeaponAttribute;
use App\Models\Element;

class RarityRoleWeaponAttributeElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // レアリティのデータを追加
        Rarity::create(['name' => 'SS']);
        Rarity::create(['name' => 'S']);
        Rarity::create(['name' => 'A']);

        // 役割のデータを追加
        Role::create(['name' => 'アタッカー']);
        Role::create(['name' => 'ブラスター']);
        Role::create(['name' => 'ブレイカー']);
        Role::create(['name' => 'ディフェンダー']);
        Role::create(['name' => 'バッファー']);
        Role::create(['name' => 'デバッファー']);
        Role::create(['name' => 'ヒーラー']);

        // 武器属性のデータを追加
        WeaponAttribute::create(['name' => '斬']);
        WeaponAttribute::create(['name' => '打']);
        WeaponAttribute::create(['name' => '突']);

        // 属性のデータを追加
        Element::create(['name' => '火']);
        Element::create(['name' => '氷']);
        Element::create(['name' => '雷']);
        Element::create(['name' => '闇']);
        Element::create(['name' => '光']);
    }
}
