<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.meta')
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/asset/img/fav.svg" />

    <!-- {{-- 1. Preconnect for Google Fonts --}} -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- {{-- 2. Your Google Fonts (display=swap helps with render blocking) --}} -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playball&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@300..700&display=swap"
        rel="stylesheet">

    <!-- {{-- 3. Preload any critical fonts you're using (e.g., if Bootstrap Icons or FontAwesome use specific woff2 files directly) --}}
    {{-- Example for Bootstrap Icons if you know the exact woff2 path: --}} -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.woff2?v=1.11.3"
        as="font" type="font/woff2" crossorigin>


    <!-- {{-- 4. All other CSS files, made non-blocking --}} -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        media="print" onload="this.media='all'">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous"
        media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ url('/') }}/asset/css/variable.css?v=2.1" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ url('/') }}/asset/css/header.css?v=2.0" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ url('/') }}/asset/css/footer.css?v=1.4" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}?v={{ filemtime(public_path('asset/css/main.css')) }}"
        media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ url('/') }}/asset/css/responsive.css?v=3.1" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="{{ url('/') }}/asset/css/partial.css?v=0.2" media="print" onload="this.media='all'">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" media="print"
        onload="this.media='all'">
    <link rel="stylesheet" href="{{ url('/') }}/asset/css/fancybox.css" media="print" onload="this.media='all'">
    <!-- <link rel="stylesheet" href="{{ url('/') }}/asset/css/nice-select.css" media="print" onload="this.media='all'"> -->
    <link rel="stylesheet" href="{{ url('/') }}/asset/css/odometer.min.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" media="print"
        onload="this.media='all'">
    <link rel="stylesheet" href="{{ url('/') }}/asset/css/sidebar-btn.css?ver=1758197486">
    <link rel="stylesheet" href="{{ url('/') }}/asset/css/model-custom.css?ver=1758197486">
    <!-- {{-- 5. NoScript Fallback --}} -->
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ url('/') }}/asset/css/variable.css?v=2.1">
        <link rel="stylesheet" href="{{ url('/') }}/asset/css/header.css?v=2.0">
        <link rel="stylesheet" href="{{ url('/') }}/asset/css/footer.css?v=1.4">
        <link rel="stylesheet"
            href="{{ asset('asset/css/main.css') }}?v={{ filemtime(public_path('asset/css/main.css')) }}">
        <link rel="stylesheet" href="{{ url('/') }}/asset/css/responsive.css?v=3.1">
        <link rel="stylesheet" href="{{ url('/') }}/asset/css/partial.css?v=0.2">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{ url('/') }}/asset/css/fancybox.css">
        <!-- <link rel="stylesheet" href="{{ url('/') }}/asset/css/nice-select.css"> -->
        <link rel="stylesheet" href="{{ url('/') }}/asset/css/odometer.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    </noscript>
    <style>
    .leftInqueryBtn {
        position: fixed;
        top: 220px;
        z-index: 11;
        background: #f74f1e;
        transform: rotate(270deg);
        left: 0;
        height: auto;
        width: fit-content;
        margin-left: -74px;
        border-radius: 10px;
        padding: 10px 20px;
    }

    .leftInqueryBtn a {
        display: flex;
        gap: 15px;
        color: #fff !important;
        font-family: "Poppins";
    }

    .leftInqueryBtn a .btn-text {
        opacity: 1;
    }

    @media (max-width: 768px) {

        .whatsapp-button,
        .leftInqueryBtn {
            display: none !important;
        }
    }

    @media screen and (max-width: 767px) {
        .footer-box {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #0f4da2;
            color: white;
            text-align: center;
            z-index: 999999;
            display: grid !important;
            grid-template-columns: 20% 1fr 20%;
        }

        .book-app {
            width: 100%;
            padding: 2%;
            float: left;
            line-height: 50px;
            text-align: center;
            max-height: 100px;
        }

        .sticklist {
            display: none !important;
        }

    }

    .enquiry form .form-control {
        background-color: #fff;
    }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V7GLTSWEV0"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-V7GLTSWEV0');
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P492WGK" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P492WGK');
    </script>
    <!-- End Google Tag Manager -->
     <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K7CJP2Z9');</script>
