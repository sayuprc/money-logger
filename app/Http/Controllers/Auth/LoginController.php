<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display login form
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('auth.login');
    }

    /**
     * The function about user authenticate
     *
     * @param Request $request
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request): \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt authenticate with credentials
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'message' => 'Incorrect email or password.',
        ]);
    }
}
