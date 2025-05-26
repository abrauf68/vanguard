<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section">

    <div class="container">

        <div class="row gy-4">

            @foreach (\App\Helpers\Helper::getFeatures() as $feature)
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><i class="fa-solid {{ $feature->icon }}"></i></div>
                    <div>
                        <h4 class="title">{{ $feature->name }}</h4>
                        <p class="description">{{ $feature->meta_description }}</p>
                        <a href="{{route('frontend.features', $feature->slug)}}" class="readmore stretched-link"><span>Learn More</span><i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach
            <!-- End Service Item -->

        </div>

    </div>

</section>
<!-- /Featured Services Section -->
