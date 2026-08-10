@php
    $posts = [
        ['title' => 'Best AI Tools for Productivity', 'description' => 'Placeholder article card for future editorial content.', 'slug' => 'best-ai-tools-for-productivity', 'category' => 'Roundup'],
        ['title' => 'How to Choose an AI Writing Tool', 'description' => 'Placeholder guide card for a future blog post.', 'slug' => 'choose-ai-writing-tool', 'category' => 'Guide'],
        ['title' => 'Free Online Tools Every Creator Needs', 'description' => 'Placeholder blog card for utility-focused SEO content.', 'slug' => 'free-online-tools-for-creators', 'category' => 'Tools'],
    ];
@endphp

<x-layouts.app title="AI Tools Blog - AI TOOLS" description="Read guides, comparisons, tutorials, and practical articles about AI tools and online utilities.">
    <x-ui.breadcrumb :items="[['label' => 'Blog']]" />
    <x-ui.page-hero eyebrow="Editorial" title="AI Tools Blog" description="A search-friendly blog listing prepared for future guides, comparisons, tutorials, and reviews." icon="fa-regular fa-newspaper" />

    <section class="section-block">
        <div class="container">
            <div class="row g-4">
                @foreach ($posts as $post)
                    <div class="col-md-6 col-xl-4">
                        <x-ui.blog-card :title="$post['title']" :description="$post['description']" :url="route('blog.show', $post['slug'])" :category="$post['category']" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
