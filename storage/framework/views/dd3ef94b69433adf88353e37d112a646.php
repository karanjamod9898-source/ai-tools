<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'description',
    'url',
    'icon' => 'fa-solid fa-layer-group',
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
    'title',
    'description',
    'url',
    'icon' => 'fa-solid fa-layer-group',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<a href="<?php echo e($url); ?>" class="directory-card category-list-card reveal-up">
    <span class="directory-card-icon"><i class="<?php echo e($icon); ?>"></i></span>
    <span>
        <strong><?php echo e($title); ?></strong>
        <small><?php echo e($description); ?></small>
    </span>
</a>
<?php /**PATH C:\Users\admin\Desktop\ai-tools\resources\views/components/ui/category-card.blade.php ENDPATH**/ ?>