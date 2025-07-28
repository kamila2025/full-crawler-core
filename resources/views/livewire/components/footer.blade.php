<footer class="pt-5 bg-light-subtle" id="contact">
    <div class="container">
        <div class="row g-4 align-items-start">
            <!-- LOGO 區 -->
            <div class="col-lg-3 col-md-6 text-start">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/logo.gif') }}" alt="logo" class="img-fluid"
                        style="max-width: 180px;">
                </a>
            </div>

            <!-- 導覽連結 -->
            <div class="col-lg-2 col-6">
                <h5 class="fw-bold mb-3">網站導覽</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-reset text-decoration-none">首頁</a></li>
                    <li><a href="{{ route('news') }}" class="text-reset text-decoration-none">賽事新聞</a></li>
                    <li><a href="{{ route('sport') }}" class="text-reset text-decoration-none">歷史數據</a></li>
                    <li><a href="{{ route('about') }}" class="text-reset text-decoration-none">關於我們</a></li>
                    <li><a href="{{ route('about') }}" class="text-reset text-decoration-none">購買教程</a></li>
                </ul>
            </div>

            <!-- 條款與隱私 -->
            <div class="col-lg-2 col-6">
                <h5 class="fw-bold mb-3">政策條款</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('terms') }}" class="text-reset text-decoration-none">服務條款</a></li>
                    <li><a href="{{ route('privacy') }}" class="text-reset text-decoration-none">隱私權政策</a></li>
                </ul>
            </div>

            <!-- 會員操作 -->
            <div class="col-lg-2 col-6">
                <h5 class="fw-bold mb-3">會員中心</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('register') }}" class="text-reset text-decoration-none">會員註冊</a></li>
                    <li><a href="{{ route('login') }}" class="text-reset text-decoration-none">會員登入</a></li>
                </ul>
            </div>

            <!-- QR Code -->
            <div class="col-lg-3 col-12 text-lg-end text-center">
                <img src="{{ asset('assets/images/line-qr.png') }}" alt="LINE QR Code" class="img-fluid"
                    style="max-height: 160px;">
            </div>
        </div>

        <!-- 版權聲明 -->
        <div class="text-center small text-muted py-4 mt-4 border-top">
            Copyright © 2025
            <span class="text-primary">
                <a href="{{ route('home') }}" class="text-primary text-decoration-none">賽事分析平台</a>
            </span>
        </div>
    </div>
</footer>
