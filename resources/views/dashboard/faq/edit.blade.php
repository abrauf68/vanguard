@extends('layouts.master')

@section('title', __('Edit FAQ'))

@section('css')
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.faqs.index') }}">{{ __('FAQs') }}</a></li>
    <li class="breadcrumb-item active">{{ __('Edit') }}</li>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-6">
            <!-- Account -->
            <div class="card-body pt-4">
                <form method="POST" action="{{ route('dashboard.faqs.update', $faq->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row p-5">
                        <h3>{{ __('Edit FAQ') }}</h3>
                        <div class="mb-4 col-md-6">
                            <label for="question" class="form-label">{{ __('Question') }}</label><span
                                class="text-danger">*</span>
                            <input class="form-control @error('question') is-invalid @enderror" type="text" id="question"
                                name="question" required value="{{ old('question', $faq->question) }}" autofocus />
                            @error('question')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-4 col-md-12">
                            <label for="answer" class="form-label">{{ __('Answer') }}</label><span
                                class="text-danger">*</span>
                            <textarea class="form-control @error('answer') is-invalid @enderror"
                                id="answer" name="answer" required
                                cols="20" rows="5">{{ old('answer', $faq->answer) }}</textarea>
                            @error('answer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-3">{{ __('Update FAQ') }}</button>
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
