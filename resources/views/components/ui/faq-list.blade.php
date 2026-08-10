@props(['items' => [], 'id' => 'faqList'])

<div class="accordion faq-accordion" id="{{ $id }}">
    @foreach ($items as $index => $faq)
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $id }}{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="{{ $id }}{{ $index }}">
                    {{ $faq['question'] }}
                </button>
            </h2>
            <div id="{{ $id }}{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" data-bs-parent="#{{ $id }}">
                <div class="accordion-body">{{ $faq['answer'] }}</div>
            </div>
        </div>
    @endforeach
</div>
