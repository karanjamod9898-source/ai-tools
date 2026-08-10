@props([
    'title' => 'Explore AI TOOLS',
    'links' => [],
])

<aside class="page-sidebar">
    <h2>{{ $title }}</h2>
    <ul>
        @foreach ($links as $link)
            <li><a href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
        @endforeach
    </ul>
</aside>
