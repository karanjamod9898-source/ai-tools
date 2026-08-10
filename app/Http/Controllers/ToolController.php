<?php

namespace App\Http\Controllers;

use App\Models\AiTool;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ToolController extends Controller
{
    public function index(): View
    {
        $tools = AiTool::with('categories')
            ->latest()
            ->get();

        return view('pages.tool.index', compact('tools'));
    }

    public function show(string $tool): View
    {
        return view('pages.tool.show');
    }

    public function showById(int $id): View|RedirectResponse
    {
        $tool = AiTool::with('categories')->find($id);

        if (! $tool) {
            return redirect()->route('home')->with('message', 'Tool coming soon.');
        }

        $category = $tool->categories->first();

        $relatedTools = collect();

        if ($category) {
            $relatedTools = AiTool::where('id', '!=', $tool->id)
                ->whereHas('categories', function ($query) use ($category) {
                    $query->where('categories.id', $category->id);
                })
                ->take(4)
                ->get();
        }

        return view('tool.show', compact('tool', 'category', 'relatedTools'));
    }
}
