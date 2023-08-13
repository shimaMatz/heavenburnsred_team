<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create(['name' => '鮮烈', 'description' => '行動開始時に前衛にいると自身のスキル攻撃時の破壊率上昇値+30%']);
        Skill::create(['skill_name' => '', 'style_id' => '', 'weapon_attribute_id' => '', 'element_id' => '', 'sp_cost' => '', 'description' => '']);
    }
}
