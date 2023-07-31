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

        $menus = [
            [
                'title' => 'ダッシュボード',
                'url' => '/admin/dashboard',
            ],
            [
                'title' => 'ユーザー管理',
                'url' => '/admin/users',
            ],
            [
                'title' => 'コンテンツ管理',
                'url' => '/admin/contents',
            ],
            [
                'title' => 'キャラクター管理',
                'url' => '/admin/characters',
            ],
            [
                'title' => 'スタイル管理',
                'url' => '/admin/styles',
            ],
        ];

        foreach ($menus as $menu) {
            AdminMenu::create($menu);
        }
    }
}
