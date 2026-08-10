<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'eyebrow' => null,
    'title',
    'description' => null,
    'icon' => 'fa-solid fa-sparkles',
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
    'icon' => 'fa-solid fa-sparkles',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<section class="page-hero">
    <div class="container">
        <div class="page-hero-content reveal-up">
            <span class="page-hero-icon"><i class="<?php echo e($icon); ?>"></i></span>
            <?php if($eyebrow): ?>
                <p class="section-eyebrow"><?php echo e($eyebrow); ?></p>
            <?php endif; ?>
            <h1><?php echo e($title); ?></h1>
            <?php if($description): ?>
                <p><?php echo e($description); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\admin\Desktop\ai-tools\resources\views/components/ui/page-hero.blade.php ENDPATH**/ ?>