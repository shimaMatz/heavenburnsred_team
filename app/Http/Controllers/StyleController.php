<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Style;
use App\Models\Rarity;
use App\Models\Element;
use App\Models\Character;
use App\Models\WeaponAttribute;
use App\Models\Passives1;
use App\Models\Passives2;
use App\Models\Passives3;
use App\Models\Skill;
use App\Models\Role;


class StyleController extends Controller
{
    public function index()
    {
        $styles = Style::orderBy('character_id', 'asc')->orderBy('rarity_id', 'asc')->orderBy('created_at', 'desc')->get();
        $rarities = Rarity::all();
        $characters = Character::all();
        $weaponattributes = WeaponAttribute::all();
        $elements = Element::all();

        return view('styles.index', compact('styles', 'rarities', 'weaponattributes', 'elements', 'characters'));
    }

    public function create()
    {
        $rarities = Rarity::all();
        $characters = Character::all();
        $weaponattributes = WeaponAttribute::all();
        $elements = Element::all();

        return view('styles.create', compact('rarities', 'weaponattributes', 'elements', 'characters'));
    }

    public function store(Request $request)
    {
        // 入力データのバリデーション
        $validatedData = $request->validate([
            'style_name' => 'required|string|max:255',
            // 他の入力項目も追加
        ]);

        // スタイルの作成と保存
        $style = new Style();
        $style->style_name = $validatedData['style_name'];

        // 他の入力項目も設定

        $style->save();

        return redirect()->route('styles.create')->with('success', 'スタイルが追加されました！');
    }

    // キャラクター編集画面を表示するメソッド
    public function edit($id)
    {
        // 編集対象のキャラクターを取得
        $style = Style::findOrFail($id);
        $rarities = Rarity::all();
        $characters = Character::all();
        $weapon_attributes = WeaponAttribute::all();
        $passive1 = Passives1::all();
        $passive2 = Passives2::all();
        $passive3 = Passives3::all();
        $elements = Element::all();
        $skills = Skill::where('exclusive', false)->get();
        $exclusive_skills = Skill::where('exclusive', true)->get();
        // dd($exclusive_skills);
        $roles = Role::all();

        // ビューを表示
        return view('styles.edit', compact('style', 'rarities', 'characters', 'weapon_attributes', 'passive1', 'passive2', 'passive3', 'elements', 'skills', 'exclusive_skills', 'roles'));
    }

    // キャラクターの更新処理を行うメソッド
    public function update(Request $request, $id)
    {
        // 編集対象のキャラクターを取得
        $style = Style::findOrFail($id);

        $request->validate([
            'style_name' => 'required|string|max:255',
            'rarity_id' => 'required|exists:rarities,id',
            'role_id' => 'required|exists:roles,id',
            'weapon_attribute_id' => 'nullable|exists:weapon_attributes,id',
            'element_id' => 'nullable|exists:elements,id',
            'passive_1' => 'nullable|exists:passives1,id',
            'passive_2' => 'nullable|exists:passives2,id',
            'passive_3' => 'nullable|exists:passives3,id',
            'generated' => 'nullable|integer',
            'skill_id' => 'nullable|exists:skills,id',
            'exclusive_skill_id' => 'nullable|exists:skills,id',
        ]);


        $style->update([
            'style_name' => $request->input('style_name'),
            'rarity_id' => $request->input('rarity_id'),
            'role_id' => $request->input('role_id'),
            'weapon_attribute_id' => $request->input('weapon_attribute_id'),
            'element_id' => $request->input('element_id'),
            'passive_1' => $request->input('passive_1'),
            'passive_2' => $request->input('passive_2'),
            'passive_3' => $request->input('passive_3'),
            'generated' => $request->input('generated'),
            'skill_id' => $request->input('skill_id'),
            'exclusive_skill_id' => $request->input('exclusive_skill_id'),
        ]);


        // 更新が成功した場合のリダイレクト処理などを行う
        return redirect()->route('styles.index', ['id' => $style->id])->with('success', 'キャラクターを更新しました。');
    }
}
