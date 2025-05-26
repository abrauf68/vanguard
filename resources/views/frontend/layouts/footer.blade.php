<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">

        <div class="col-lg-5 col-md-12 footer-about">
          <a href="{{ route('frontend.home') }}" class="logo d-flex align-items-center">
            <img style="height: 80px !important;" src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="">
            <span class="sitename">{{\App\Helpers\Helper::getCompanyName()}}</span>
          </a>
          <p>{{\App\Helpers\Helper::getCompanyName()}} is your trusted partner for fast, secure, and reliable car transportation nationwide. We handle every shipment with care, ensuring your vehicle arrives in perfect condition.</p>
          <div class="social-links d-flex mt-4">
            @if (\App\Helpers\Helper::getCompanyFacebook() !== null)
                <a href="{{\App\Helpers\Helper::getCompanyFacebook()}}" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            @endif
            @if (\App\Helpers\Helper::getCompanyInstagram() !== null)
                <a href="{{\App\Helpers\Helper::getCompanyInstagram()}}" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            @endif
            @if (\App\Helpers\Helper::getCompanyTwitter() !== null)
                <a href="{{\App\Helpers\Helper::getCompanyTwitter()}}" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            @endif
            @if (\App\Helpers\Helper::getCompanyLinkedin() !== null)
                <a href="{{\App\Helpers\Helper::getCompanyLinkedin()}}" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            @endif
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{ route('frontend.home') }}">Home</a></li>
            <li><a href="{{ route('frontend.about') }}">About Us</a></li>
            <li><a href="{{ route('frontend.services') }}">Services</a></li>
            <li><a href="{{ route('frontend.pricing') }}">Pricing</a></li>
            <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            @foreach (\App\Helpers\Helper::getServices() as $service)
                <li>
                    <a href="{{ route('frontend.services', $service->slug) }}"
                        class="{{ request()->routeIs('frontend.services') && request()->route('slug') == $service->slug ? 'active' : '' }}">
                        {{ $service->name }}
                    </a>
                </li>
            @endforeach
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>{{ \App\Helpers\Helper::getCompanyAddress() }}, {{ \App\Helpers\Helper::getCompanyCity() }}<br>{{ \App\Helpers\Helper::getCompanyCountry() }}</p>
          <p class="mt-4"><strong>Phone:</strong> <span>{{ \App\Helpers\Helper::getCompanyPhone() }}</span></p>
          <p><strong>Email:</strong> <span>{{ \App\Helpers\Helper::getCompanyEmail() }}</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© {{ date('Y') }} <strong class="px-1 sitename">{{\App\Helpers\Helper::getCompanyName()}}</strong> {{ \App\Helpers\Helper::getfooterText() }}</p>
      <div class="credits">
        Designed by <a href="https://carrywheels.com/">Carry Wheels</a>
      </div>
    </div>

  </footer>

