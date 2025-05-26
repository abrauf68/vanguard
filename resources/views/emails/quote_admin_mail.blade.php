@extends('layouts.mails.master')

@section('title', 'New Quote Submission')

@section('css')
@endsection

@section('content')
    <p>{{ __('Hi') }} <strong>Admin</strong>,</p>

    <p>You have received a new quote submission. Please find the details below:</p>

    <hr>

    <h4 style="margin-bottom: 10px;">🚚 Shipment Details</h4>
    <p><strong>Pickup Location:</strong> {{ $quote->pickup_location }}</p>
    <p><strong>Delivery Location:</strong> {{ $quote->delivery_location }}</p>
    <p><strong>Zip code:</strong> {{ $quote->zip_code }}</p>

    {{-- @if (!empty($quote->weight))
        <p><strong>Weight:</strong> {{ $quote->weight }}</p>
    @endif

    @if (!empty($quote->dimension))
        <p><strong>Dimension:</strong> {{ $quote->dimension }}</p>
    @endif --}}

    @if (!empty($quote->delivery_details))
        <p><strong>Delivery Details:</strong> {{ $quote->delivery_details }}</p>
    @endif

    <hr>

    <h4 style="margin-bottom: 10px;">👤 User Information</h4>
    <p><strong>Name:</strong> {{ $quote->name }}</p>
    <p><strong>Email:</strong> {{ $quote->email }}</p>
    <p><strong>Phone:</strong> {{ $quote->phone }}</p>

    @if (!empty($quote->message))
        <p><strong>Message:</strong> {{ $quote->message }}</p>
    @endif

    <hr>

    <p>You can respond to this email directly, or log into the admin panel for further actions and follow-up.</p>

    <a href="{{ route('dashboard') }}" class="cta-button" style="display:inline-block; padding:10px 20px; background:#007BFF; color:#fff; text-decoration:none; border-radius:5px;">Go to Dashboard</a>
@endsection

@section('script')
@endsection
