<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
    public function showLogin(): View
    {
        return view('admin.auth.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (
            hash_equals(config('admin.email'), $validated['email']) &&
            hash_equals(config('admin.password'), $validated['password'])
        ) {
            $request->session()->regenerate();
            $request->session()->put('admin_logged_in', true);

            return redirect()->route('admin.dashboard');
        }

        return back()
            ->withErrors(['email' => 'Invalid admin credentials.'])
            ->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget('admin_logged_in');
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
