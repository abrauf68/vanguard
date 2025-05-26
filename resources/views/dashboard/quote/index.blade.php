@extends('layouts.master')

@section('title', __('Quotes'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item active">{{ __('Quotes') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Quotes List Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top custom-datatables">
                    <thead>
                        <tr>
                            <th>{{ __('Sr.') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Pickup') }}</th>
                            <th>{{ __('Delivery') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Created Date') }}</th>
                            @canany(['delete quote', 'view quote'])<th>{{ __('Action') }}</th>@endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quotes as $index => $quote)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $quote->name }}</td>
                                <td>{{ $quote->pickup_location }}</td>
                                <td>{{ $quote->delivery_location }}</td>
                                <td>{{ $quote->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <span class="badge me-4 bg-label-{{
                                        $quote->status == 'pending' ? 'warning' :
                                        ($quote->status == 'in_progress' ? 'info' :
                                        ($quote->status == 'approved' ? 'success' :
                                        ($quote->status == 'rejected' ? 'danger' : 'primary')))
                                    }}">
                                        {{ ucfirst(str_replace('_', ' ', $quote->status)) }}
                                    </span>
                                </td>
                                @canany(['delete quote', 'view quote'])
                                    <td class="d-flex">
                                        @canany(['delete quote'])
                                            <form action="{{ route('dashboard.quotes.destroy', $quote->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="#" type="submit"
                                                    class="btn btn-icon btn-text-danger waves-effect waves-light rounded-pill delete-record delete_confirmation"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Delete Quote') }}">
                                                    <i class="ti ti-trash ti-md"></i>
                                                </a>
                                            </form>
                                        @endcan
                                        @canany(['view quote'])
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.quotes.show', $quote->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('View Quote Details') }}">
                                                    <i class="ti ti-eye ti-md"></i>
                                                </a>
                                            </span>
                                        @endcan
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- <script src="{{asset('assets/js/app-user-list.js')}}"></script> --}}
    <script>
        $(document).ready(function() {
            //
        });
    </script>
@endsection
