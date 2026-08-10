@props([
    'icon' => 'fa-solid fa-layer-group',
    'title',
    'message',
])

<div class="empty-state">
    <div class="empty-state-icon">
        <i class="{{ $icon }}"></i>
    </div>
    <h3>{{ $title }}</h3>
    <p>{{ $message }}</p>
</div>
