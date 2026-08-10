<x-layouts.app title="Page Not Found - AI TOOLS" description="The page you are looking for could not be found on AI TOOLS." robots="noindex, follow">
    <section class="error-page">
        <div class="container">
            <div class="error-panel reveal-up">
                <span class="page-hero-icon"><i class="fa-regular fa-compass"></i></span>
                <p class="section-eyebrow">404 Error</p>
                <h1>Page Not Found</h1>
                <p>The page may have moved, the link may be incorrect, or the resource has not been created yet.</p>
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    <a href="{{ route('home') }}" class="btn btn-primary ai-btn-primary">Go Home</a>
                    <a href="{{ route('search.index') }}" class="btn btn-outline-primary">Search AI TOOLS</a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
