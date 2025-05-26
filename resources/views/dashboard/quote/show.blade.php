@extends('layouts.master')

@section('title', __('View Quote'))

@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.quotes.index') }}">{{ __('Quotes') }}</a></li>
    <li class="breadcrumb-item active">{{ __('View') }}</li>
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">{{ __('Quote Details') }}</h5>
                <div>
                    <div class="position-relative d-inline-block">
                        <button id="status-btn"
                            class="btn btn-sm
                            @if ($quote->status == 'pending') btn-warning
                            @elseif($quote->status == 'in_progress') btn-info
                            @elseif($quote->status == 'approved') btn-success
                            @elseif($quote->status == 'rejected') btn-danger
                            @elseif($quote->status == 'completed') btn-primary @endif">
                            {{ ucfirst(str_replace('_', ' ', $quote->status)) }}
                        </button>

                        {{-- Real Select (initially hidden, shows on button click) --}}
                        <select id="status-select" class="form-select form-select-sm mt-1"
                            style="position: absolute; top: 100%; left: 0; display: none; min-width: 150px;">
                            @foreach (['pending', 'in_progress', 'approved', 'rejected', 'completed'] as $status)
                                <option value="{{ $status }}" @selected($quote->status == $status)>
                                    {{ ucfirst(str_replace('_', ' ', $status)) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <a href="{{ route('dashboard.quotes.index') }}" class="btn btn-sm btn-outline-primary">
                        <i class="ti ti-arrow-back"></i> {{ __('Back to List') }}
                    </a>
                </div>
            </div>
            <div class="card-body">

                {{-- Shipment Details --}}
                <h6 class="text-uppercase text-muted fw-bold border-bottom pb-1 mb-3">{{ __('Shipment Details') }}</h6>
                <dl class="row">
                    <dt class="col-sm-3">{{ __('Pickup Location') }}</dt>
                    <dd class="col-sm-9">{{ $quote->pickup_location }}</dd>

                    <dt class="col-sm-3">{{ __('Delivery Location') }}</dt>
                    <dd class="col-sm-9">{{ $quote->delivery_location }}</dd>

                    <dt class="col-sm-3">{{ __('Zip Code') }}</dt>
                    <dd class="col-sm-9">{{ $quote->zip_code ?? '-' }}</dd>

                    {{-- <dt class="col-sm-3">{{ __('Weight (kg)') }}</dt>
                    <dd class="col-sm-9">{{ $quote->weight ?? '-' }}</dd>

                    <dt class="col-sm-3">{{ __('Dimension') }}</dt>
                    <dd class="col-sm-9">{{ $quote->dimension ?? '-' }}</dd> --}}

                    <dt class="col-sm-3">{{ __('Details') }}</dt>
                    <dd class="col-sm-9">{{ $quote->delivery_details ?? '-' }}</dd>

                    <dt class="col-sm-3">{{ __('Created At') }}</dt>
                    <dd class="col-sm-9">{{ $quote->created_at->format('d M Y, h:i A') }}</dd>
                </dl>

                {{-- User Details --}}
                <h6 class="text-uppercase text-muted fw-bold border-bottom pb-1 mt-4 mb-3">{{ __('User Details') }}</h6>
                <dl class="row">
                    <dt class="col-sm-3">{{ __('Name') }}</dt>
                    <dd class="col-sm-9">{{ $quote->name }}</dd>

                    <dt class="col-sm-3">{{ __('Email') }}</dt>
                    <dd class="col-sm-9">{{ $quote->email }}</dd>

                    <dt class="col-sm-3">{{ __('Phone') }}</dt>
                    <dd class="col-sm-9">{{ $quote->phone }}</dd>

                    <dt class="col-sm-3">{{ __('Message') }}</dt>
                    <dd class="col-sm-9">{{ $quote->message ?? '-' }}</dd>
                </dl>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const statusMap = {
            pending: 'btn-warning',
            in_progress: 'btn-info',
            approved: 'btn-success',
            rejected: 'btn-danger',
            completed: 'btn-primary'
        };

        $('#status-btn').on('click', function() {
            $('#status-select').show().focus();
            // Show spinner on the button
            const originalText = $(this).text(); // Store original button text
            $(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...');
            $(this).prop('disabled', true); // Disable button to prevent multiple clicks
        });

        $('#status-select').on('blur', function() {
            $(this).hide(); // hide when losing focus
        });

        $('#status-select').on('change', function() {
            const selectedStatus = $(this).val();
            const quoteId = {{ $quote->id }};

            $.ajax({
                url: "{{ route('dashboard.quotes.status.update') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    quote_id: quoteId,
                    status: selectedStatus
                },
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        const text = selectedStatus.replace('_', ' ').replace(/\b\w/g, l => l
                            .toUpperCase());
                        $('#status-btn')
                            .removeClass()
                            .addClass('btn btn-sm ' + statusMap[selectedStatus])
                            .text(text);
                    }
                    $('#status-btn').prop('disabled', false); // Enable button again
                    $('#status-select').hide();
                },
                error: function() {
                    Swal.fire({
                        title: 'Error!',
                        text: response.message,
                        icon: 'error',
                        timer: 2000,
                        showConfirmButton: false
                    });
                    $('#status-btn').html(originalText);
                    $('#status-btn').prop('disabled', false); // Enable button again
                    $('#status-select').hide();
                }
            });
        });
    </script>
@endsection
