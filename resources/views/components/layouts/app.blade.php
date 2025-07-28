<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="language" content="tw" />
    <meta name="description" content="我們提供即時、深度的賽事預測服務，結合 AI 模型與專家分析，涵蓋足球、籃球、棒球等主流運動。" />
    <meta name="keywords" content="賽事分析, 賽事預測, 賽事分析平台, 賽事分析報告, 賽事分析工具, 賽事分析服務, 賽事分析師, 賽事分析團隊" />
    <title>{{ '賽事分析' . ' - ' . $title }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />
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
    @include('livewire.components.navbar')

    {{ $slot }}

    @include('livewire.components.footer')

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
    <!-- Password JS -->
    <script src="{{ asset('assets/js/vendors/password.js') }}"></script>
    <!-- sweetalert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts
</body>

</html>
