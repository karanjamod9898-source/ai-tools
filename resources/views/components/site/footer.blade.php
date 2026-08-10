<footer class="site-footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <a class="footer-brand d-inline-flex align-items-center gap-2 mb-3" href="{{ route('home') }}">
                    <span class="brand-mark"><i class="fa-solid fa-wand-magic-sparkles"></i></span>
                    <span class="brand-text">AI TOOLS</span>
                </a>
                <p class="footer-copy mb-0">
                    A curated destination for discovering useful AI software and practical free online tools.
                </p>
            </div>

            <div class="col-6 col-lg-2">
                <h2 class="footer-title">Explore</h2>
                <ul class="footer-links">
                    <li><a href="{{ route('categories.index') }}">Categories</a></li>
                    <li><a href="{{ route('tools.index') }}">AI Tools</a></li>
                    <li><a href="{{ route('online-tools.index') }}">Online Tools</a></li>
                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                </ul>
            </div>

            <div class="col-6 col-lg-2">
                <h2 class="footer-title">Company</h2>
                <ul class="footer-links">
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Submit Tool</a></li>
                </ul>
            </div>

            <div class="col-6 col-lg-2">
                <h2 class="footer-title">Legal</h2>
                <ul class="footer-links">
                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}">Terms</a></li>
                    <li><a href="#">Disclaimer</a></li>
                    <li><a href="#">Sitemap</a></li>
                </ul>
            </div>

            <div class="col-6 col-lg-2">
                <h2 class="footer-title">Follow</h2>
                <div class="footer-socials">
                    <a href="#" aria-label="Follow AI TOOLS on X"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#" aria-label="Follow AI TOOLS on Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Follow AI TOOLS on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="mb-0">&copy; {{ date('Y') }} AI TOOLS. All rights reserved.</p>
            <p class="mb-0">Built for search discovery, useful comparisons, and responsible monetization.</p>
        </div>
    </div>
</footer>
