<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => ''.e($tool->name).' - AI TOOLS','description' => ''.e($tool->short_description ?? 'View tool details on AI TOOLS.').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e($tool->name).' - AI TOOLS','description' => ''.e($tool->short_description ?? 'View tool details on AI TOOLS.').'']); ?>
    <?php if (isset($component)) { $__componentOriginal045477955e5b1d8c9df01934ca3836c0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal045477955e5b1d8c9df01934ca3836c0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.breadcrumb','data' => ['items' => [
        ['label' => 'AI Tools', 'url' => route('tools.index')],
        ['label' => $tool->name],
    ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['items' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
        ['label' => 'AI Tools', 'url' => route('tools.index')],
        ['label' => $tool->name],
    ])]); ?>
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

    <section class="section-block">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <?php if($tool->cover_image): ?>
                            <img src="<?php echo e($tool->cover_image); ?>" class="card-img-top" alt="<?php echo e($tool->name); ?>">
                        <?php endif; ?>

                        <div class="card-body p-4">
                            <?php if($tool->logo): ?>
                                <img src="<?php echo e($tool->logo); ?>" alt="<?php echo e($tool->name); ?> logo" class="mb-3" style="width: 72px; height: 72px; object-fit: contain;">
                            <?php endif; ?>

                            <h1 class="mb-3"><?php echo e($tool->name); ?></h1>

                            <p class="lead text-muted">
                                <?php echo e($tool->short_description ?? $tool->description ?? 'No description available.'); ?>

                            </p>

                            <?php if($tool->description && $tool->short_description): ?>
                                <p><?php echo e($tool->description); ?></p>
                            <?php endif; ?>

                            <p class="mb-4">
                                <strong>Category:</strong>
                                <?php echo e($category?->name ?? 'Uncategorized'); ?>

                            </p>

                            <div class="d-flex flex-wrap gap-2">
                                <?php if($tool->link): ?>
                                    <a href="<?php echo e($tool->link); ?>" class="btn btn-primary" target="_blank" rel="noopener">
                                        Visit Tool
                                    </a>
                                <?php endif; ?>

                                <?php if($category): ?>
                                    <a href="<?php echo e(route('category.show', $category->slug)); ?>" class="btn btn-outline-secondary">
                                        Back to category
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <?php if (isset($component)) { $__componentOriginal724cca1d6cfbd0d9b219a0d1bdb2d9a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal724cca1d6cfbd0d9b219a0d1bdb2d9a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.sidebar','data' => ['title' => 'Tool Actions','links' => [
                        ['label' => 'Browse AI Tools', 'url' => route('tools.index')],
                        ['label' => 'Browse Categories', 'url' => route('categories.index')],
                    ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Tool Actions','links' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
                        ['label' => 'Browse AI Tools', 'url' => route('tools.index')],
                        ['label' => 'Browse Categories', 'url' => route('categories.index')],
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

            <div class="mt-5">
                <h2 class="h3 mb-4">Related Tools</h2>

                <div class="row g-4">
                    <?php $__empty_1 = true; $__currentLoopData = $relatedTools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relatedTool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-md-6 col-xl-3">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h3 class="h5"><?php echo e($relatedTool->name); ?></h3>
                                    <p class="text-muted">
                                        <?php echo e($relatedTool->short_description ?? $relatedTool->description ?? 'No description available.'); ?>

                                    </p>
                                    <a href="<?php echo e(route('tool.show', $relatedTool->id)); ?>" class="btn btn-sm btn-outline-primary">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-12">
                            <?php if (isset($component)) { $__componentOriginal3607a477fdef7402bc742abad5df9c51 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3607a477fdef7402bc742abad5df9c51 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.empty-state','data' => ['icon' => 'fa-solid fa-database','title' => 'No related tools found','message' => 'More tools from this category will appear here.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.empty-state'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fa-solid fa-database','title' => 'No related tools found','message' => 'More tools from this category will appear here.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3607a477fdef7402bc742abad5df9c51)): ?>
<?php $attributes = $__attributesOriginal3607a477fdef7402bc742abad5df9c51; ?>
<?php unset($__attributesOriginal3607a477fdef7402bc742abad5df9c51); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3607a477fdef7402bc742abad5df9c51)): ?>
<?php $component = $__componentOriginal3607a477fdef7402bc742abad5df9c51; ?>
<?php unset($__componentOriginal3607a477fdef7402bc742abad5df9c51); ?>
<?php endif; ?>
                        </div>
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
<?php /**PATH C:\Users\admin\Desktop\ai-tools\resources\views/tool/show.blade.php ENDPATH**/ ?>