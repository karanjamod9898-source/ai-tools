@props([
    'eyebrow' => null,
    'title',
    'description' => null,
    'icon' => 'fa-solid fa-sparkles',
])

<section class="page-hero">
    <div class="container">
        <div class="page-hero-content reveal-up">
            <span class="page-hero-icon"><i class="{{ $icon }}"></i></span>
            @if ($eyebrow)
                <p class="section-eyebrow">{{ $eyebrow }}</p>
            @endif
            <h1>{{ $title }}</h1>
            @if ($description)
                <p>{{ $description }}</p>
            @endif
        </div>
    </div>
</section>
