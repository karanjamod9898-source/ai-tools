<x-layouts.app title="Categories - AI TOOLS" description="Browse AI tool categories and free online tool categories on AI TOOLS.">
    <x-ui.breadcrumb :items="[['label' => 'Categories']]" />
    <x-ui.page-hero eyebrow="Directory" title="Explore Categories" description="Browse AI tools and online utilities by task, workflow, and use case." icon="fa-solid fa-layer-group" />

    <section class="section-block">
        <div class="container">
            <x-ui.search-box placeholder="Search categories, tools, and guides..." />
            <div class="row g-4 mt-2">
                @forelse ($categories as $category)
                    <div class="col-md-6 col-xl-3">
                        <x-ui.category-card
                            :title="$category->name"
                            :description="$category->description"
                            :url="route('category.show', $category->slug)"
                            :icon="$category->icon ?? 'fa-solid fa-layer-group'"
                        />
                    </div>
                @empty
                    <div class="col-12">
                        <x-ui.empty-state icon="fa-solid fa-folder-open" title="No data found" message="Add published categories to show them here." />
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-layouts.app>
