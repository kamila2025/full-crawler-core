<footer class="pt-7 bg-light-subtle" id="contact">
    <div class="container">
        <div class="row align-items-start g-4">
            <!-- LOGO區 -->
            <div class="col-lg-6 col-md-6 text-start ps-lg-4">
                <a href="/">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid"
                        style="max-width: 180px;">
                </a>
            </div>

            <!-- 右側連結 -->
            <div class="col-lg-6 col-md-6">
                <div class="row" id="ft-links">
                    <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a href="{{ route('home') }}" class="text-decoration-none text-reset">首頁</a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('sport') }}" class="text-decoration-none text-reset">所有賽事</a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('product') }}" class="text-decoration-none text-reset">熱賣商品</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none text-reset">聯絡我們</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none text-reset">服務條款</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none text-reset">隱私權政策</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none text-reset">會員註冊</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none text-reset">會員登入</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-6 text-lg-end">
                        <div class="d-flex justify-content-start justify-content-lg-end gap-2">
                            <a href="https://lin.ee/eiSFo8V" class="btn btn-line btn-icon text-reset" target="_blank">
                                <i class="bi bi-line"></i>
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=100093953665075"
                                class="btn btn-facebook btn-icon text-reset" target="_blank">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="https://www.tiktok.com/@boss.feng" class="btn btn-tiktok btn-icon text-reset"
                                target="_blank">
                                <i class="bi bi-tiktok"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 下方版權 -->
    <div class="container mt-7 mb-3">
        <div class="row">
            <div class="col-12 text-center">
                <div class="small">
                    Copyright © 2025
                    <span class="text-primary">
                        <a href="{{ route('home') }}">賽事分析平台</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
