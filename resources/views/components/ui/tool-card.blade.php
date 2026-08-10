@props([
    'title',
    'description',
    'url',
    'category' => 'Productivity',
    'icon' => 'fa-solid fa-wand-magic-sparkles',
    'badge' => 'Featured',
])

<article class="directory-card tool-card reveal-up">
    <div class="tool-card-top">
        <span class="directory-card-icon"><i class="{{ $icon }}"></i></span>
        <span class="tool-badge">{{ $badge }}</span>
    </div>
    <h2><a href="{{ $url }}">{{ $title }}</a></h2>
    <p>{{ $description }}</p>
    <div class="tool-card-meta">
        <span><i class="fa-regular fa-folder"></i> {{ $category }}</span>
        <a href="{{ $url }}">View details <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</article>
