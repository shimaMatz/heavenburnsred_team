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
                'url' => '/admin/content',
            ],
        ];

        foreach ($menus as $menu) {
            AdminMenu::create($menu);
        }
    }
}
