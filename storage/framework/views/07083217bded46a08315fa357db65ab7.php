<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => 'AI TOOLS - Best AI Tools and Free Online Tools Directory','description' => 'Explore a curated AI tools directory, free online tools, practical guides, categories, reviews, and search-friendly resources for modern workflows.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'AI TOOLS - Best AI Tools and Free Online Tools Directory','description' => 'Explore a curated AI tools directory, free online tools, practical guides, categories, reviews, and search-friendly resources for modern workflows.']); ?>
    <?php if(session('message')): ?>
    <div class="container pt-3">
        <div class="alert alert-info mb-0"><?php echo e(session('message')); ?></div>
    </div>
    <?php endif; ?>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="hero-copy reveal-up">
                        <span class="hero-kicker"><i class="fa-solid fa-bolt"></i> AI tools and free utilities in one place</span>
                        <h1>Find the right AI tool for every workflow.</h1>
                        <p>
                            AI TOOLS helps users discover useful AI software, compare practical online tools, and learn how to work faster with curated resources.
                        </p>

                        <form class="hero-search" action="#" method="GET" role="search">
                            <label class="visually-hidden" for="home-search">Search AI tools and online tools</label>
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input id="home-search" type="search" name="q" placeholder="Search writing, image, SEO, coding, PDF tools..." autocomplete="off">
                            <button type="submit">Search</button>
                        </form>

                        <div class="hero-trust">
                            <span><i class="fa-solid fa-check"></i> SEO-ready structure</span>
                            <span><i class="fa-solid fa-check"></i> AdSense-ready layout</span>
                            <span><i class="fa-solid fa-check"></i> Mobile first</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="hero-panel reveal-up reveal-delay-1" aria-label="AI TOOLS platform highlights">
                        <div class="panel-header">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="tool-preview active">
                            <i class="fa-solid fa-robot"></i>
                            <div>
                                <strong>AI Tools Directory</strong>
                                <p>Structured categories, ratings, reviews, and search-ready pages.</p>
                            </div>
                        </div>
                        <div class="tool-preview">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                            <div>
                                <strong>Free Online Tools</strong>
                                <p>Fast browser utilities built for repeat traffic and everyday tasks.</p>
                            </div>
                        </div>
                        <div class="tool-preview">
                            <i class="fa-solid fa-chart-line"></i>
                            <div>
                                <strong>Content Engine</strong>
                                <p>Helpful guides and comparison pages designed for organic discovery.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="categories" class="section-block">
        <div class="container">
            <?php if (isset($component)) { $__componentOriginal4deb4cea19edae5a1609e7abdfbe928b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.section-heading','data' => ['eyebrow' => 'Browse by need','title' => 'AI Tool Categories','description' => 'Browse real AI tool categories from the database.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Browse by need','title' => 'AI Tool Categories','description' => 'Browse real AI tool categories from the database.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b)): ?>
<?php $attributes = $__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b; ?>
<?php unset($__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4deb4cea19edae5a1609e7abdfbe928b)): ?>
<?php $component = $__componentOriginal4deb4cea19edae5a1609e7abdfbe928b; ?>
<?php unset($__componentOriginal4deb4cea19edae5a1609e7abdfbe928b); ?>
<?php endif; ?>

            <div class="row g-3">
                <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="<?php echo e(route('category.show', $category->slug)); ?>" class="category-card reveal-up">
                        <i class="fa-solid fa-arrow-trend-up"></i>

                        <span><?php echo e($category->name); ?></span>

                        <small class="d-block text-muted">
                            <?php echo e($category->description); ?>

                        </small>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12">
                    <div class="alert alert-warning">
                        No data found.
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="ai-tools" class="section-block section-muted">
        <div class="container">
            <?php if (isset($component)) { $__componentOriginal4deb4cea19edae5a1609e7abdfbe928b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.section-heading','data' => ['eyebrow' => 'Curated discovery','title' => 'Featured AI Tools','description' => 'Popular AI tools from the database, ready to open in a new tab.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Curated discovery','title' => 'Featured AI Tools','description' => 'Popular AI tools from the database, ready to open in a new tab.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b)): ?>
