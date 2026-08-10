@props([
    'title',
    'description',
    'url',
    'category' => 'Guide',
    'date' => 'Coming soon',
])

<article class="directory-card blog-card reveal-up">
    <span class="tool-badge">{{ $category }}</span>
    <h2><a href="{{ $url }}">{{ $title }}</a></h2>
    <p>{{ $description }}</p>
    <div class="tool-card-meta">
        <span><i class="fa-regular fa-calendar"></i> {{ $date }}</span>
        <a href="{{ $url }}">Read article <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</article>
