<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section dark-background">

    <img src="{{ asset('frontAssets/img/testimonials-bg.jpg') }}" class="testimonials-bg" alt="Testimonials Background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                    "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                    }
                }
            </script>
            <div class="swiper-wrapper">
                @foreach (\App\Helpers\Helper::getTestimonials() as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset($testimonial->image) }}" class="testimonial-img"
                                alt="{{ $testimonial->name }}">
                            <h3>{{ $testimonial->name }}</h3>
                            <h4>{{ $testimonial->position }}</h4>

                            <div class="stars">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $testimonial->review_count)
                                        <i class="fas fa-star text-warning"></i>
                                    @else
                                        <i class="far fa-star text-warning"></i>
                                    @endif
                                @endfor
                            </div>

                            <p>
                                <i class="fas fa-quote-left quote-icon-left"></i>
                                <span>{{ $testimonial->review }}</span>
                                <i class="fas fa-quote-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>
        </div>

    </div>

</section>
<!-- /Testimonials Section -->
