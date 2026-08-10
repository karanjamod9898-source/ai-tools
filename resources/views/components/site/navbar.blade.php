<nav class="navbar navbar-expand-lg fixed-top ai-navbar" aria-label="Primary navigation">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}" aria-label="AI TOOLS home">
            <span class="brand-mark"><i class="fa-solid fa-wand-magic-sparkles"></i></span>
            <span class="brand-text">AI TOOLS</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbar" aria-controls="primaryNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="primaryNavbar">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('categories.index') }}">Categories</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('tools.index') }}">AI Tools</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('online-tools.index') }}">Online Tools</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
            </ul>

            <div class="d-flex align-items-center gap-2">
                <a href="{{ route('search.index') }}" class="btn btn-sm btn-primary ai-btn-primary">
                    <i class="fa-solid fa-magnifying-glass me-1"></i>
                    Search
                </a>
            </div>
        </div>
    </div>
</nav>
