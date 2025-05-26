@extends('frontend.layouts.master')

@section('title', 'Pricing')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')
@endsection

<!-- Page Title -->
@section('page_title')
    @include('frontend.layouts.partials.page_title', [
        'title' => 'Pricing',
        'description' => 'Explore flexible and transparent pricing plans designed to meet the needs of businesses of all sizes.',
        'breadcrumbs' => [
            ['name' => 'Home', 'url' => route('frontend.home')],
            ['name' => 'Pricing'],
        ],
    ])
@endsection
<!-- End Page Title -->

@section('content')

    <!-- Pricing Section -->
        @include('frontend.sections.pricing')
    <!-- /Pricing Section -->

@endsection

@section('script')
@endsection
