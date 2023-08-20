<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SkillAttribute;

class SkillAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 既存のデータを全て削除
        SkillAttribute::truncate();
        SkillAttribute::create(['name' => '斬']); // 例として1つのスキル属性を追加
        SkillAttribute::create(['name' => '突']); // 例として別のスキル属性を追加
        SkillAttribute::create(['name' => '打']); // 例として別のスキル属性を追加
        SkillAttribute::create(['name' => '回復']); // 例として別のスキル属性を追加
        SkillAttribute::create(['name' => 'バフ']); // 例として別のスキル属性を追加
        SkillAttribute::create(['name' => '回復バフ']); // 例として別のスキル属性を追加
    }
}
