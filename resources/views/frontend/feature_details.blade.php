@extends('frontend.layouts.master')

@section('title', $feature->name)
@section('meta_description', '')
@section('meta_keywords', '')

<!-- Page Title -->
@section('page_title')
    @include('frontend.layouts.partials.page_title', [
        'title' => 'Features',
        'description' =>
            'Discover the range of solutions we offer to help your business grow, streamline operations, and reach new heights.',
        'breadcrumbs' => [
            ['name' => 'Home', 'url' => route('frontend.home')],
            ['name' => $feature->name],
        ],
    ])
@endsection
<!-- End Page Title -->

@section('css')
@endsection

@section('content')
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="services-list">
                        @if (isset($allFeatures) && count($allFeatures) > 0)
                            @foreach ($allFeatures as $feat)
                                <a href="{{ route('frontend.features', $feat->slug) }}"
                                    class="{{ $feat->id == $feature->id ? 'active' : '' }}">{{ $feat->name }}</a>
                            @endforeach
                        @endif
                    </div>

                    <h4>{{ $feature->meta_title }}</h4>
                    <p>{{ $feature->meta_description }}</p>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset($feature->main_image) }}" alt="{{ $feature->name }}"
                        class="img-fluid services-img">
                    {!! $feature->details !!}
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

    @include('frontend.sections.quote')
@endsection

@section('script')
    {!! NoCaptcha::renderJs() !!}
@endsection