<!-- End Google Tag Manager -->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K7CJP2Z9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header class="header">
        @include('layouts.header1')
    </header>

    <main>

        @yield('content')

    </main>

    <footer class="footer">
        @include('layouts.footer')
    </footer>
    <a href="https://wa.me/6354883229?text=Hi" class="wa-icon">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px" height="48px" fill-rule="evenodd"
            clip-rule="evenodd">
            <path fill="#fff"
                d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z" />
            <path fill="#fff"
                d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z" />
            <path fill="#cfd8dc"
                d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z" />
            <path fill="#40c351"
                d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z" />
            <path fill="#fff" fill-rule="evenodd"
                d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z"
                clip-rule="evenodd" />
        </svg>
    </a>
    <div class="go-top">

        <i class="bi bi-chevron-double-up"></i>
        <i class="bi bi-chevron-double-up"></i>
    </div>

    <div class="leftInqueryBtn">
        <a href="javascript:;" data-bs-toggle="modal" data-bs-target=".request-a-quote"
            aria-label="Open Request A Quote modal">
            <span class="icon1"> <i class="fa fa-envelope"></i></span> <span> Request A Quote</span>
        </a>
    </div>
    <div class="footer-box" style="display: none;">
        <div class="book-app CallBtnMobile" style="background:#000;">
            <a href="tel:+916354883229">

                <svg fill="#fff" width="20" height="20" viewBox="0 0 21 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_22_15)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.12036 0.575173C2.3172 0.378614 2.55356 0.226135 2.81378 0.127842C3.074 0.0295477 3.35214 -0.0123165 3.62977 0.00502299C3.90739 0.0223625 4.17816 0.0985099 4.42413 0.228419C4.6701 0.358328 4.88566 0.539032 5.05651 0.758557L7.07583 3.35293C7.44594 3.82882 7.57644 4.44873 7.43019 5.03375L6.81483 7.49762C6.78324 7.62524 6.78507 7.75886 6.82014 7.88557C6.85522 8.01228 6.92236 8.12782 7.01508 8.22102L9.77912 10.9853C9.87243 11.0782 9.98814 11.1454 10.1151 11.1805C10.242 11.2156 10.3758 11.2173 10.5036 11.1855L12.9661 10.5701C13.2549 10.4984 13.5561 10.493 13.8472 10.5544C14.1383 10.6157 14.4117 10.7423 14.6468 10.9245L17.241 12.9429C18.1736 13.6685 18.2591 15.0467 17.4244 15.8804L16.2612 17.0437C15.4287 17.8762 14.1845 18.2419 13.0246 17.8335C10.0555 16.7901 7.35992 15.0903 5.13864 12.8607C2.90938 10.6396 1.20976 7.94423 0.166292 4.97525C-0.240945 3.81645 0.124668 2.57101 0.957142 1.73848L2.12036 0.575173ZM14.0619 1.12532C14.211 1.12532 14.3541 1.18459 14.4596 1.29008C14.5651 1.39558 14.6243 1.53866 14.6243 1.68785V3.37543H16.3118C16.461 3.37543 16.604 3.43469 16.7095 3.54019C16.815 3.64568 16.8743 3.78876 16.8743 3.93795C16.8743 4.08714 16.815 4.23022 16.7095 4.33572C16.604 4.44121 16.461 4.50048 16.3118 4.50048H14.6243V6.18806C14.6243 6.33725 14.5651 6.48033 14.4596 6.58582C14.3541 6.69132 14.211 6.75058 14.0619 6.75058C13.9127 6.75058 13.7696 6.69132 13.6641 6.58582C13.5586 6.48033 13.4994 6.33725 13.4994 6.18806V4.50048H11.8119C11.6627 4.50048 11.5197 4.44121 11.4142 4.33572C11.3087 4.23022 11.2494 4.08714 11.2494 3.93795C11.2494 3.78876 11.3087 3.64568 11.4142 3.54019C11.5197 3.43469 11.6627 3.37543 11.8119 3.37543H13.4994V1.68785C13.4994 1.53866 13.5586 1.39558 13.6641 1.29008C13.7696 1.18459 13.9127 1.12532 14.0619 1.12532Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_22_15">
                            <rect width="21" height="21" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
        <div class="book-app" style="background: #ff6d39;" id="req-apnmt2">
            <a class="nav_up click1" href="javascript:;" data-bs-toggle="modal" data-bs-target=".request-a-quote"
                aria-label="Open Request A Quote modal" style="color:#FFF; font-size:18px;font-weight:600;">
                <svg fill="#fff" width="20" height="20" viewBox="0 0 18 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 2.4859C0 1.8266 0.237053 1.1943 0.65901 0.728102C1.08097 0.261906 1.65326 0 2.25 0H15.75C16.3467 0 16.919 0.261906 17.341 0.728102C17.7629 1.1943 18 1.8266 18 2.4859V12.4295C18 13.0888 17.7629 13.7211 17.341 14.1873C16.919 14.6535 16.3467 14.9154 15.75 14.9154H2.25C1.65326 14.9154 1.08097 14.6535 0.65901 14.1873C0.237053 13.7211 0 13.0888 0 12.4295V2.4859ZM2.25 1.24295C1.95163 1.24295 1.66548 1.3739 1.4545 1.607C1.24353 1.8401 1.125 2.15625 1.125 2.4859V2.75562L9 7.976L16.875 2.75562V2.4859C16.875 2.15625 16.7565 1.8401 16.5455 1.607C16.3345 1.3739 16.0484 1.24295 15.75 1.24295H2.25ZM16.875 4.2049L11.5785 7.71623L16.875 11.317V4.2049ZM16.8368 12.7514L10.4918 8.43714L9 9.42528L7.50825 8.43714L1.16325 12.7502C1.22718 13.0147 1.36836 13.2484 1.56486 13.4152C1.76137 13.582 2.00221 13.6724 2.25 13.6724H15.75C15.9976 13.6725 16.2384 13.5822 16.4349 13.4157C16.6313 13.2492 16.7726 13.0157 16.8368 12.7514ZM1.125 11.317L6.4215 7.71623L1.125 4.2049V11.317Z"
                        fill="white" />
                </svg>
                Inquiry</a>
        </div>
        <div class="book-app WhatBtnMobile" style="background: #2db640;">
            <a onclick="gtag('event', 'send', { 'event_category': 'click on whatsapp', 'event_action': 'Mobile', 'event_label': '+916354883229' });"
                href="https://api.whatsapp.com/send?phone=916354883229&amp;text=Hello Team Kesar Control Systems, I was going through your Website, Please connect me for product discussion."
                target="_blank">

                <svg fill="#fff" width="20" height="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 308 308" xml:space="preserve">
                    <g id="XMLID_468_">
                        <path id="XMLID_469_" d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156
                                          c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687
                                          c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887
                                          c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153
                                          c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348
                                          c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802
                                          c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922
                                          c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0
                                          c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458
                                          C233.168,179.508,230.845,178.393,227.904,176.981z" />
                        <path id="XMLID_470_" d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716
                                          c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396
                                          c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z
                                          M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188
                                          l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677
                                          c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867
                                          C276.546,215.678,222.799,268.994,156.734,268.994z" />
                    </g>
                </svg>
            </a>
        </div>
    </div>
    <div class="modal fade request-a-quote md-cmn" id="requestQuote" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <div class="heading">
                            <h2>
                                Request a Quote
                            </h2>
                        </div>
                        <div class="para">
                            <p>
                                Fill all information details to consult with us to get service from us.
                            </p>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body my-custom-modal">
                    <form class="form-horizontal form1" action="inquiry-action.php" method="post"
                        novalidate="novalidate">
                        <div class="form-group has-feedback">
                            <div class="col-md-12">
                                <input name="name" id="name" type="text" placeholder="Name" class="form-control">

                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-md-12">
                                <input name="cname" id="cname2" type="text" placeholder="Company Name"
                                    class="form-control">

                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-md-12">
                                <input name="email" id="email" type="text" placeholder="E-Mail Address"
                                    class="form-control">

                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-md-12" style="padding:0px;">
                                <div class="col-md-12 col-sm-12 col-xs-12 mybottom">
                                    <select id="country1" class="selectstyle form-control" name="country">Select
                                        Country</select>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-5 mybottom" style="display:none">
                                    <select name="code" id="state1" class="selectstyle form-control"
                                        style="width: 100%;">
                                        <option value="">+00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-md-12">
                                <input name="number" id="number" type="tel" placeholder="Phone" maxlength="15"
                                    minlength="10" class="form-control number21">

                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" id="message"
                                    placeholder="Requirement"></textarea>

                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8 col position-relative">
                                        <input name="captcha" id="captcha" placeholder="Captcha Code"
                                            class="form-control" type="text">

                                    </div>
                                    <div class="col-md-4 col">
                                        <img src="captcha.php" class="capside">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-md-12 col-sm-3 col-xs-12">
                                <input name="submit" class="submit submitbutton" type="submit" value="Submit Now!">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade request-a-quote-cat md-cmn" id="requestCat" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <div class="heading">
                            <h2>
                                Request a Quote
                            </h2>
                        </div>
                        <div class="para">
                            <p>
                                Fill all information details to consult with us to get service from us.
                            </p>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body my-custom-modal">
                    <form class="form-horizontal form2" action="cat-action.php" method="post"
                        novalidate="novalidate">
                        <div class="form-group has-feedback">
                            <div class="col-md-12">
                                <input name="name" id="name" type="text" placeholder="Name" class="form-control">
