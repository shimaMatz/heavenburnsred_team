<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rarity;
use App\Models\Role;
use App\Models\WeaponAttribute;
use App\Models\Element;

class MasterController extends Controller
{
    public function index()
    {
        $rarities = Rarity::all();
        $roles = Role::all();
        $weaponAttributes = WeaponAttribute::all();
        $elements = Element::all();

        return view('masters.index', compact('rarities', 'roles', 'weaponAttributes', 'elements'));
    }
}
