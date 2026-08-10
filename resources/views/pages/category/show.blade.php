@php
    $categoryName = ucwords(str_replace('-', ' ', request()->route('slug')));
    $links = [
        ['label' => 'AI Tools', 'url' => route('tools.index')],
        ['label' => 'Online Tools', 'url' => route('online-tools.index')],
        ['label' => 'Blog Guides', 'url' => route('blog.index')],
    ];
@endphp

<x-layouts.app title="{{ $categoryName }} Tools - AI TOOLS" description="Explore placeholder frontend sections for {{ $categoryName }} tools on AI TOOLS.">
    <x-ui.breadcrumb :items="[['label' => 'Categories', 'url' => route('categories.index')], ['label' => $categoryName]]" />
    <x-ui.page-hero eyebrow="Category" :title="$categoryName . ' Tools'" description="A production-ready category page layout prepared for real tools, filters, content, and SEO blocks." icon="fa-solid fa-folder-open" />

    <section class="section-block">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <x-ui.search-box placeholder="Search inside this category..." />
                    <x-ui.empty-state icon="fa-solid fa-database" title="No real records connected yet" message="This category page is ready for database-backed tools when the backend phase begins." />
                </div>
                <div class="col-lg-4">
                    <x-ui.sidebar title="Related Sections" :links="$links" />
                    <x-ui.ad-block />
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
