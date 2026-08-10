<x-layouts.app title="Contact AI TOOLS" description="Contact the AI TOOLS team for questions, feedback, partnerships, and future submissions.">
    <x-ui.breadcrumb :items="[['label' => 'Contact']]" />
    <x-ui.page-hero eyebrow="Contact" title="Contact AI TOOLS" description="Use this frontend contact page layout for future inquiry, partnership, advertising, and submission workflows." icon="fa-regular fa-envelope" />

    <section class="section-block">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7">
                    <form class="contact-form content-panel" action="#" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" type="text" class="form-control" placeholder="Your name">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" class="form-control" placeholder="you@example.com">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" class="form-control" rows="6" placeholder="How can we help?"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary ai-btn-primary" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <x-ui.sidebar title="Contact Topics" :links="[
                        ['label' => 'Submit a tool', 'url' => route('tools.index')],
                        ['label' => 'Advertise', 'url' => route('contact')],
                        ['label' => 'Editorial feedback', 'url' => route('blog.index')],
                    ]" />
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
