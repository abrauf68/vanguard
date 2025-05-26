@extends('layouts.master')

@section('title', __('Create Team Member'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.team.index') }}">{{ __('Team') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Create') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.team.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row p-5">
                        <h3>{{ __('Add New Team Member') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="name" class="form-label">{{ __('Name') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                name="name" required placeholder="{{ __('Enter team member name') }}" autofocus />
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
                                name="image" required accept="image/*" />
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="designation_id" class="form-label">{{ __('Designation') }}</label><span
                                class="text-danger">*</span>
                            <select id="designation_id" name="designation_id"
                                class="select2 form-select @error('designation_id') is-invalid @enderror">
                                <option value="" selected disabled>{{ __('Select Designation') }}</option>
                                @if (isset($designations) && count($designations) > 0)
                                    @foreach ($designations as $designation)
                                        <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('designation_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="description" class="form-label">{{ __('Description') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('description') is-invalid @enderror"
                                id="description" name="description" required
                                placeholder="{{ __('Enter description') }}"  cols="20" rows="10"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label class="form-label" for="facebook">{{ __('Social Links') }}</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fab fa-facebook fa-lg"></i></span>
                                <input type="url" id="facebook" name="facebook" class="form-control @error('facebook') is-invalid @enderror"
                                    value="{{ old('facebook') }}" placeholder="i.e. https://facebook.com/" />
                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fab fa-linkedin fa-lg"></i></span>
                                <input type="url" id="linkedin" name="linkedin" class="form-control @error('linkedin') is-invalid @enderror"
                                    value="{{ old('linkedin') }}" placeholder="i.e. https://linkedin.com/" />
                                @error('linkedin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fab fa-twitter fa-lg"></i></span>
                                <input type="url" id="twitter" name="twitter" class="form-control @error('twitter') is-invalid @enderror"
                                    value="{{ old('twitter') }}" placeholder="i.e. https://x.com/" />
                                @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fab fa-instagram fa-lg"></i></span>
                                <input type="url" id="instagram" name="instagram" class="form-control @error('instagram') is-invalid @enderror"
                                    value="{{ old('instagram') }}" placeholder="i.e. https://instagram.com/" />
                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Add Team Member') }}</button>
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
