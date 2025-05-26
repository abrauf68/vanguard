@extends('layouts.master')

@section('title', __('Edit Package'))

@section('css')
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.pricing.index') }}">{{ __('Pricing & Packages') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Edit') }}</li>
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.pricing.update', $package->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row p-5">
                        <h3>{{ __('Edit Package') }}</h3>
                        <div class="mb-4 col-md-4">
                            <label for="name" class="form-label">{{ __('Package Name') }}</label><span class="text-danger">*</span>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                name="name" required value="{{ old('name', $package->name) }}"
                                placeholder="{{ __('Enter package name') }}" autofocus />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="price" class="form-label">{{ __('Package Price') }}</label><span class="text-danger">*</span>
                            <input class="form-control @error('price') is-invalid @enderror" type="number" min="0"
                                id="price" name="price" required value="{{ old('price', $package->price) }}"
                                placeholder="{{ __('Enter package price') }}" />
                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-4">
                            <label for="type" class="form-label">{{ __('Package Type') }}</label><span class="text-danger">*</span>
                            <input class="form-control @error('type') is-invalid @enderror" type="text" id="type"
                                name="type" required value="{{ old('type', $package->type) }}"
                                placeholder="{{ __('Enter package type') }}" />
                            @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label class="form-label">{{ __('Package Items') }}</label>
                            <div id="package-items-container">
                                @foreach($package->packageItems as $item)
                                    <div class="row package-item mt-3">
                                        <div class="col-md-6">
                                            <input class="form-control" type="text" name="item[]" required value="{{ old('item[]', $item->item) }}"
                                                placeholder="{{ __('Enter package item') }}" />
                                        </div>
                                        <div class="col-md-4">
                                            <select name="item_type[]" class="select2 form-select">
                                                <option value="checked" {{ $item->item_type == 'checked' ? 'selected' : '' }}>{{ __('Checked') }}</option>
                                                <option value="crossed" {{ $item->item_type == 'crossed' ? 'selected' : '' }}>{{ __('Crossed') }}</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" class="remove-item btn btn-danger">
                                                <i class="ti ti-minus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">{{ __('Del') }}</span>
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row package-item mt-3">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="item[]" placeholder="{{ __('Enter package item') }}" />
                                    </div>
                                    <div class="col-md-4">
                                        <select name="item_type[]" class="select2 form-select">
                                            <option value="checked">{{ __('Checked') }}</option>
                                            <option value="crossed">{{ __('Crossed') }}</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" id="add-item" class="add-new btn btn-warning waves-effect waves-light">
                                            <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">{{ __('Add') }}</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Update Package') }}</button>
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
        // Initialize select2 for existing elements
        $('.select2').select2();

        // Add new package item
        $('#add-item').click(function() {
            var newItem = `
                <div class="row package-item mt-3">
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="item[]" required placeholder="{{ __('Enter package item') }}" />
                    </div>
                    <div class="col-md-4">
                        <select name="item_type[]" class="select2 form-select">
                            <option value="checked">{{ __('Checked') }}</option>
                            <option value="crossed">{{ __('Crossed') }}</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="remove-item btn btn-danger">
                            <i class="ti ti-minus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">{{ __('Del') }}</span>
                        </button>
                    </div>
                </div>
            `;
            $('#package-items-container').append(newItem); // Add the new item to the container

            // Re-initialize select2 for the newly appended select element
            $('.select2').select2();
        });

        // Remove package item
        $(document).on('click', '.remove-item', function() {
            $(this).closest('.package-item').remove(); // Remove the closest package-item div
        });
    });
</script>
@endsection
