<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AdminMenu;


class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 既存のデータを全て削除
        AdminMenu::truncate();

        $menus = [
            [
                'title' => 'ユーザー管理',
                'url' => '/admin/users',
            ],
            [
                'title' => 'キャラクター管理',
                'url' => '/admin/characters',
            ],
            [
                'title' => 'スタイル管理',
                'url' => '/admin/styles',
            ],
            [
                'title' => 'マスタ管理',
                'url' => '/admin/masters',
            ],
        ];

        foreach ($menus as $menu) {
            AdminMenu::create($menu);
        }
    }
}
