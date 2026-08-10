<?php

namespace App\Http\Controllers;

use App\Models\AiTool;
use App\Models\Category;
use App\Models\OnlineTool;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $categories = Category::published()
            ->ordered()
            ->get();

        $featuredTools = AiTool::with('categories')
            ->published()
            ->featured()
            ->take(6)
            ->get();

        $onlineTools = OnlineTool::published()
            ->featured()
            ->take(6)
            ->get();

        return view('pages.home', compact('categories', 'featuredTools', 'onlineTools'));
    }
}
