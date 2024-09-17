<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // ログインフォームを表示するメソッド
    public function loginForm()
    {
        return view('auth.login');  // ログイン画面のビューを返す
    }

    // ログイン処理を行うメソッド
    public function login(LoginRequest $request)
    {
        // バリデーションがフォームリクエストで自動的に行われる
        $validated = $request->validated();

        // 認証を試みる
        if (Auth::attempt($validated)) {
            // 認証成功時のリダイレクト先（通常はホームページやダッシュボード）
            return redirect()->intended('/');
        } else {
            // 認証失敗時の処理
            return back()->withErrors([
                'email' => 'ログイン情報が正しくありません。',
            ]);
        }
    }
    public function logout()
{
    Auth::logout();  // ユーザーをログアウト
    return redirect('/login');  // ログアウト後にログインページにリダイレクト
}
}

