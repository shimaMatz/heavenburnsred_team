<?php

namespace App\Http\Controllers;

use App\Models\AdminMenu;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
    {
        $adminMenus = AdminMenu::all(); // すべてのメニューデータを取得

        return view('dashboard', ['adminMenus' => $adminMenus]);
    }
}
