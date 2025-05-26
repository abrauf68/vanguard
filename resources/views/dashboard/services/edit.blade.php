@extends('layouts.master')

@section('title', __('Edit Service'))

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{route('dashboard.company-services.index')}}">{{ __('Services') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Edit') }}</li>
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.company-services.update', $service->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row p-5">
                        <h3>{{ __('Edit Service') }}</h3>

                        <div class="mb-4 col-md-6">
                            <label for="name" class="form-label">{{ __('Service Name') }}</label><span class="text-danger">*</span>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                name="name" required value="{{ old('name', $service->name) }}" />
                            @error('name') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
                        </div>

                        <div class="mb-4 col-md-6">
                            <label for="slug" class="form-label">{{ __('Slug') }}</label><span class="text-danger">*</span>
                            <input class="form-control @error('slug') is-invalid @enderror" type="text" id="slug"
                                name="slug" required value="{{ old('slug', $service->slug) }}" />
                            @error('slug') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
                        </div>

                        <div class="mb-4 col-md-12">
                            <label for="meta_title" class="form-label">{{ __('Meta Title') }}</label><span class="text-danger">*</span>
                            <input class="form-control @error('meta_title') is-invalid @enderror" type="text"
                                id="meta_title" name="meta_title" required value="{{ old('meta_title', $service->meta_title) }}" />
                            @error('meta_title') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
                        </div>

                        <div class="mb-4 col-md-12">
                            <label for="meta_description" class="form-label">{{ __('Meta Description') }}</label><span class="text-danger">*</span>
                            <input class="form-control @error('meta_description') is-invalid @enderror" type="text"
                                id="meta_description" name="meta_description" required value="{{ old('meta_description', $service->meta_description) }}" />
                            @error('meta_description') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
                        </div>

                        <div class="mb-4 col-md-12">
                            <label for="details" class="form-label">{{ __('Details') }}</label><span class="text-danger">*</span>
                            <textarea class="form-control @error('details') is-invalid @enderror" id="details" name="details"
                                placeholder="{{ __('Enter service meta description') }}" cols="30" rows="10">{{ old('details', $service->details) }}</textarea>
                            @error('details') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
                        </div>

                        <div class="mb-4 col-md-6">
                            <label for="meta_image" class="form-label">{{ __('Meta Image') }}</label>
                            <input class="form-control @error('meta_image') is-invalid @enderror" type="file"
                                id="meta_image" name="meta_image" accept="image/*" />
                            @error('meta_image') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
                            @if($service->meta_image)
                                <img src="{{ asset($service->meta_image) }}" alt="Meta Image" class="mt-2" width="120">
                            @endif
                        </div>

                        <div class="mb-4 col-md-6">
                            <label for="main_image" class="form-label">{{ __('Main Image') }}</label>
                            <input class="form-control @error('main_image') is-invalid @enderror" type="file"
                                id="main_image" name="main_image" accept="image/*" />
                            @error('main_image') <span class="invalid-feedback"><strong>{{ $message }}</strong></span> @enderror
                            @if($service->main_image)
                                <img src="{{ asset($service->main_image) }}" alt="Main Image" class="mt-2" width="120">
                            @endif
                        </div>
                    </div>

                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Update Service') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        $(document).ready(function () {
            tinymce.init({
                selector: '#details',
                height: 500,
                plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table code help wordcount',
                toolbar: `undo redo | formatselect | fontselect fontsizeselect |
                          bold italic underline strikethrough forecolor backcolor |
                          alignleft aligncenter alignright alignjustify |
                          bullist numlist outdent indent | link image media table |
                          removeformat | code fullscreen`,
                menubar: 'file edit view insert format tools table help',
                branding: false,
                setup: function(editor) {
                    editor.on('change', function() {
                        tinymce.triggerSave();
                    });
                },
                content_style: "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }"
            });

            $('#name').on('keyup change', function () {
                let slug = $(this).val().toLowerCase()
                    .trim()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
                $('#slug').val(slug);
            });

            $('form').on('submit', function (e) {
                tinymce.triggerSave();
                const $details = $('#details');
                const detailsContent = $details.val().trim();

                $details.removeClass('is-invalid');
                $details.next('.invalid-feedback').remove();

                if (!detailsContent) {
                    e.preventDefault();
                    $details.addClass('is-invalid');
                    $details.after(`<div class="invalid-feedback">{{ __('The details field is required.') }}</div>`);
                    tinymce.get('details').focus();
                }
            });
        });
    </script>
@endsection
