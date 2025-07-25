<nav class="navbar navbar-expand-lg navbar-light w-100" id="home">
    <div class="container px-3">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" alt /></a>
        <button class="navbar-toggler offcanvas-nav-btn" type="button">
            <i class="bi bi-list"></i>
        </button>
        <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
            <div class="offcanvas-header">
                <a href="{{ url('/') }}" class="text-inverse"><img src="{{ asset('assets/images/logo.png') }}"
                        alt /></a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body pt-0 align-items-center">
                <ul class="navbar-nav mx-auto align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/#about') }}" role="button">關於我們</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/#feature') }}" role="button">教學特色</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/#contact') }}" role="button">聯絡我們</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="" role="button" wire:navigate>課程專區</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
