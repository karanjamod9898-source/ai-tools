<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::published()
            ->ordered()
            ->get();

        return view('pages.category.index', compact('categories'));
    }

    public function show(string $slug): View|RedirectResponse
    {
        $category = Category::where('slug', $slug)
            ->with(['tools', 'onlineTools'])
            ->first();

        if (! $category) {
            return redirect()->route('home')->with('message', 'Category coming soon.');
        }

        return view('category.show', compact('category'));
    }
}
