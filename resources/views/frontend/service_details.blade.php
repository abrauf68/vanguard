@extends('frontend.layouts.master')

@section('title', $service->name)
@section('meta_description', '')
@section('meta_keywords', '')

<!-- Page Title -->
@section('page_title')
    @include('frontend.layouts.partials.page_title', [
        'title' => 'Services',
        'description' =>
            'Discover the range of solutions we offer to help your business grow, streamline operations, and reach new heights.',
        'breadcrumbs' => [
            ['name' => 'Home', 'url' => route('frontend.home')],
            ['name' => 'Services', 'url' => route('frontend.services')],
            ['name' => $service->name],
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
                        @if (isset($allServices) && count($allServices) > 0)
                            @foreach ($allServices as $serv)
                                <a href="{{ route('frontend.services', $serv->slug) }}"
                                    class="{{ $serv->id == $service->id ? 'active' : '' }}">{{ $serv->name }}</a>
                            @endforeach
                        @endif
                    </div>

                    <h4>{{ $service->meta_title }}</h4>
                    <p>{{ $service->meta_description }}</p>
                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset($service->main_image) }}" alt="{{ $service->name }}"
                        class="img-fluid services-img">
                    {!! $service->details !!}
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->
    
    @include('frontend.sections.quote')
@endsection

@section('script')
    {!! NoCaptcha::renderJs() !!}
@endsection