<?php
    $postTitle = ucwords(str_replace('-', ' ', request()->route('slug')));
?>

<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => ''.e($postTitle).' - AI TOOLS Blog','description' => 'Frontend article template for '.e($postTitle).' on AI TOOLS.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e($postTitle).' - AI TOOLS Blog','description' => 'Frontend article template for '.e($postTitle).' on AI TOOLS.']); ?>
    <?php if (isset($component)) { $__componentOriginal045477955e5b1d8c9df01934ca3836c0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal045477955e5b1d8c9df01934ca3836c0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.breadcrumb','data' => ['items' => [['label' => 'Blog', 'url' => route('blog.index')], ['label' => $postTitle]]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([['label' => 'Blog', 'url' => route('blog.index')], ['label' => $postTitle]])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal045477955e5b1d8c9df01934ca3836c0)): ?>
<?php $attributes = $__attributesOriginal045477955e5b1d8c9df01934ca3836c0; ?>
<?php unset($__attributesOriginal045477955e5b1d8c9df01934ca3836c0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal045477955e5b1d8c9df01934ca3836c0)): ?>
<?php $component = $__componentOriginal045477955e5b1d8c9df01934ca3836c0; ?>
<?php unset($__componentOriginal045477955e5b1d8c9df01934ca3836c0); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc2ac24e8b26a95c4ab17f6ffff7eecc8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2ac24e8b26a95c4ab17f6ffff7eecc8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.page-hero','data' => ['eyebrow' => 'Blog','title' => $postTitle,'description' => 'A clean article page template with readable content width, sidebar, ads, and future schema-ready structure.','icon' => 'fa-regular fa-file-lines']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Blog','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($postTitle),'description' => 'A clean article page template with readable content width, sidebar, ads, and future schema-ready structure.','icon' => 'fa-regular fa-file-lines']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2ac24e8b26a95c4ab17f6ffff7eecc8)): ?>
<?php $attributes = $__attributesOriginalc2ac24e8b26a95c4ab17f6ffff7eecc8; ?>
<?php unset($__attributesOriginalc2ac24e8b26a95c4ab17f6ffff7eecc8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2ac24e8b26a95c4ab17f6ffff7eecc8)): ?>
<?php $component = $__componentOriginalc2ac24e8b26a95c4ab17f6ffff7eecc8; ?>
<?php unset($__componentOriginalc2ac24e8b26a95c4ab17f6ffff7eecc8); ?>
<?php endif; ?>

    <section class="section-block">
        <div class="container">
            <div class="row g-4">
                <article class="col-lg-8">
                    <div class="content-panel article-content">
                        <p>This is placeholder editorial content for the public frontend. Real articles, author data, publication dates, and structured content will be managed in the future blog module.</p>
                        <h2>What this template supports</h2>
                        <p>The layout supports long-form guides, comparison articles, tool roundups, internal links, related resources, and carefully spaced ad placements.</p>
                    </div>
                </article>
                <div class="col-lg-4">
                    <?php if (isset($component)) { $__componentOriginal724cca1d6cfbd0d9b219a0d1bdb2d9a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal724cca1d6cfbd0d9b219a0d1bdb2d9a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.sidebar','data' => ['title' => 'Keep Reading','links' => [
                        ['label' => 'AI Tools Directory', 'url' => route('tools.index')],
                        ['label' => 'Online Tools', 'url' => route('online-tools.index')],
                        ['label' => 'Categories', 'url' => route('categories.index')],
                    ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Keep Reading','links' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                        ['label' => 'AI Tools Directory', 'url' => route('tools.index')],
                        ['label' => 'Online Tools', 'url' => route('online-tools.index')],
                        ['label' => 'Categories', 'url' => route('categories.index')],
                    ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal724cca1d6cfbd0d9b219a0d1bdb2d9a8)): ?>
<?php $attributes = $__attributesOriginal724cca1d6cfbd0d9b219a0d1bdb2d9a8; ?>
<?php unset($__attributesOriginal724cca1d6cfbd0d9b219a0d1bdb2d9a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal724cca1d6cfbd0d9b219a0d1bdb2d9a8)): ?>
<?php $component = $__componentOriginal724cca1d6cfbd0d9b219a0d1bdb2d9a8; ?>
<?php unset($__componentOriginal724cca1d6cfbd0d9b219a0d1bdb2d9a8); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal653637d447efc039c337510349fed134 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal653637d447efc039c337510349fed134 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.ad-block','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.ad-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal653637d447efc039c337510349fed134)): ?>
<?php $attributes = $__attributesOriginal653637d447efc039c337510349fed134; ?>
<?php unset($__attributesOriginal653637d447efc039c337510349fed134); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal653637d447efc039c337510349fed134)): ?>
<?php $component = $__componentOriginal653637d447efc039c337510349fed134; ?>
<?php unset($__componentOriginal653637d447efc039c337510349fed134); ?>
<?php endif; ?>
                </div>
            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php /**PATH C:\Users\admin\Desktop\ai-tools\resources\views/pages/blog/show.blade.php ENDPATH**/ ?>