@php
    $postTitle = ucwords(str_replace('-', ' ', request()->route('slug')));
@endphp

<x-layouts.app title="{{ $postTitle }} - AI TOOLS Blog" description="Frontend article template for {{ $postTitle }} on AI TOOLS.">
    <x-ui.breadcrumb :items="[['label' => 'Blog', 'url' => route('blog.index')], ['label' => $postTitle]]" />
    <x-ui.page-hero eyebrow="Blog" :title="$postTitle" description="A clean article page template with readable content width, sidebar, ads, and future schema-ready structure." icon="fa-regular fa-file-lines" />

    <section class="section-block">
        <div class="container">
            <div class="row g-4">
                <article class="col-lg-8">
                    <div class="content-panel article-content">
                        <p>This is placeholder editorial content for the public frontend. Real articles, author data, publication dates, and structured content will be managed in the future blog module.</p>
                        <h2>What this template supports</h2>
                        <p>The layout supports long-form guides, comparison articles, tool roundups, internal links, related resources, and carefully spaced ad placements.</p>
                    </div>
                </article>
                <div class="col-lg-4">
                    <x-ui.sidebar title="Keep Reading" :links="[
                        ['label' => 'AI Tools Directory', 'url' => route('tools.index')],
                        ['label' => 'Online Tools', 'url' => route('online-tools.index')],
                        ['label' => 'Categories', 'url' => route('categories.index')],
                    ]" />
                    <x-ui.ad-block />
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
