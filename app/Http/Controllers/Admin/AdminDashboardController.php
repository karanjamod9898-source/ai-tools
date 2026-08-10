<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AiTool;
use App\Models\Category;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    public function index(): View
    {
        $categoryCount = Category::count();
        $toolCount = AiTool::count();

        return view('admin.dashboard', compact('categoryCount', 'toolCount'));
    }
}
