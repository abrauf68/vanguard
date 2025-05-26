@extends('layouts.master')

@section('title', __('Testimonials'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item active">{{ __('Testimonials') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Testimonial List Table -->
        <div class="card">
            <div class="card-header">
                @canany(['create service'])
                    <a href="{{route('dashboard.testimonials.create')}}" class="add-new btn btn-primary waves-effect waves-light">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                            class="d-none d-sm-inline-block">{{ __('Add New Testimonial') }}</span>
                    </a>
                @endcan
            </div>
            <div class="card-datatable table-responsive">
                <table class="datatables-users table border-top custom-datatables">
                    <thead>
                        <tr>
                            <th>{{ __('Sr.') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Image') }}</th>
                            <th>{{ __('Position') }}</th>
                            <th>{{ __('Rating') }}</th>
                            <th>{{ __('Created Date') }}</th>
                            <th>{{ __('Status') }}</th>
                            @canany(['delete testimonial', 'update testimonial'])<th>{{ __('Action') }}</th>@endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials as $index => $testimonial)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $testimonial->name }}</td>
                                <td>
                                    @if (isset($testimonial->image))
                                        <img src="{{ asset($testimonial->image) }}" alt="{{ $testimonial->name }}"
                                            height="35px" width="35px">
                                    @else
                                        {{ __('No Image') }}
                                    @endif
                                </td>
                                <td>{{ $testimonial->position }}</td>
                                <td>{{ $testimonial->review_count }}</td>
                                <td>{{ $testimonial->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <span
                                        class="badge me-4 bg-label-{{ $testimonial->is_active == 'active' ? 'success' : 'danger' }}">{{ ucfirst($testimonial->is_active) }}</span>
                                </td>
                                @canany(['delete testimonial', 'update testimonial'])
                                    <td class="d-flex">
                                        @canany(['delete testimonial'])
                                            <form action="{{ route('dashboard.testimonials.destroy', $testimonial->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a href="#" type="submit"
                                                    class="btn btn-icon btn-text-danger waves-effect waves-light rounded-pill delete-record delete_confirmation"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Delete Testimonial') }}">
                                                    <i class="ti ti-trash ti-md"></i>
                                                </a>
                                            </form>
                                        @endcan
                                        @canany(['update testimonial'])
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.testimonials.edit', $testimonial->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ __('Edit Testimonial') }}">
                                                    <i class="ti ti-edit ti-md"></i>
                                                </a>
                                            </span>
                                            <span class="text-nowrap">
                                                <a href="{{ route('dashboard.testimonials.status.update', $testimonial->id) }}"
                                                    class="btn btn-icon btn-text-primary waves-effect waves-light rounded-pill me-1"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="{{ $testimonial->is_active == 'active' ? __('Deactivate Testimonial') : __('Activate Testimonial') }}">
                                                    @if ($testimonial->is_active == 'active')
                                                        <i class="ti ti-toggle-right ti-md text-success"></i>
                                                    @else
                                                        <i class="ti ti-toggle-left ti-md text-danger"></i>
                                                    @endif
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
