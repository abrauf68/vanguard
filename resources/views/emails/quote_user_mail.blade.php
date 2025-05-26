@extends('layouts.mails.master')

@section('title', 'Your Quote Request Has Been Received')

@section('css')
@endsection

@section('content')
    <p>{{ __('Hi') }} <strong>{{ $quote->name }}</strong>,</p>

    <p>Thank you for requesting a quote with us!</p>

    <p>We’ve successfully received your quote request for vehicle transportation from <strong>{{ $quote->pickup_location }}</strong> to <strong>{{ $quote->delivery_location }}</strong>.</p>

    <p>Our team is currently reviewing the details and will contact you shortly to provide a tailored quote or to gather more information if needed.</p>

    <p>If you have any questions in the meantime, feel free to reply to this email or <a href="{{ route('frontend.home') }}">visit our website</a> for more information.</p>

    <p>We appreciate your trust in our service and look forward to helping you with your transport needs.</p>

    <br>

    <a href="{{ route('frontend.home') }}" class="cta-button">{{ __('Visit Our Website') }}</a>
@endsection

@section('script')
@endsection

