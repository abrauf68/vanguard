@extends('frontend.layouts.master')

@section('title', 'About')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')
@endsection

<!-- Page Title -->
@section('page_title')
    @include('frontend.layouts.partials.page_title', [
        'title' => 'About',
        'description' => 'Learn more about our mission, values, and the passionate team driving innovation and excellence every day.',
        'breadcrumbs' => [
            ['name' => 'Home', 'url' => route('frontend.home')],
            ['name' => 'About'],
        ],
    ])
@endsection
<!-- End Page Title -->

@section('content')
    <!-- About Section -->
    @include('frontend.sections.about')
    <!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Deliveries</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Cities</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Punctuality</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Experts</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section>
    <!-- /Stats Section -->

    <!-- Team Section -->
    @if (isset($teams) && count($teams) > 0)
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Our Team<br></span>
                <h2>Our Team</h2>
                <p>Meet the passionate individuals who drive our success with expertise, creativity, and commitment.</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row">

                    <!-- Team Members -->
                    @foreach ($teams as $team)
                        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <img src="{{ asset($team->image) }}" class="img-fluid" alt="">
                                <div class="member-content">
                                    <h4>{{ $team->name }}</h4>
                                    <span>{{ $team->designation->name }}</span>
                                    <p>{{ $team->description }}</p>
                                    <div class="social">
                                        @if ($team->twitter)
                                            <a href="{{ $team->twitter }}"><i class="bi bi-twitter-x"></i></a>
                                        @endif
                                        @if ($team->facebook)
                                            <a href="{{ $team->facebook }}"><i class="bi bi-facebook"></i></a>
                                        @endif
                                        @if ($team->instagram)
                                            <a href="{{ $team->instagram }}"><i class="bi bi-instagram"></i></a>
                                        @endif
                                        @if ($team->linkedin)
                                            <a href="{{ $team->linkedin }}"><i class="bi bi-linkedin"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End Team Members -->
                </div>
            </div>

        </section>
    @endif
    <!-- /Team Section -->


    <!-- Testimonials Section -->
    @include('frontend.sections.testimonials')
    <!-- /Testimonials Section -->

    <!-- Faq Section -->
    @include('frontend.sections.faqs')
    <!-- /Faq Section -->
@endsection

@section('script')
@endsection
