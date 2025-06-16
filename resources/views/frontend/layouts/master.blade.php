<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    @include('frontend.layouts.meta')
    @include('frontend.layouts.css')
    @yield('css')

    <style>
        .header-image{
            height: 70px !important;
        }
        .navmenu .dropdown ul a:hover{
            background-color: #0E3EE3;
            color:#fff !important;
        }
        .navmenu .dropdown ul a.active{
            background-color: #0E3EE3;
            color:#fff !important;
        }
        .footer-links ul li a.active{
            color: #fff !important;
        }
        /* Mobile Responsive */
            @media (max-width: 768px) {
                .sitename {
                    font-size: 20px !important;
                }
            }
            @media (max-width: 1199px) {
                .header-image{
                    height: 55px !important;
                }
            }

            /* WhatsApp Button */
        #whatsapp-btn {
            position: fixed;
            right: 13px;
            bottom: 60px;
            width: 45px;
            height: 45px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            font-size: 20px;
            z-index: 999;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: background-color 0.3s;
        }

        #whatsapp-btn:hover {
            background-color: #1DA851;
            color: white;
        }

    </style>
</head>

<body class="index-page">

    @include('frontend.layouts.header')


    <main class="main">
        @yield('page_title')
        @yield('content')
    </main>

    @include('frontend.layouts.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="fas fa-arrow-up"></i></a>
    <a href="tel:{{ \App\Helpers\Helper::getCompanyPhone() }}" id="whatsapp-btn" class="whatsapp-btn d-flex align-items-center justify-content-center">
        <i class="fas fa-phone"></i>
    </a>


    <!-- Preloader -->
    <div id="preloader"></div>

    @yield('script')
    @include('frontend.layouts.script')

</body>

</html>
