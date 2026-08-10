<?php

namespace App\Http\Controllers;

use App\Models\OnlineTool;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class OnlineToolController extends Controller
{
    public function index(): View
    {
        $tools = OnlineTool::published()
            ->latest()
            ->get();

        return view('pages.online-tool.index', compact('tools'));
    }

    public function show(string $onlineTool): View|RedirectResponse
    {
        $tool = OnlineTool::where('slug', $onlineTool)->first();

        if (! $tool) {
            return redirect()->route('home')->with('message', 'Online tool coming soon.');
        }

        return view('pages.online-tool.show', compact('tool'));
    }
}
