<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'icon' => 'fa-solid fa-layer-group',
    'title',
    'message',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'icon' => 'fa-solid fa-layer-group',
    'title',
    'message',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="empty-state">
    <div class="empty-state-icon">
        <i class="<?php echo e($icon); ?>"></i>
    </div>
    <h3><?php echo e($title); ?></h3>
    <p><?php echo e($message); ?></p>
</div>
<?php /**PATH C:\Users\admin\Desktop\ai-tools\resources\views/components/ui/empty-state.blade.php ENDPATH**/ ?>