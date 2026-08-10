<x-layouts.app
    title="{{ $tool->name }} - AI TOOLS"
    description="{{ $tool->short_description ?? 'View tool details on AI TOOLS.' }}"
>
    <x-ui.breadcrumb :items="[
        ['label' => 'AI Tools', 'url' => route('tools.index')],
        ['label' => $tool->name],
    ]" />

    <section class="section-block">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        @if ($tool->cover_image)
                            <img src="{{ $tool->cover_image }}" class="card-img-top" alt="{{ $tool->name }}">
                        @endif

                        <div class="card-body p-4">
                            @if ($tool->logo)
                                <img src="{{ $tool->logo }}" alt="{{ $tool->name }} logo" class="mb-3" style="width: 72px; height: 72px; object-fit: contain;">
                            @endif

                            <h1 class="mb-3">{{ $tool->name }}</h1>

                            <p class="lead text-muted">
                                {{ $tool->short_description ?? $tool->description ?? 'No description available.' }}
                            </p>

                            @if ($tool->description && $tool->short_description)
                                <p>{{ $tool->description }}</p>
                            @endif

                            <p class="mb-4">
                                <strong>Category:</strong>
                                {{ $category?->name ?? 'Uncategorized' }}
                            </p>

                            <div class="d-flex flex-wrap gap-2">
                                @if ($tool->link)
                                    <a href="{{ $tool->link }}" class="btn btn-primary" target="_blank" rel="noopener">
                                        Visit Tool
                                    </a>
                                @endif

                                @if ($category)
                                    <a href="{{ route('category.show', $category->slug) }}" class="btn btn-outline-secondary">
                                        Back to category
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <x-ui.sidebar title="Tool Actions" :links="[
                        ['label' => 'Browse AI Tools', 'url' => route('tools.index')],
                        ['label' => 'Browse Categories', 'url' => route('categories.index')],
                    ]" />
                    <x-ui.ad-block />
                </div>
            </div>

            <div class="mt-5">
                <h2 class="h3 mb-4">Related Tools</h2>

                <div class="row g-4">
                    @forelse ($relatedTools as $relatedTool)
                        <div class="col-md-6 col-xl-3">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h3 class="h5">{{ $relatedTool->name }}</h3>
                                    <p class="text-muted">
                                        {{ $relatedTool->short_description ?? $relatedTool->description ?? 'No description available.' }}
                                    </p>
                                    <a href="{{ route('tool.show', $relatedTool->id) }}" class="btn btn-sm btn-outline-primary">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <x-ui.empty-state icon="fa-solid fa-database" title="No related tools found" message="More tools from this category will appear here." />
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
