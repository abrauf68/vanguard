<!-- Vendor JS Files -->
<script src="{{asset('frontAssets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
{{-- <script src="{{asset('frontAssets/vendor/php-email-form/validate.js')}}"></script> --}}
<script src="{{asset('frontAssets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('frontAssets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('frontAssets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('frontAssets/vendor/swiper/swiper-bundle.min.js')}}"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Main JS File -->
<script src="{{asset('frontAssets/js/main.js')}}"></script>

<!-- jQuery (required for Toastr) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    toastr.options = {
        "closeButton": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "2000"
    };
    @if(session('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if(session('error'))
        toastr.error("{{ session('error') }}");
    @endif

    @if(session('message'))
        toastr.info("{{ session('message') }}");
    @endif

    @if ($errors->any())
        toastr.error("{{ $errors->first() }}");
    @endif
</script>
