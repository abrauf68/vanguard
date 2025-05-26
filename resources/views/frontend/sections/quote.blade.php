<!-- Get A Quote Section -->
<section id="get-a-quote" class="get-a-quote section">
    <div class="container">
        <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-5 quote-bg" style="background-image: url({{ asset('frontAssets/img/quote-bg.jpg') }});">
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                <form action="{{ route('frontend.get-a-quote.submit') }}" method="post" class="php-email-form">
                    @csrf
                    <h3>Request a Quote</h3>
                    <p>Please fill out the form below with your shipment and contact details. We’ll get back to you
                        shortly.</p>

                    <div class="row gy-4">

                        <div class="col-md-12">
                            <input type="text" name="pickup_location" class="form-control @error('pickup_location') is-invalid @enderror" placeholder="Enter Pickup Location"
                                required id="pickup_location" value="{{ old('pickup_location') }}">
                            @error('pickup_location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input type="text" name="delivery_location" class="form-control @error('delivery_location') is-invalid @enderror" placeholder="Enter Delivery Location"
                                required id="delivery_location" value="{{ old('delivery_location') }}">
                            @error('delivery_location')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input type="text" name="zip_code" class="form-control @error('zip_code') is-invalid @enderror" placeholder="Enter Zip Code"
                                 id="zip_code" value="{{ old('zip_code') }}">
                            @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- <div class="col-md-6">
                            <input type="text" name="weight" class="form-control @error('weight') is-invalid @enderror" placeholder="Total Weight (kg)"
                                 id="weight" value="{{ old('weight') }}">
                            @error('weight')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="dimension" class="form-control @error('dimension') is-invalid @enderror" placeholder="Dimensions (cm)"
                                 id="dimension" value="{{ old('dimension') }}">
                            @error('dimension')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}

                        <div class="col-md-12">
                            <textarea class="form-control @error('delivery_details') is-invalid @enderror" id="delivery_details" name="delivery_details" rows="6" placeholder="Enter Delivery Details" required>{{ old('delivery_details') }}</textarea>
                            @error('delivery_details')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <h4>Your Personal Details</h4>
                        </div>

                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name"
                                required id="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Your Email"
                                required id="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone"
                                required id="phone" value="{{ old('phone') }}">
                            @error('phone')
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

                        <div class="col-12 text-center">
                            <button type="submit">CTA, Get a Quote</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Quote Form -->

        </div>
    </div>
</section>
<!-- /Get A Quote Section -->
