<x-layouts.app title="Free Online Tools - AI TOOLS" description="Browse free online tools for PDFs, images, developers, SEO, JSON, colors, text, QR codes, passwords, and more.">
    <x-ui.breadcrumb :items="[['label' => 'Online Tools']]" />
    <x-ui.page-hero eyebrow="Free Utilities" title="Free Online Tools" description="Fast, useful online tools with working links for daily tasks." icon="fa-solid fa-screwdriver-wrench" />

    <section class="section-block">
        <div class="container">
            <x-ui.search-box placeholder="Search online tools..." />
            <div class="row g-4 mt-2">
                @forelse ($tools as $tool)
                    <div class="col-md-6 col-xl-4">
                        <div class="card h-100 border-0 shadow-sm tool-directory-card">
                            <div class="card-body d-flex flex-column">
                                <span class="directory-card-icon mb-3"><i class="{{ $tool->icon ?? 'fa-solid fa-toolbox' }}"></i></span>
                                <h3 class="h5">{{ $tool->name }}</h3>
                                <p class="text-muted flex-grow-1">{{ $tool->short_description ?? $tool->description }}</p>
                                <a href="{{ $tool->link }}" class="btn btn-primary" target="_blank" rel="noopener">Open Tool</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <x-ui.empty-state icon="fa-solid fa-toolbox" title="Coming Soon" message="Online tools will appear here shortly." />
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</x-layouts.app>
