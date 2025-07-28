<nav class="navbar navbar-expand-lg navbar-light w-100" id="home">
    <div class="container px-3">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" alt /></a>
        <button class="navbar-toggler offcanvas-nav-btn" type="button">
            <i class="bi bi-list"></i>
        </button>
        <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
            <div class="offcanvas-header">
                <a href="{{ url('/') }}" class="text-inverse"><img src="{{ asset('assets/img/logo.png') }}"
                        alt /></a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body pt-0 align-items-center">
                <ul class="navbar-nav mx-auto align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('home') }}" role="button">首頁</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('news') }}" role="button">最新公告</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('sport') }}" role="button">賽事分析</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('product') }}" role="button">方案介紹</a>
                    </li>
                </ul>
                <div class="mt-3 mt-lg-0 d-flex align-items-center">
                    @guest('member')
                        <a href="{{ route('login') }}" class="btn btn-light mx-2" wire:navigate>登入</a>
                        <a href="{{ route('register') }}" class="btn btn-primary" wire:navigate>註冊</a>
                    @endguest
                    @auth('member')
                        <a href="{{ route('logout') }}" class="btn btn-light mx-2" wire:navigate>登出</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>
