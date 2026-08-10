<x-layouts.app
    title="AI TOOLS - Best AI Tools and Free Online Tools Directory"
    description="Explore a curated AI tools directory, free online tools, practical guides, categories, reviews, and search-friendly resources for modern workflows.">
    @if (session('message'))
    <div class="container pt-3">
        <div class="alert alert-info mb-0">{{ session('message') }}</div>
    </div>
    @endif

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
            <x-sections.section-heading
                eyebrow="Browse by need"
                title="AI Tool Categories"
                description="Browse real AI tool categories from the database." />

            <div class="row g-3">
                @forelse ($categories as $category)
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ route('category.show', $category->slug) }}" class="category-card reveal-up">
                        <i class="fa-solid fa-arrow-trend-up"></i>

                        <span>{{ $category->name }}</span>

                        <small class="d-block text-muted">
                            {{ $category->description }}
                        </small>
                    </a>
                </div>
                @empty
                <div class="col-12">
                    <div class="alert alert-warning">
                        No data found.
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="ai-tools" class="section-block section-muted">
        <div class="container">
            <x-sections.section-heading
                eyebrow="Curated discovery"
                title="Featured AI Tools"
                description="Popular AI tools from the database, ready to open in a new tab." />

            <div class="row g-4">
                @forelse ($featuredTools as $tool)
                <div class="col-md-6 col-xl-4">
                    <div class="card h-100 border-0 shadow-sm tool-directory-card">
                        <div class="card-body d-flex flex-column">
                            <h3 class="h5">{{ $tool->name }}</h3>
                            <p class="text-muted flex-grow-1">{{ $tool->short_description ?? $tool->description }}</p>
                            <a href="{{ route('tool.show', $tool->id) }}" class="btn btn-primary" target="_blank" rel="noopener">Open Tool</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <x-ui.empty-state icon="fa-solid fa-star" title="Coming Soon" message="Featured tools will appear here shortly." />
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="online-tools" class="section-block">
        <div class="container">
            <x-sections.section-heading
                eyebrow="Free utilities"
                title="Popular Online Tools"
                description="Useful online tools with working external links." />

            <div class="row g-4">
                @forelse ($onlineTools as $tool)
                <div class="col-md-6 col-xl-4">
                    <div class="card h-100 border-0 shadow-sm tool-directory-card">
                        <div class="card-body d-flex flex-column">
                            <span class="directory-card-icon mb-3"><i class="{{ $tool->icon ?? 'fa-solid fa-toolbox' }}"></i></span>
                            <h3 class="h5">{{ $tool->name }}</h3>
                            <p class="text-muted flex-grow-1">{{ $tool->short_description ?? $tool->description }}</p>
                            <a href="{{ route('tool.show', $tool->id) }}" class="btn btn-primary" target="_blank" rel="noopener">Open Tool</a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <x-ui.empty-state icon="fa-solid fa-toolbox" title="Coming Soon" message="Online tools will appear here shortly." />
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="blog" class="section-block section-muted">
        <div class="container">
            <x-sections.section-heading
                eyebrow="Learn and compare"
                title="Latest Blogs"
                description="Prepared for SEO articles, comparisons, tutorials, and tool roundups once the blog module is added." />

            <x-ui.empty-state
                icon="fa-regular fa-newspaper"
                title="Latest posts will load here"
                message="No placeholder articles are shown until real editorial content is available." />
        </div>
    </section>

    <section class="section-block why-section">
        <div class="container">
            <x-sections.section-heading
                eyebrow="Why choose us"
                title="Built for users, search engines, and monetization"
                description="The homepage structure balances helpful discovery, crawlable content areas, and future ad placements." />

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
            <x-sections.section-heading
                eyebrow="Questions"
                title="Frequently Asked Questions"
                description="Helpful FAQ content gives users quick answers and creates a clear location for future schema markup." />

            <div class="accordion faq-accordion" id="homeFaq">
                @foreach ([
                ['What is AI TOOLS?', 'AI TOOLS is being built as a directory for AI software, free online utilities, guides, reviews, and productivity resources.'],
                ['Are the tools free?', 'The site will include free online tools and AI tool listings. Pricing details should come from real tool records once the database exists.'],
                ['Can I submit an AI tool?', 'A submission workflow can be added later as part of the directory and admin panel tasks.'],
                ] as $index => $faq)
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="faq{{ $index }}">
                            {{ $faq[0] }}
                        </button>
                    </h3>
                    <div id="faq{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" data-bs-parent="#homeFaq">
                        <div class="accordion-body">
                            {{ $faq[1] }}
                        </div>
                    </div>
                </div>
                @endforeach
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
                    @csrf
                    <label class="visually-hidden" for="newsletter-email">Email address</label>
                    <input id="newsletter-email" type="email" name="email" placeholder="Enter your email" required>
                    <button type="submit">Notify Me</button>
                </form>
            </div>
        </div>
    </section>
</x-layouts.app>