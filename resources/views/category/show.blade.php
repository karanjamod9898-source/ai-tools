<x-layouts.app
    title="{{ $category->name }} Tools - AI TOOLS"
    description="Explore {{ $category->name }} tools on AI TOOLS."
>
    <x-ui.breadcrumb :items="[['label' => 'Categories', 'url' => route('categories.index')], ['label' => $category->name]]" />
    <x-ui.page-hero eyebrow="Category" :title="$category->name . ' Tools'" :description="$category->description ?? 'Browse tools in this category.'" icon="fa-solid fa-folder-open" />

    <section class="section-block">
        <div class="container">
            <div class="row g-4">
                @forelse ($category->tools as $tool)
                    <div class="col-md-6 col-xl-4">
                        <div class="card h-100 border-0 shadow-sm tool-directory-card">
                            <div class="card-body d-flex flex-column">
                                @if ($tool->logo)
                                    <img src="{{ $tool->logo }}" alt="{{ $tool->name }} logo" class="mb-3" style="width: 56px; height: 56px; object-fit: contain;">
                                @endif

                                <h3 class="h5">{{ $tool->name }}</h3>
                                <p class="text-muted flex-grow-1">
                                    {{ $tool->short_description ?? $tool->description ?? 'No description available.' }}
                                </p>

                                @if ($tool->link)
                                    <a class="btn btn-primary" href="{{ $tool->link }}" target="_blank" rel="noopener">
                                        Open Tool
                                    </a>
                                @else
                                    <button class="btn btn-secondary" type="button" disabled>
                                        Link not available
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    @if ($category->onlineTools->isEmpty())
                        <div class="col-12">
                            <x-ui.empty-state icon="fa-solid fa-database" title="No tools found" message="Coming Soon" />
                        </div>
                    @endif
                @endforelse

                @foreach ($category->onlineTools as $tool)
                    <div class="col-md-6 col-xl-4">
                        <div class="card h-100 border-0 shadow-sm tool-directory-card">
                            <div class="card-body d-flex flex-column">
                                <span class="directory-card-icon mb-3"><i class="{{ $tool->icon ?? 'fa-solid fa-toolbox' }}"></i></span>
                                <h3 class="h5">{{ $tool->name }}</h3>
                                <p class="text-muted flex-grow-1">
                                    {{ $tool->short_description ?? $tool->description ?? 'No description available.' }}
                                </p>

                                @if ($tool->link)
                                    <a class="btn btn-primary" href="{{ $tool->link }}" target="_blank" rel="noopener">
                                        Open Tool
                                    </a>
                                @else
                                    <button class="btn btn-secondary" type="button" disabled>
                                        Coming Soon
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
