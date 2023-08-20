<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Unit;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::orderby('id', 'asc')->get();
        $units = Unit::all();
        return view('characters.index', compact('characters', 'units'));
    }

    // キャラクター編集画面を表示するメソッド
    public function edit($id)
    {
        // 編集対象のキャラクターを取得
        $character = Character::findOrFail($id);
        $units = Unit::all();

        // ビューを表示
        return view('characters.edit', compact('character', 'units'));
    }

    // キャラクターの更新処理を行うメソッド
    public function update(Request $request, $id)
    {
        // 編集対象のキャラクターを取得
        $character = Character::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'unit_id' => 'required|exists:units,id',
            'seraphim_code' => 'required|string|max:255',
            'seraph' => 'required|string|max:255',
            'first_person' => 'required|string|max:255',
            'birthday' => 'required|string|max:255',
            'height' => 'required|string|max:255',
            'birthplace' => 'required|string|max:255',
            'voice_actor' => 'required|string|max:255',
            'character_description' => 'nullable|string', // 必須でない場合は nullable を追加
        ]);


        $character->update([
            'name' => $request->input('name'),
            'unit_id' => $request->input('unit_id'),
            'seraphim_code' => $request->input('seraphim_code'),
            'seraph' => $request->input('seraph'),
            'first_person' => $request->input('first_person'),
            'birthday' => $request->input('birthday'),
            'height' => $request->input('height'),
            'birthplace' => $request->input('birthplace'),
            'voice_actor' => $request->input('voice_actor'),
            'character_description' => $request->input('character_description'),
        ]);


        // 更新が成功した場合のリダイレクト処理などを行う
        return redirect()->route('characters.edit', ['id' => $character->id])->with('success', 'キャラクターを更新しました。');
    }
}
