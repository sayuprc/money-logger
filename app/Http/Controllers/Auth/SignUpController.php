<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SignUpController extends Controller
{
    /**
     * 登録画面表示
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('auth.sign-up');
    }

    /**
     * 登録処理
     *
     * @param Request $request
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function handle(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'min:1', 'max:32'],
            'email' => ['required', 'email', 'unique:users', 'max:256'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
        ]);

        $user = new User([
            'user_id' => (string)Str::uuid(),
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        $user->save();

        return view('auth.sign-up-complated');
    }
}
