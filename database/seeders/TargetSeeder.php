<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Target;

class TargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Target::truncate();
        Target::create(['name' => '自身']); // 例として1つの対象を追加
        Target::create(['name' => '単体']); // 例として1つの対象を追加
        Target::create(['name' => '全体']); // 例として別の対象を追加
        Target::create(['name' => '味方単体']); // 例として別の対象を追加
        Target::create(['name' => '味方前衛']); // 例として別の対象を追加
        Target::create(['name' => '味方後衛']); // 例として別の対象を追加
        Target::create(['name' => '味方全体']); // 例として別の対象を追加
    }
}
