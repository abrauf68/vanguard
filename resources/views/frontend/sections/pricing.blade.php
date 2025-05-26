<!-- Pricing Section -->
<section id="pricing" class="pricing section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <span>Pricing</span>
        <h2>Choose Your Plan</h2>
        <p>Select the transport package that best fits your vehicle and budget.</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">
            @php $delay = 100; @endphp
            @foreach (\App\Helpers\Helper::getPackages() as $package)
                <div class="col-lg-4 d-flex" data-aos="zoom-in" data-aos-delay="{{ $delay }}">
                    <div
                        class="pricing-item d-flex flex-column justify-content-between w-100 {{ $loop->iteration == 2 ? 'featured' : '' }}">
                        <div>
                            <h3>{{ $package->name }}</h3>
                            <h4>{{ \App\Helpers\Helper::formatCurrency($package->price) }}<span> / {{ $package->type }}</span></h4>
                            {{-- <h4><sup>$</sup>{{ $package->price }}<span> / {{ $package->type }}</span></h4> --}}
                            <ul>
                                @if (isset($package->packageItems) && count($package->packageItems) > 0)
                                    @foreach ($package->packageItems as $item)
                                        <li class="{{ $item->item_type == 'crossed' ? 'na' : '' }}">
                                            <i class="fas {{ $item->item_type == 'crossed' ? 'fa-times' : 'fa-check' }}"></i>
                                            <span>{{ $item->item }}</span>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                        <div class="mt-auto pt-3">
                            <a href="{{route('frontend.get-a-quote')}}" class="buy-btn w-100 text-center">Get Quote</a>
                        </div>
                    </div>
                </div>

                @php $delay += 100; @endphp
            @endforeach
        </div>
    </div>
</section>
<!-- /Pricing Section -->
