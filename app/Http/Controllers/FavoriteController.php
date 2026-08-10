<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        return back()->with('status', 'Favorites backend is not connected yet.');
    }

    public function destroy(string $favorite): RedirectResponse
    {
        return back()->with('status', 'Favorites backend is not connected yet.');
    }
}
