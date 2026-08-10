<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('pages.blog.index');
    }

    public function show(string $blog): View
    {
        return view('pages.blog.show');
    }
}