<input name="path" id="path" type="hidden" value="asset/docs/detail-catalogue.pdf">
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-md-12">
                                <input name="cname" id="cname2" type="text" placeholder="Company Name"
                                    class="form-control">

                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-md-12">
                                <input name="email" id="email" type="text" placeholder="E-Mail Address"
                                    class="form-control">

                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-md-12" style="padding:0px;">
                                <div class="col-md-12 col-sm-12 col-xs-12 mybottom">
                                    <select id="country5" class="selectstyle form-control" name="country">Select
                                        Country</select>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-5 mybottom" style="display:none">
                                    <select name="code" id="state5" class="selectstyle form-control"
                                        style="width: 100%;">
                                        <option value="">+00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-md-12">
                                <input name="number" id="number" type="tel" placeholder="Phone" maxlength="15"
                                    minlength="10" class="form-control number21">

                            </div>
                        </div>
                       
                        <div class="form-group has-feedback">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8 col position-relative">
                                        <input name="captcha" id="captcha" placeholder="Captcha Code"
                                            class="form-control" type="text">

                                    </div>
                                    <div class="col-md-4 col">
                                        <img src="captcha.php" class="capside">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <div class="col-md-12 col-sm-3 col-xs-12">
                                <input name="submit" class="submit submitbutton" type="submit" value="Submit Now!">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LfJK7MrAAAAAAGXjJFJEc4nHTUT_Ef1cNo_aZ1r"></script>

    <script src="{{ url('/') }}/asset/js/element.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    <script src="{{ url('/') }}/asset/js/jquery.counterup.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ url('/') }}/asset/js/jquery.waypoints.min.js"></script>
    <script src="{{ url('/') }}/asset/js/sticky.min.js"></script>
    <!-- <script src="{{ url('/') }}/asset/js/jquery.bxslider.min.js"></script> -->
    <!-- <script src="{{ url('/') }}/asset/js/jquery.nice-select.js"></script> -->
    <script src="{{ url('/') }}/asset/js/odometer.min.js"></script>
    <script src="{{ url('/') }}/asset/js/appear.min.js"></script>
    <script src="{{ url('/') }}/asset/js/fancybox.umd.js"></script>
    <script src="{{ url('/') }}/asset/js/isotope.pkgd.min.js"></script>
    <script src="{{ url('/') }}/asset/js/mixitup.min.js"></script>
    <script src="{{ url('/') }}/asset/js/wow.min.js"></script>
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/gsap@3/dist/ScrollToPlugin.min.js"></script>
    <script src="{{ url('/') }}/asset/js/stcl.js"></script>
    <script src="{{ url('/') }}/asset/js/main.js?v=2.6"></script>
    <script src="{{ url('/') }}/asset/js/plugins.js?v=1.6"></script>
    <script src="{{ url('/') }}/asset/js/partial.js?v=0.3"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    $(document).ready(function() {
        $('#requestQuote').on('hidden.bs.modal', function() {
            $(this).find('.error-msg').remove();
            $(this).find('form')[0].reset();
        });
    });

    setInterval(function() {
        grecaptcha.ready(function() {
            grecaptcha.execute('6LfJK7MrAAAAAAGXjJFJEc4nHTUT_Ef1cNo_aZ1r', {
                action: 'submit'
            }).then(function(e) {
                $('#recaptcha').val(e);
            });
        });
    }, 10 * 1000);
    </script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ url('/') }}/asset/js/form-buzz.js?ver=1758197486"></script>
    <script src="{{ url('/') }}/asset/js/index.js?ver=1758197486"></script>
    <script src="{{ url('/') }}/asset/js/jquery.validate.min.js?ver=1758197486"></script>
    <script src="{{ url('/') }}/asset/js/js.js?ver=1758197486"></script>
    <script>
    //  @if(Session::has('success'))
    //      $(".nice-select").css('display',"none");
    //      Swal.fire({
    //          title: "Contact Us",
    //          text: "{{ Session::get('success') }}",
    //          icon: "success"
    //      });
    //  @endif
    </script>


    <script language="javascript">
    var country_arr = new Array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla",
        "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Ascension", "Australia", "Austria", "Azerbaijan",
        "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda",
        "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei",
        "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands",
        "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo", "Cook Islands",
        "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Democratic Republic of Congo", "Denmark",
        "Diego Garcia", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt",
        "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland (Malvinas) Islands",
        "Faroe Islands", "Fiji", "Finland", "France", "French Guiana", "French Polynesia", "Gabon", "Gambia",
        "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam",
        "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland",
        "India", "Indonesia", "Inmarsat Satellite", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Ivory Coast",
        "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kuwait", "Kyrgyzstan", "Laos", "Latvia",
        "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia",
        "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique",
        "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro",
        "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands",
        "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue Island",
        "North Korea", "Northern Marianas", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea",
        "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania",
        "Russian Federation", "Rwanda", "Saint Helena", "Saint Kitts and Nevis", "Saint Lucia",
        "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines", "Samoa", "San Marino",
        "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore",
        "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "Spain", "Sri Lanka",
        "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania",
        "Thailand", "Togo", "Tokelau", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan",
        "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom",
        "United States of America", "U.S. Virgin Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City",
        "Venezuela", "Vietnam", "Wallis and Futuna", "Yemen", "Zambia", "Zimbabwe");
    var s_a = new Array();
    s_a[1] = "93";
    s_a[2] = "355";
    s_a[3] = "213";
    s_a[4] = "1";
    s_a[5] = "376";
    s_a[6] = "244";
    s_a[7] = "1";
    s_a[8] = "1";
    s_a[9] = "54";
    s_a[10] = "374";
    s_a[11] = "297";
    s_a[12] = "247";
    s_a[13] = "61";
    s_a[14] = "43";
    s_a[15] = "994";
    s_a[16] = "1";
    s_a[17] = "973";
    s_a[18] = "880";
    s_a[19] = "1";
    s_a[20] = "375";
    s_a[21] = "32";
    s_a[22] = "501";
    s_a[23] = "229";
    s_a[24] = "1";
    s_a[25] = "975";
    s_a[26] = "591";
    s_a[27] = "387";
    s_a[28] = "267";
    s_a[29] = "55";
    s_a[30] = "1";
    s_a[31] = "673";
    s_a[32] = "359";
    s_a[33] = "226";
    s_a[34] = "257";
    s_a[35] = "855";
    s_a[36] = "237";
    s_a[37] = "1";
    s_a[38] = "238";
    s_a[39] = "1";
    s_a[40] = "236";
    s_a[41] = "235";
    s_a[42] = "56";
    s_a[43] = "86";
    s_a[44] = "57";
    s_a[45] = "269";
    s_a[46] = "242";
    s_a[47] = "682";
    s_a[48] = "506";
    s_a[49] = "385";
    s_a[50] = "53";
    s_a[51] = "357";
    s_a[52] = "420";
    s_a[53] = "243";
    s_a[54] = "45";
    s_a[55] = "246";
    s_a[56] = "253";
    s_a[57] = "1";
    s_a[58] = "1";
    s_a[59] = "670";
    s_a[60] = "593";
    s_a[61] = "20";
    s_a[62] = "503";
    s_a[63] = "240";
    s_a[64] = "291";
    s_a[65] = "372";
    s_a[66] = "251";
    s_a[67] = "500";
    s_a[68] = "298";
    s_a[69] = "679";
    s_a[70] = "358";
    s_a[71] = "33";
    s_a[72] = "594";
    s_a[73] = "689";
    s_a[74] = "241";
    s_a[75] = "220";
    s_a[76] = "995";
    s_a[77] = "49";
    s_a[78] = "233";
    s_a[79] = "350";
    s_a[80] = "30";
    s_a[81] = "299";
    s_a[82] = "1";
    s_a[83] = "590";
    s_a[84] = "1";
    s_a[85] = "502";
    s_a[86] = "224";
    s_a[87] = "245";
    s_a[88] = "592";
    s_a[89] = "509";
    s_a[90] = "504";
    s_a[91] = "852";
    s_a[92] = "36";
    s_a[93] = "354";
    s_a[94] = "91";
    s_a[95] = "62";
    s_a[96] = "870";
    s_a[97] = "98";
    s_a[98] = "964";
    s_a[99] = "353";
    s_a[100] = "972";
    s_a[101] = "39";
    s_a[102] = "225";
    s_a[103] = "1";
    s_a[104] = "81";
    s_a[105] = "962";
    s_a[106] = "7";
    s_a[107] = "254";
    s_a[108] = "686";
    s_a[109] = "965";
    s_a[110] = "996";
    s_a[111] = "856";
    s_a[112] = "371";
    s_a[113] = "961";
    s_a[114] = "266";
    s_a[115] = "231";
    s_a[116] = "218";
    s_a[117] = "423";
    s_a[118] = "370";
    s_a[119] = "352";
    s_a[120] = "853";
    s_a[121] = "389";
    s_a[122] = "261";
    s_a[123] = "265";
    s_a[124] = "60";
    s_a[125] = "960";
    s_a[126] = "223";
    s_a[127] = "356";
    s_a[128] = "692";
    s_a[129] = "596";
    s_a[130] = "222";
    s_a[131] = "230";
    s_a[132] = "262";
    s_a[133] = "52";
    s_a[134] = "691";
    s_a[135] = "373";
    s_a[136] = "377";
    s_a[137] = "976";
    s_a[138] = "382";
    s_a[139] = "1";
    s_a[140] = "212";
    s_a[141] = "258";
    s_a[142] = "95";
    s_a[143] = "264";
    s_a[144] = "674";
    s_a[145] = "977";
    s_a[146] = "31";
    s_a[147] = "599";
    s_a[148] = "687";
    s_a[149] = "64";
    s_a[150] = "505";
    s_a[151] = "227";
    s_a[152] = "234";
    s_a[153] = "683";
    s_a[154] = "850";
    s_a[155] = "1";
    s_a[156] = "47";
    s_a[157] = "968";
    s_a[158] = "92";
    s_a[159] = "680";
    s_a[160] = "507";
    s_a[161] = "675";
    s_a[162] = "595";
    s_a[163] = "51";
    s_a[164] = "63";
    s_a[165] = "48";
    s_a[166] = "351";
    s_a[167] = "1";
    s_a[168] = "974";
    s_a[169] = "262";
    s_a[170] = "40";
    s_a[171] = "7";
    s_a[172] = "250";
    s_a[173] = "290";
    s_a[174] = "1";
    s_a[175] = "1";
    s_a[176] = "508";
    s_a[177] = "1";
    s_a[178] = "685";
    s_a[179] = "378";
    s_a[180] = "239";
    s_a[181] = "966";
    s_a[182] = "221";
    s_a[183] = "381";
    s_a[184] = "248";
    s_a[185] = "232";
    s_a[186] = "65";
    s_a[187] = "421";
    s_a[188] = "386";
    s_a[189] = "677";
    s_a[190] = "252";
    s_a[191] = "27";
    s_a[192] = "82";
    s_a[193] = "34";
    s_a[194] = "94";
    s_a[195] = "249";
    s_a[196] = "597";
    s_a[197] = "268";
    s_a[198] = "46";
    s_a[199] = "41";
    s_a[200] = "963";
    s_a[201] = "886";
    s_a[202] = "992";
    s_a[203] = "255";
    s_a[204] = "66";
    s_a[205] = "228";
    s_a[206] = "690";
    s_a[207] = "1";
    s_a[208] = "216";
    s_a[209] = "90";
    s_a[210] = "993";
    s_a[211] = "1";
    s_a[212] = "688";
    s_a[213] = "256";
    s_a[214] = "380";
    s_a[215] = "971";
    s_a[216] = "44";
    s_a[217] = "1";
    s_a[218] = "1";
    s_a[219] = "598";
    s_a[220] = "998";
    s_a[221] = "678";
    s_a[222] = "379";
    s_a[223] = "58";
    s_a[224] = "84";
    s_a[225] = "681";
    s_a[226] = "967";
    s_a[227] = "260";
    s_a[228] = "263";

    function populateStates(countryElementId, stateElementId) {
        var selectedCountryIndex = document.getElementById(countryElementId).selectedIndex;
        var stateElement = document.getElementById(stateElementId);
        stateElement.length = 0;
        stateElement.selectedIndex = 0;
        var state_arr = s_a[selectedCountryIndex].split("|");
        for (var i = 0; i < state_arr.length; i++) {
            stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
        }
    }

    function populateCountries(countryElementId, stateElementId) {
        var countryElement = document.getElementById(countryElementId);
        countryElement.length = 0;
        countryElement.options[0] = new Option('Select Country', '');
        countryElement.selectedIndex = 0;
        for (var i = 0; i < country_arr.length; i++) {
            countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
        }
        if (stateElementId) {
            countryElement.onchange = function() {
                populateStates(countryElementId, stateElementId);
            };
        }
    }
    populateCountries("country", "state");
    </script>
    <script language="javascript">
    populateCountries("country1", "state1");
    </script>
    <script language="javascript">
    populateCountries("country2", "state2");
    </script>
    <script language="javascript">
    populateCountries("country3", "state3");
    </script>
    <script language="javascript">
    populateCountries("country4", "state4");
    </script>
     <script language="javascript">
    populateCountries("country5", "state5");
    </script>

    @yield('customjs')
</body>

</html>