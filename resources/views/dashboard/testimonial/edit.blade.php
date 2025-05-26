@extends('layouts.master')

@section('title', __('Edit Testimonial'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.testimonials.index') }}">{{ __('Testimonials') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Edit') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.testimonials.update', $testimonial->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row p-5">
                        <h3>{{ __('EditTestimonial') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="name" class="form-label">{{ __('Name') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                name="name" required value="{{ old('name', $testimonial->name) }}" placeholder="{{ __('Enter user name') }}" autofocus />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="image" class="form-label">{{ __('Image') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                                name="image" accept="image/*" />
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="position" class="form-label">{{ __('Position') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('position') is-invalid @enderror" type="text" id="position"
                                name="position" value="{{ old('position', $testimonial->position) }}" required placeholder="{{ __('Enter user position') }}" />
                            @error('position')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-6">
                            <label for="review_count" class="form-label">{{ __('Rating') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('review_count') is-invalid @enderror" type="number" id="review_count"
                                name="review_count" min="0" max="5" value="{{ old('review_count', $testimonial->review_count) }}" required placeholder="{{ __('Enter rating from 0 to 5') }}" />
                            @error('review_count')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="review" class="form-label">{{ __('Review') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('review') is-invalid @enderror"
                                id="review" name="review" required
                                placeholder="{{ __('Enter user review') }}"  cols="20" rows="5">{{ old('review', $testimonial->review) }}</textarea>
                            @error('review')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Update Testimonial') }}</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            //
        });
    </script>


@endsection
