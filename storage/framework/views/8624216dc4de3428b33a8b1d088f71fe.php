<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'description',
    'url',
    'category' => 'Guide',
    'date' => 'Coming soon',
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
    'category' => 'Guide',
    'date' => 'Coming soon',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<article class="directory-card blog-card reveal-up">
    <span class="tool-badge"><?php echo e($category); ?></span>
    <h2><a href="<?php echo e($url); ?>"><?php echo e($title); ?></a></h2>
    <p><?php echo e($description); ?></p>
    <div class="tool-card-meta">
        <span><i class="fa-regular fa-calendar"></i> <?php echo e($date); ?></span>
        <a href="<?php echo e($url); ?>">Read article <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</article>
<?php /**PATH C:\Users\admin\Desktop\ai-tools\resources\views/components/ui/blog-card.blade.php ENDPATH**/ ?>