@php
    $toolName = ucwords(str_replace('-', ' ', request()->route('slug')));
@endphp

<x-layouts.app title="{{ $toolName }} Review - AI TOOLS" description="Frontend detail page template for {{ $toolName }} with overview, features, FAQ, and AdSense-ready spacing.">
    <x-ui.breadcrumb :items="[['label' => 'AI Tools', 'url' => route('tools.index')], ['label' => $toolName]]" />
    <x-ui.page-hero eyebrow="AI Tool" :title="$toolName" description="A polished single AI tool page template prepared for descriptions, pricing, features, reviews, and schema during the backend phase." icon="fa-solid fa-wand-magic-sparkles" />

    <section class="section-block">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="content-panel">
                        <h2>Overview</h2>
                        <p>This placeholder detail page defines the public frontend structure for a real AI tool profile. Backend data will later provide the official description, pricing, features, rating, screenshots, and outbound links.</p>
                        <h2>Key Sections Ready</h2>
                        <ul class="check-list">
                            <li>Tool summary and category information</li>
                            <li>Feature list and use cases</li>
                            <li>Review and rating area</li>
                            <li>FAQ and related tools</li>
                        </ul>
                    </div>
                    <x-ui.faq-list id="toolFaq" :items="[
                        ['question' => 'Is this real tool data?', 'answer' => 'No. This page is a frontend template and will connect to real records later.'],
                        ['question' => 'Will reviews be added?', 'answer' => 'Yes. The layout is prepared for future review and rating modules.'],
                    ]" />
                </div>
                <div class="col-lg-4">
                    <x-ui.sidebar title="Tool Actions" :links="[
                        ['label' => 'Browse AI Tools', 'url' => route('tools.index')],
                        ['label' => 'Browse Categories', 'url' => route('categories.index')],
                        ['label' => 'Read Blog', 'url' => route('blog.index')],
                    ]" />
                    <x-ui.ad-block />
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
