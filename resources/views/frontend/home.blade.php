@extends('frontend.layouts.master')

@section('title', 'Home')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')
    <style>
        .hero {
            position: relative;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            z-index: -2;
        }

        /* Shade Overlay */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(14, 29, 52, 0.6);
            z-index: 1;
        }

        /* Form Container */
        .form-search {
            background: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(12px) !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            border-radius: 15px !important;
            padding: 2rem !important;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1) !important;
        }

        /* Input Fields */
        .form-search .form-control {
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.6) !important; /* Stronger white border */
            border-radius: 10px !important;
            padding: 12px 20px !important;
            transition: all 0.3s ease !important;
            color: #fff !important; /* White text */
        }

        .form-search .form-control:focus {
            background: rgba(255, 255, 255, 0.08) !important;
            border: 1px solid #ffffff !important; /* Pure white border */
            box-shadow: 0 0 8px rgba(255, 255, 255, 0.5) !important; /* Nice glow */
            outline: none !important;
        }

        /* Placeholder Text */
        .form-search .form-control::placeholder {
            color: #ffffff !important; /* White placeholder */
            opacity: 0.7 !important;
        }

        /* Submit Button */
        .form-search .btn-primary {
            transition: all 0.3s ease !important;
            color: #fff !important;
            background: #0d42ff !important;
            font-size: 14px !important;
            padding: 8px 25px !important;
            margin: 0 0 0 30px !important;
            border-radius: 4px !important;
            border: none !important;
        }

        .form-search .btn-primary:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 5px 15px rgba(13, 66, 255, 0.5) !important; /* Brighter hover */
        }

        /* Error Messages */
        .form-search .invalid-feedback {
            background: rgba(255, 0, 0, 0.1) !important;
            color: #ff4444 !important;
            padding: 8px 12px !important;
            border-radius: 6px !important;
            margin-top: -10px !important;
            margin-bottom: 10px !important;
            border: 1px solid rgba(255, 68, 68, 0.2) !important;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .form-search {
                padding: 1.5rem !important;
            }

            .form-search .form-control {
                padding: 10px 15px !important;
            }

            .form-search .btn-primary {
                padding: 12px 20px !important;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <video class="hero-bg" autoplay muted loop playsinline preload="auto">
            <source src="{{ asset('frontAssets/video/bg_video3.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <!-- Overlay Shade -->
        <div class="overlay"></div>

        {{-- <img src="{{ asset('frontAssets/img/world-dotted-map.png') }}" alt="" class="hero-bg" data-aos="fade-in"> --}}

        <div class="container">
            <div class="row gy-4 d-flex justify-content-between">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h2 data-aos="fade-up">Reliable Car Transport You Can Count On</h2>
                    <p data-aos="fade-up" data-aos-delay="100">
                    Experience hassle-free vehicle delivery with our trusted car shipping solutions. From doorstep pickup to on-time drop-off, we ensure every mile is handled with care, precision, and dedication. Join thousands who rely on us for secure, smooth, and stress-free transport every time.
                    </p>


                    <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="2"
                                    class="purecounter"></span>
                                <p>Deliveries</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="2"
                                    class="purecounter"></span>
                                <p>Cities</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="2"
                                    class="purecounter"></span>
                                <p>Punctuality</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="stats-item text-center w-100 h-100">
                                <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="2"
                                    class="purecounter"></span>
                                <p>Experts</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <form action="{{ route('frontend.get-a-quote.submit') }}" method="post" class="form-search mb-3" data-aos="fade-up" data-aos-delay="200">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <input type="text" name="name" autofocus
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Your Name"
                                    required id="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-2">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" placeholder="Your Email" required id="email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-2">
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" placeholder="Phone" required id="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-2">
                                <input type="text" name="pickup_location"
                                    class="form-control @error('pickup_location') is-invalid @enderror" placeholder="Pickup"
                                    required id="pickup_location" value="{{ old('pickup_location') }}">
                                @error('pickup_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-2">
                                <input type="text" name="delivery_location"
                                    class="form-control @error('delivery_location') is-invalid @enderror"
                                    placeholder="Drop-off" required id="delivery_location"
                                    value="{{ old('delivery_location') }}">
                                @error('delivery_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-2">
                                <input type="text" name="zip_code"
                                    class="form-control @error('zip_code') is-invalid @enderror" placeholder="Zip Code"
                                    required id="zip_code" value="{{ old('zip_code') }}">
                                @error('zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit Quote</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>

    </section>
    <!-- /Hero Section -->

    <!-- Featured Services Section -->
    @include('frontend.sections.feature_services')
    <!-- /Featured Services Section -->


    @include('frontend.sections.about')


    <!-- Services Section -->
    @include('frontend.sections.services')
    <!-- /Services Section -->


    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="{{ asset('frontAssets/img/cta-bg.jpg') }}" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Get Your Vehicle Delivered Safely</h3>
                        <p>We provide fast, reliable, and secure car transportation services nationwide. Whether you're
                            moving, buying, or selling a vehicle, we've got you covered. Trust us for the best in the
                            business.</p>
                        <a class="cta-btn" href="{{ route('frontend.get-a-quote') }}">Book Your Shipment Now</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Call To Action Section -->


    <!-- Features Section -->
    @include('frontend.sections.features')
    <!-- /Features Section -->

    @include('frontend.sections.pricing')
    @include('frontend.sections.testimonials')
    @include('frontend.sections.faqs')
    <div data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 270px;" src="{{ \App\Helpers\Helper::getGoogleAddress() }}"
            frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection

@section('script')
@endsection