<?php $attributes = $__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b; ?>
<?php unset($__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4deb4cea19edae5a1609e7abdfbe928b)): ?>
<?php $component = $__componentOriginal4deb4cea19edae5a1609e7abdfbe928b; ?>
<?php unset($__componentOriginal4deb4cea19edae5a1609e7abdfbe928b); ?>
<?php endif; ?>

            <div class="row g-4">
                <?php $__empty_1 = true; $__currentLoopData = $featuredTools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-6 col-xl-4">
                    <div class="card h-100 border-0 shadow-sm tool-directory-card">
                        <div class="card-body d-flex flex-column">
                            <h3 class="h5"><?php echo e($tool->name); ?></h3>
                            <p class="text-muted flex-grow-1"><?php echo e($tool->short_description ?? $tool->description); ?></p>
                            <a href="<?php echo e(route('tool.show', $tool->id)); ?>" class="btn btn-primary" target="_blank" rel="noopener">Open Tool</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12">
                    <?php if (isset($component)) { $__componentOriginal3607a477fdef7402bc742abad5df9c51 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3607a477fdef7402bc742abad5df9c51 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.empty-state','data' => ['icon' => 'fa-solid fa-star','title' => 'Coming Soon','message' => 'Featured tools will appear here shortly.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.empty-state'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fa-solid fa-star','title' => 'Coming Soon','message' => 'Featured tools will appear here shortly.']); ?>
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
    </section>

    <section id="online-tools" class="section-block">
        <div class="container">
            <?php if (isset($component)) { $__componentOriginal4deb4cea19edae5a1609e7abdfbe928b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.section-heading','data' => ['eyebrow' => 'Free utilities','title' => 'Popular Online Tools','description' => 'Useful online tools with working external links.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Free utilities','title' => 'Popular Online Tools','description' => 'Useful online tools with working external links.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b)): ?>
<?php $attributes = $__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b; ?>
<?php unset($__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4deb4cea19edae5a1609e7abdfbe928b)): ?>
<?php $component = $__componentOriginal4deb4cea19edae5a1609e7abdfbe928b; ?>
<?php unset($__componentOriginal4deb4cea19edae5a1609e7abdfbe928b); ?>
<?php endif; ?>

            <div class="row g-4">
                <?php $__empty_1 = true; $__currentLoopData = $onlineTools; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="col-md-6 col-xl-4">
                    <div class="card h-100 border-0 shadow-sm tool-directory-card">
                        <div class="card-body d-flex flex-column">
                            <span class="directory-card-icon mb-3"><i class="<?php echo e($tool->icon ?? 'fa-solid fa-toolbox'); ?>"></i></span>
                            <h3 class="h5"><?php echo e($tool->name); ?></h3>
                            <p class="text-muted flex-grow-1"><?php echo e($tool->short_description ?? $tool->description); ?></p>
                            <a href="<?php echo e(route('tool.show', $tool->id)); ?>" class="btn btn-primary" target="_blank" rel="noopener">Open Tool</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div class="col-12">
                    <?php if (isset($component)) { $__componentOriginal3607a477fdef7402bc742abad5df9c51 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3607a477fdef7402bc742abad5df9c51 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.empty-state','data' => ['icon' => 'fa-solid fa-toolbox','title' => 'Coming Soon','message' => 'Online tools will appear here shortly.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.empty-state'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fa-solid fa-toolbox','title' => 'Coming Soon','message' => 'Online tools will appear here shortly.']); ?>
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
    </section>

    <section id="blog" class="section-block section-muted">
        <div class="container">
            <?php if (isset($component)) { $__componentOriginal4deb4cea19edae5a1609e7abdfbe928b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.section-heading','data' => ['eyebrow' => 'Learn and compare','title' => 'Latest Blogs','description' => 'Prepared for SEO articles, comparisons, tutorials, and tool roundups once the blog module is added.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Learn and compare','title' => 'Latest Blogs','description' => 'Prepared for SEO articles, comparisons, tutorials, and tool roundups once the blog module is added.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b)): ?>
<?php $attributes = $__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b; ?>
<?php unset($__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4deb4cea19edae5a1609e7abdfbe928b)): ?>
<?php $component = $__componentOriginal4deb4cea19edae5a1609e7abdfbe928b; ?>
<?php unset($__componentOriginal4deb4cea19edae5a1609e7abdfbe928b); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal3607a477fdef7402bc742abad5df9c51 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3607a477fdef7402bc742abad5df9c51 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ui.empty-state','data' => ['icon' => 'fa-regular fa-newspaper','title' => 'Latest posts will load here','message' => 'No placeholder articles are shown until real editorial content is available.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('ui.empty-state'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['icon' => 'fa-regular fa-newspaper','title' => 'Latest posts will load here','message' => 'No placeholder articles are shown until real editorial content is available.']); ?>
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
    </section>

    <section class="section-block why-section">
        <div class="container">
            <?php if (isset($component)) { $__componentOriginal4deb4cea19edae5a1609e7abdfbe928b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.section-heading','data' => ['eyebrow' => 'Why choose us','title' => 'Built for users, search engines, and monetization','description' => 'The homepage structure balances helpful discovery, crawlable content areas, and future ad placements.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Why choose us','title' => 'Built for users, search engines, and monetization','description' => 'The homepage structure balances helpful discovery, crawlable content areas, and future ad placements.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b)): ?>
