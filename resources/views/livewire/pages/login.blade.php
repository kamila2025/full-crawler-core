<div>
    <section class="py-5 py-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 offset-xl-4 col-md-12 col-12">
                    <div class="text-center">
                        <h1 class="mb-1">會員登入</h1>
                        <p class="mb-0">
                            還沒有帳號嗎?
                            <a href="{{ route('register') }}" class="text-primary">立即註冊</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                    <div class="card shadow-sm mb-6">
                        <div class="card-body">
                            <form wire:submit.prevent="login" class="needs-validation mb-6" novalidate>
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
                                    <label for="password" class="form-label">密碼
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="password-field position-relative">
                                        <input type="password" class="form-control fakePassword" id="password"
                                            wire:model="password" required />
                                        <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                        <div class="invalid-feedback">
                                            請輸入密碼
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberMeCheckbox"
                                            name="remember" />
                                        <label class="form-check-label" for="rememberMeCheckbox">記住我</label>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">登入</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
