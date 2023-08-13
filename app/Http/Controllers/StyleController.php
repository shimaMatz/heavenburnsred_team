<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Style;
use App\Models\Rarity;
use App\Models\Element;
use App\Models\Character;
use App\Models\WeaponAttribute;


class StyleController extends Controller
{
    public function index()
    {
        $styles = Style::all();
        $rarities = Rarity::all();
        $characters = Character::all();
        $weaponattributes = WeaponAttribute::all();
        $elements = Element::all();

        return view('styles.index', compact('styles', 'rarities', 'weaponattributes', 'elements', 'characters'));
    }
}
