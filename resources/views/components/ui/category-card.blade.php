@props([
    'title',
    'description',
    'url',
    'icon' => 'fa-solid fa-layer-group',
])

<a href="{{ $url }}" class="directory-card category-list-card reveal-up">
    <span class="directory-card-icon"><i class="{{ $icon }}"></i></span>
    <span>
        <strong>{{ $title }}</strong>
        <small>{{ $description }}</small>
    </span>
</a>
