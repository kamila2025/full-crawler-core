<div>
    <section class="py-5 py-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 offset-xl-4 col-md-12 col-12">
                    <div class="text-center">
                        <h1 class="mb-1">會員註冊</h1>
                        <p class="mb-0">
                            已經擁有帳號嗎?
                            <a href="{{ route('login') }}" class="text-primary">立即登入</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-center mb-6">
                <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <form class="needs-validation mb-6" wire:submit.prevent="register" novalidate>
                                <div class="mb-3">
                                    <label for="email" class="form-label">
                                        信箱
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="email" class="form-control" id="email" wire:model="email"
                                        required />
                                    <div class="invalid-feedback">請輸入信箱</div>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">
                                        密碼
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="password-field position-relative">
                                        <input type="password" class="form-control fakePassword" id="password"
                                            wire:model="password" required />
                                        <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                        <div class="invalid-feedback">請輸入密碼</div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">
                                        確認密碼
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="password-field position-relative">
                                        <input type="password" class="form-control fakePassword" id="confirmPassword"
                                            wire:model="confirmPassword" required />
                                        <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                        <div class="invalid-feedback">請輸入確認密碼</div>
                                    </div>
                                </div>
                                <div class="mb-3 small text-muted">
                                    點擊註冊，即表示您已閱讀並同意
                                    <a href="{{ route('terms') }}" class="text-primary text-decoration-underline"
                                        target="_blank">服務條款</a>
                                    與
                                    <a href="{{ route('privacy') }}" class="text-primary text-decoration-underline"
                                        target="_blank">隱私權政策</a>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">註冊</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
