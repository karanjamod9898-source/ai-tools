<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AiTool;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AdminToolController extends Controller
{
    public function index(): View
    {
        $tools = AiTool::with('categories')->latest()->get();

        return view('admin.tools.index', compact('tools'));
    }

    public function create(): View
    {
        $categories = Category::ordered()->get();

        return view('admin.tools.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'link' => ['required', 'url', 'max:2048'],
            'category_id' => ['required', 'exists:categories,id'],
        ]);

        $tool = AiTool::create([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'short_description' => Str::limit($validated['description'], 180),
            'description' => $validated['description'],
            'website_url' => $validated['link'],
            'status' => 'published',
            'is_featured' => true,
            'is_verified' => true,
            'published_at' => now(),
        ]);

        $tool->categories()->sync([$validated['category_id']]);

        return redirect()->route('admin.tools.index')->with('success', 'Tool created successfully.');
    }

    public function edit(AiTool $tool): View
    {
        $categories = Category::ordered()->get();
        $selectedCategoryId = $tool->categories()->value('categories.id');

        return view('admin.tools.edit', compact('tool', 'categories', 'selectedCategoryId'));
    }

    public function update(Request $request, AiTool $tool): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'link' => ['required', 'url', 'max:2048'],
            'category_id' => ['required', 'exists:categories,id'],
        ]);

        $tool->update([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['name']),
            'short_description' => Str::limit($validated['description'], 180),
            'description' => $validated['description'],
            'website_url' => $validated['link'],
        ]);

        $tool->categories()->sync([$validated['category_id']]);

        return redirect()->route('admin.tools.index')->with('success', 'Tool updated successfully.');
    }

    public function destroy(AiTool $tool): RedirectResponse
    {
        $tool->categories()->detach();
        $tool->delete();

        return redirect()->route('admin.tools.index')->with('success', 'Tool deleted successfully.');
    }
}
