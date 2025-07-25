<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="language" content="tw" />
    <meta name="description" content="帶你從零開始進入油漆工程這塊領域，集三代傳承之經典和現今進步的用料跟工法，帶你快速上手少走彎路。" />
    <meta name="keywords" content="油漆, 油漆課程, 課程購買, 課程介紹, 油漆技術, 油漆知識, 油漆教學, 油漆培訓" />
    <title>{{ '漆三代私塾' . ' - ' . $title }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <!-- Color modes -->
    <script src="{{ asset('assets/js/vendors/color-modes.js') }}"></script>
    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" />
    <!-- Scroll Cue -->
    <link rel="stylesheet" href="{{ asset('assets/libs/scrollcue/scrollCue.css') }}" />
    <!-- Box icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/css/boxicons.min.css') }}" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" />
    @livewireStyles
</head>

<body>
    <livewire:components.navbar />

    {{ $slot }}

    <livewire:components.footer />

    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>

    <!-- jquery JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/headhesive/dist/headhesive.min.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/sidenav.js') }}"></script>
    <!-- ScrollCue JS -->
    <script src="{{ asset('assets/libs/scrollcue/scrollCue.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/scrollcue.js') }}"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/swiper.js') }}"></script>
    <!-- cleave JS -->
    <script src="{{ asset('assets/libs/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/cleave-function.js') }}"></script>
    <!-- sweetalert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts
</body>

</html>
