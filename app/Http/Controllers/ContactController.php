<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('pages.company.contact');
    }

    public function store(Request $request): RedirectResponse
    {
        return back()->with('status', 'Contact form backend is not connected yet.');
    }
}
