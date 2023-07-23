<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // ユーザー一覧のデータを取得

        return view('users.index', ['users' => $users]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        // フォームデータでユーザー情報を更新
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
        ]);

        // ユーザー情報の更新が成功したらリダイレクトなどの処理を行う
        return redirect()->route('users.edit', ['id' => $user->id])->with('success', 'ユーザー情報を更新しました。');
    }
}
