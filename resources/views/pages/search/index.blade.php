@php
    $query = request('q', '');
@endphp

<x-layouts.app title="Search - AI TOOLS" description="Search AI tools, online tools, categories, and blog content on AI TOOLS.">
    <x-ui.breadcrumb :items="[['label' => 'Search']]" />
    <x-ui.page-hero eyebrow="Search" title="Search AI TOOLS" description="Find AI tools, online utilities, categories, and guides from one clean search interface." icon="fa-solid fa-magnifying-glass" />

    <section class="section-block">
        <div class="container">
            <x-ui.search-box placeholder="Search anything..." :value="$query" />
            <x-ui.empty-state icon="fa-solid fa-magnifying-glass-chart" title="Search backend not connected yet" message="The frontend search page is ready. Real results will appear when search indexing and database records are added." />
        </div>
    </section>
</x-layouts.app>
