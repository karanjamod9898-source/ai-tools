<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'eyebrow' => null,
    'title',
    'description' => null,
    'align' => 'center',
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
    'eyebrow' => null,
    'title',
    'description' => null,
    'align' => 'center',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<div class="section-heading text-<?php echo e($align); ?>">
    <?php if($eyebrow): ?>
        <p class="section-eyebrow"><?php echo e($eyebrow); ?></p>
    <?php endif; ?>

    <h2><?php echo e($title); ?></h2>

    <?php if($description): ?>
        <p class="section-description"><?php echo e($description); ?></p>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\admin\Desktop\ai-tools\resources\views/components/sections/section-heading.blade.php ENDPATH**/ ?>