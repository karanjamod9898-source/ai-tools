<x-layouts.app title="{{ $tool->name }} - Free Online Tool - AI TOOLS" description="{{ $tool->short_description ?? 'Open this free online tool.' }}">
    <x-ui.breadcrumb :items="[['label' => 'Online Tools', 'url' => route('online-tools.index')], ['label' => $tool->name]]" />
    <x-ui.page-hero eyebrow="Online Tool" :title="$tool->name" :description="$tool->short_description ?? $tool->description ?? 'Useful online utility.'" :icon="$tool->icon ?? 'fa-solid fa-toolbox'" />

    <section class="section-block">
        <div class="container">
            <div class="card border-0 shadow-sm tool-directory-card">
                <div class="card-body p-4">
                    <h2 class="h4">{{ $tool->name }}</h2>
                    <p class="text-muted">{{ $tool->description ?? $tool->short_description }}</p>

                    @if ($tool->link)
                        <a href="{{ $tool->link }}" class="btn btn-primary" target="_blank" rel="noopener">
                            Open Tool
                        </a>
                    @else
                        <button class="btn btn-secondary" type="button" disabled>Coming Soon</button>
                    @endif
                </div>
            </div>
            <x-ui.ad-block label="Below Tool Advertisement" />
        </div>
    </section>
</x-layouts.app>
