@props([
    'eyebrow' => null,
    'title',
    'description' => null,
    'align' => 'center',
])

<div class="section-heading text-{{ $align }}">
    @if ($eyebrow)
        <p class="section-eyebrow">{{ $eyebrow }}</p>
    @endif

    <h2>{{ $title }}</h2>

    @if ($description)
        <p class="section-description">{{ $description }}</p>
    @endif
</div>
