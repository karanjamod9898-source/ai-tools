@props(['items' => []])

<nav class="breadcrumb-wrap" aria-label="Breadcrumb">
    <div class="container">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            @foreach ($items as $item)
                @if (!empty($item['url']))
                    <li class="breadcrumb-item"><a href="{{ $item['url'] }}">{{ $item['label'] }}</a></li>
                @else
                    <li class="breadcrumb-item active" aria-current="page">{{ $item['label'] }}</li>
                @endif
            @endforeach
        </ol>
    </div>
</nav>
