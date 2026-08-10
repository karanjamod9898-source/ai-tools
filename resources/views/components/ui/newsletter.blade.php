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
