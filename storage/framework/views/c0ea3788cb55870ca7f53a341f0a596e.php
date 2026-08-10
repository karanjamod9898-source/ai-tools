<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'placeholder' => 'Search AI tools, online tools, guides...',
    'value' => '',
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
    'placeholder' => 'Search AI tools, online tools, guides...',
    'value' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<form class="directory-search" action="<?php echo e(route('search.index')); ?>" method="GET" role="search">
    <label class="visually-hidden" for="directory-search-input">Search</label>
    <i class="fa-solid fa-magnifying-glass"></i>
    <input id="directory-search-input" type="search" name="q" value="<?php echo e($value); ?>" placeholder="<?php echo e($placeholder); ?>">
    <button type="submit">Search</button>
</form>
<?php /**PATH C:\Users\admin\Desktop\ai-tools\resources\views/components/ui/search-box.blade.php ENDPATH**/ ?>