<?php $attributes = $__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b; ?>
<?php unset($__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4deb4cea19edae5a1609e7abdfbe928b)): ?>
<?php $component = $__componentOriginal4deb4cea19edae5a1609e7abdfbe928b; ?>
<?php unset($__componentOriginal4deb4cea19edae5a1609e7abdfbe928b); ?>
<?php endif; ?>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="benefit-card reveal-up">
                        <i class="fa-solid fa-sitemap"></i>
                        <h3>Scalable Structure</h3>
                        <p>Clean Blade components make future categories, tools, reviews, and blog pages easier to maintain.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card reveal-up reveal-delay-1">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                        <h3>SEO Foundation</h3>
                        <p>Semantic sections, metadata, canonical support, and crawl-friendly page composition are included.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="benefit-card reveal-up reveal-delay-2">
                        <i class="fa-solid fa-rectangle-ad"></i>
                        <h3>AdSense Ready</h3>
                        <p>The layout can support ad units later without compromising the first mobile experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="section-block section-muted">
        <div class="container">
            <?php if (isset($component)) { $__componentOriginal4deb4cea19edae5a1609e7abdfbe928b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.section-heading','data' => ['eyebrow' => 'Questions','title' => 'Frequently Asked Questions','description' => 'Helpful FAQ content gives users quick answers and creates a clear location for future schema markup.']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.section-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => 'Questions','title' => 'Frequently Asked Questions','description' => 'Helpful FAQ content gives users quick answers and creates a clear location for future schema markup.']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b)): ?>
<?php $attributes = $__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b; ?>
<?php unset($__attributesOriginal4deb4cea19edae5a1609e7abdfbe928b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4deb4cea19edae5a1609e7abdfbe928b)): ?>
<?php $component = $__componentOriginal4deb4cea19edae5a1609e7abdfbe928b; ?>
<?php unset($__componentOriginal4deb4cea19edae5a1609e7abdfbe928b); ?>
<?php endif; ?>

            <div class="accordion faq-accordion" id="homeFaq">
                <?php $__currentLoopData = [
                ['What is AI TOOLS?', 'AI TOOLS is being built as a directory for AI software, free online utilities, guides, reviews, and productivity resources.'],
                ['Are the tools free?', 'The site will include free online tools and AI tool listings. Pricing details should come from real tool records once the database exists.'],
                ['Can I submit an AI tool?', 'A submission workflow can be added later as part of the directory and admin panel tasks.'],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button <?php echo e($index === 0 ? '' : 'collapsed'); ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?php echo e($index); ?>" aria-expanded="<?php echo e($index === 0 ? 'true' : 'false'); ?>" aria-controls="faq<?php echo e($index); ?>">
                            <?php echo e($faq[0]); ?>

                        </button>
                    </h3>
                    <div id="faq<?php echo e($index); ?>" class="accordion-collapse collapse <?php echo e($index === 0 ? 'show' : ''); ?>" data-bs-parent="#homeFaq">
                        <div class="accordion-body">
                            <?php echo e($faq[1]); ?>

                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <section id="newsletter" class="newsletter-section">
        <div class="container">
            <div class="newsletter-wrap reveal-up">
                <div>
                    <p class="section-eyebrow">Newsletter</p>
                    <h2>Get useful AI tool updates.</h2>
                    <p>Join the launch list for new tools, practical guides, and product updates.</p>
                </div>
                <form class="newsletter-form" action="#" method="POST">
                    <?php echo csrf_field(); ?>
                    <label class="visually-hidden" for="newsletter-email">Email address</label>
                    <input id="newsletter-email" type="email" name="email" placeholder="Enter your email" required>
                    <button type="submit">Notify Me</button>
                </form>
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
<?php endif; ?><?php /**PATH C:\Users\admin\Desktop\ai-tools\resources\views/pages/home.blade.php ENDPATH**/ ?>