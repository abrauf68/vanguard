@extends('frontend.layouts.master')

@section('title', 'Contact')
@section('meta_description', '')
@section('meta_keywords', '')

@section('css')
@endsection

<!-- Page Title -->
@section('page_title')
    @include('frontend.layouts.partials.page_title', [
        'title' => 'Contact',
        'description' => 'We’re here to help! Reach out to us for any questions, support, or collaboration opportunities.',
        'breadcrumbs' => [
            ['name' => 'Home', 'url' => route('frontend.home')],
            ['name' => 'Contact'],
        ],
    ])
@endsection
<!-- End Page Title -->

@section('content')
    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                <iframe style="border:0; width: 100%; height: 270px;"
                    src="{{ \App\Helpers\Helper::getGoogleAddress() }}"
                    frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <p>{{ \App\Helpers\Helper::getCompanyAddress() }}, {{ \App\Helpers\Helper::getCompanyCity() }}, {{ \App\Helpers\Helper::getCompanyCountry() }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>{{ \App\Helpers\Helper::getCompanyPhone() }}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>{{ \App\Helpers\Helper::getCompanyEmail() }}</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="col-lg-8">
                    <form action="{{ route('frontend.contact.submit') }}" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200" id="contactForm">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name"
                                    required id="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Your Email"
                                    required id="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Your Phone Number"
                                    required id="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6 ">
                                <input type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" placeholder="Your Zipcode"
                                    required id="zipcode" value="{{ old('zipcode') }}">
                                @error('zipcode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" placeholder="Subject"
                                    required id="subject" value="{{ old('subject') }}">
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="6" placeholder="Message" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 my-8">
                                @if(config('captcha.version') === 'v3')
                                    {!! \App\Helpers\Helper::renderRecaptcha('contactForm', 'register') !!}
                                @elseif(config('captcha.version') === 'v2')
                                    <div class="form-field-block">
                                        {!! app('captcha')->display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection

@section('script')
    {!! NoCaptcha::renderJs() !!}
@endsection
