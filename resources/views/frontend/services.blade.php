@extends('frontend.layouts.master')

@section('title', 'Services')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')
@endsection

<!-- Page Title -->
@section('page_title')
    @include('frontend.layouts.partials.page_title', [
        'title' => 'Services',
        'description' =>
            'Discover the range of solutions we offer to help your business grow, streamline operations, and reach new heights.',
        'breadcrumbs' => [
            ['name' => 'Home', 'url' => route('frontend.home')],
            ['name' => 'Services'],
        ],
    ])
@endsection
<!-- End Page Title -->

@section('content')
    <!-- Featured Services Section -->
    @include('frontend.sections.feature_services')
    <!-- /Featured Services Section -->

    <!-- Services Section -->
    @include('frontend.sections.services')
    <!-- /Services Section -->

    <!-- Features Section -->
    @include('frontend.sections.features')
    <!-- /Features Section -->

    <!-- Testimonials Section -->
    @include('frontend.sections.testimonials')
    <!-- /Testimonials Section -->

    <!-- Faq Section -->
    @include('frontend.sections.faqs')
    <!-- /Faq Section -->
@endsection

@section('script')
@endsection
