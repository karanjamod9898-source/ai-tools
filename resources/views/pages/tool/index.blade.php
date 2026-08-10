<x-layouts.app title="AI Tools Directory - AI TOOLS" description="Browse the AI TOOLS public frontend for AI software discovery, categories, search, and future reviews.">
    <x-ui.breadcrumb :items="[['label' => 'AI Tools']]" />
    <x-ui.page-hero eyebrow="AI Directory" title="AI Tools Directory" description="Discover AI software by category, use case, and workflow. Placeholder cards mark where real directory records will render." icon="fa-solid fa-robot" />

    <section class="section-block">
        <div class="container">
            <x-ui.search-box placeholder="Search AI tools..." />
            <div class="row g-4 mt-2">
                @forelse ($tools as $tool)
                    <div class="col-md-6 col-xl-4">
                        <x-ui.tool-card
                            :title="$tool->name"
                            :description="$tool->short_description ?? $tool->description ?? 'No description available.'"
                            :url="route('tool.show', $tool->id)"
                            :category="$tool->categories->first()?->name ?? 'Uncategorized'"
                            icon="fa-solid fa-wand-magic-sparkles"
                            badge="AI Tool"
                        />
                    </div>
                @empty
                    <div class="col-12">
                        <x-ui.empty-state icon="fa-solid fa-robot" title="No tools found" message="Add tools to show them here." />
                    </div>
                @endforelse
            </div>
            <x-ui.ad-block label="Directory Advertisement" />
        </div>
    </section>
</x-layouts.app>
