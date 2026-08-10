@props([
    'placeholder' => 'Search AI tools, online tools, guides...',
    'value' => '',
])

<form class="directory-search" action="{{ route('search.index') }}" method="GET" role="search">
    <label class="visually-hidden" for="directory-search-input">Search</label>
    <i class="fa-solid fa-magnifying-glass"></i>
    <input id="directory-search-input" type="search" name="q" value="{{ $value }}" placeholder="{{ $placeholder }}">
    <button type="submit">Search</button>
</form>
