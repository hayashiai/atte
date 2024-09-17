<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest; // RegisterRequestのインポート
use App\Models\User; // Userモデルのインポート
use Illuminate\Support\Facades\Hash; // パスワードをハッシュ化するためのインポート
use Illuminate\Support\Facades\Auth; // ログイン処理に使うAuthのインポート

class RegisterController extends Controller
{
    // ユーザー登録フォームを表示
    public function create()
    {
        return view('auth.register');
    }

    // ユーザー登録処理
    public function store(RegisterRequest $request)
    {
        // バリデーション済みのデータを取得
        $validated = $request->validated();

        // 新しいユーザーを作成
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), // パスワードをハッシュ化
        ]);

        // 作成されたユーザーでログイン
        Auth::login($user);

        // 登録完了後にホームページにリダイレクト
        return redirect()->intended('/'); // ホームページにリダイレクト
    }
}

