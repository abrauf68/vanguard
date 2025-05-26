@extends('layouts.master')

@section('title', __('View Contact'))

@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.contacts.index') }}">{{ __('Contacts') }}</a></li>
    <li class="breadcrumb-item active">{{ __('View') }}</li>
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ __('Contact Details') }}</h5>
            <a href="{{ route('dashboard.contacts.index') }}" class="btn btn-sm btn-outline-primary">
                <i class="bx bx-arrow-back"></i> {{ __('Back to List') }}
            </a>
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">{{ __('Name') }}</dt>
                <dd class="col-sm-9">{{ $contact->name }}</dd>

                <dt class="col-sm-3">{{ __('Email') }}</dt>
                <dd class="col-sm-9">{{ $contact->email }}</dd>
                
                <dt class="col-sm-3">{{ __('Phone Number') }}</dt>
                <dd class="col-sm-9">{{ $contact->phone }}</dd>

                <dt class="col-sm-3">{{ __('Zip Code') }}</dt>
                <dd class="col-sm-9">{{ $contact->zipcode }}</dd>

                <dt class="col-sm-3">{{ __('Subject') }}</dt>
                <dd class="col-sm-9">{{ $contact->subject }}</dd>

                <dt class="col-sm-3">{{ __('Message') }}</dt>
                <dd class="col-sm-9">{{ $contact->message }}</dd>

                <dt class="col-sm-3">{{ __('Created At') }}</dt>
                <dd class="col-sm-9">{{ $contact->created_at->format('d M Y, h:i A') }}</dd>
            </dl>
        </div>
    </div>
</div>
@endsection
