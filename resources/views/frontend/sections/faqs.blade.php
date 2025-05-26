<!-- Faq Section -->
<section id="faq" class="faq section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span>Frequently Asked Questions</span>
        <h2>Frequently Asked Questions</h2>
        <p>Find answers to your most common questions about our car transportation services.</p>
    </div>
    <!-- End Section Title -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-container">
                    @foreach (\App\Helpers\Helper::getFaqs() as $faq)
                        <div class="faq-item {{ $loop->first ? 'faq-active' : ''}}" data-aos="fade-up"
                            data-aos-delay="{{ 200 + $loop->index * 100 }}">
                            <i style="margin-top:10px;" class="faq-icon fas fa-question-circle"></i>
                            <h3>{{ $faq->question }}</h3>
                            <div class="faq-content">
                                <p>{{ $faq->answer }}</p>
                            </div>
                            <i class="faq-toggle fas fa-chevron-right"></i>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Faq Section -->
