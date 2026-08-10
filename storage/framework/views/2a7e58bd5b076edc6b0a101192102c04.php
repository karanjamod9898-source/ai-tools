<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($title ?? config('app.name', 'AI TOOLS')); ?></title>
    <meta name="description" content="<?php echo e($description ?? 'Discover AI tools and free online tools for productivity, content, design, development, marketing, and everyday workflows.'); ?>">
    <meta name="robots" content="<?php echo e($robots ?? 'index, follow'); ?>">
    <link rel="canonical" href="<?php echo e($canonical ?? url()->current()); ?>">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo e($title ?? config('app.name', 'AI TOOLS')); ?>">
    <meta property="og:description" content="<?php echo e($description ?? 'Discover AI tools and free online tools for productivity, content, design, development, marketing, and everyday workflows.'); ?>">
    <meta property="og:url" content="<?php echo e($canonical ?? url()->current()); ?>">
    <meta property="og:site_name" content="AI TOOLS">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo e($title ?? config('app.name', 'AI TOOLS')); ?>">
    <meta name="twitter:description" content="<?php echo e($description ?? 'Discover AI tools and free online tools for productivity, content, design, development, marketing, and everyday workflows.'); ?>">
    <script type="application/ld+json">
        <?php echo json_encode([
            '<?php $__contextArgs = [];
if (context()->has($__contextArgs[0])) :
if (isset($value)) { $__contextPrevious[] = $value; }
$value = context()->get($__contextArgs[0]); ?>' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => 'AI TOOLS',
            'url' => url('/'),
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => route('search.index') . '?q={search_term_string}',
                'query-input' => 'required name=search_term_string',
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>

    </script>
    <?php echo $__env->yieldPushContent('schema'); ?>

    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <link href="<?php echo e(asset('assets/css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('head'); ?>
</head>
<body>
    <?php if (isset($component)) { $__componentOriginalc15cfcb543496a0c121db9179bca79b2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc15cfcb543496a0c121db9179bca79b2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc15cfcb543496a0c121db9179bca79b2)): ?>
<?php $attributes = $__attributesOriginalc15cfcb543496a0c121db9179bca79b2; ?>
<?php unset($__attributesOriginalc15cfcb543496a0c121db9179bca79b2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc15cfcb543496a0c121db9179bca79b2)): ?>
<?php $component = $__componentOriginalc15cfcb543496a0c121db9179bca79b2; ?>
<?php unset($__componentOriginalc15cfcb543496a0c121db9179bca79b2); ?>
<?php endif; ?>

    <main id="main-content">
        <?php echo e($slot); ?>

    </main>

    <?php if (isset($component)) { $__componentOriginal21120ef38d90a9d572330a5268a23b04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal21120ef38d90a9d572330a5268a23b04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.site.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('site.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal21120ef38d90a9d572330a5268a23b04)): ?>
<?php $attributes = $__attributesOriginal21120ef38d90a9d572330a5268a23b04; ?>
<?php unset($__attributesOriginal21120ef38d90a9d572330a5268a23b04); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal21120ef38d90a9d572330a5268a23b04)): ?>
<?php $component = $__componentOriginal21120ef38d90a9d572330a5268a23b04; ?>
<?php unset($__componentOriginal21120ef38d90a9d572330a5268a23b04); ?>
<?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\admin\Desktop\ai-tools\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>