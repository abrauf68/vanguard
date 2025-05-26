<!-- Services Section -->
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span>Our Services<br></span>
        <h2>Our Services</h2>
        <p>Providing the best car transportation and related services tailored to your needs.</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">
            @if (isset($services) && count($services) > 0)
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <a href="{{ route('frontend.services', $service->slug) }}">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{ asset($service->meta_image) }}" alt="{{ $service->name }}"
                                        class="img-fluid">
                                </div>
                                <h3>{{ $service->name }}</h3>
                                <p>{{ $service->meta_description }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif

        </div>

    </div>

</section>
<!-- /Services Section -->
