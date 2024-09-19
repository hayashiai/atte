<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users2; // ユーザーモデルを使用

class RegisterController extends Controller
{
    // 登録フォームを表示
    public function create()
    {
        return view('auth.register');
    }

    // 新規ユーザーを登録
    public function store(Request $request)
    {
        // 入力データを検証
        $validated = $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users2',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // 新規ユーザーを作成
        $user = Users2::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        // ログインしてリダイレクト
        auth()->login($user);

        return redirect()->route('home'); // ホームページにリダイレクト
    }
}
