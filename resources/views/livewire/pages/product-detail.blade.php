<section class="py-5 py-lg-8 mb-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h1 class="fw-bold">單場分析報告</h1>
            </div>
        </div>

        <div class="row gy-5">
            <div class="col-lg-7 col-md-12">
                <div class="mb-4">
                    <img src="https://unsplash.it/800/500?image=1025" class="img-fluid rounded-3 shadow-sm w-100"
                        alt="event" />
                </div>

                <h3 class="mb-3">關於</h3>
                <p class="text-muted">
                    我們提供即時、深度的賽事預測服務，結合 AI 模型與專家分析，涵蓋足球、籃球、棒球等主流運動。
                    訂閱即可享受完整分析報告，協助您做出精準判斷。
                </p>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold">購買商品</h3>
                        </div>

                        <form class="needs-validation row g-3" action="" method="POST" novalidate>
                            @csrf

                            <div class="col-12">
                                <label for="nameInput" class="form-label">姓名 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nameInput" name="name" value=""
                                    readonly required />
                                <div class="invalid-feedback">請輸入姓名</div>
                            </div>

                            <div class="col-12">
                                <label for="emailInput" class="form-label">信箱 <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="emailInput" name="email" value=""
                                    readonly required />
                                <div class="invalid-feedback">請輸入信箱</div>
                            </div>

                            <div class="col-12">
                                <label for="phoneInput" class="form-label">電話 <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phoneInput" name="phone"
                                    placeholder="請輸入電話" required />
                                <div class="invalid-feedback">請輸入電話</div>
                            </div>

                            <div class="col-12">
                                <label for="priceInput" class="form-label">交易金額</label>
                                <input type="text" class="form-control fw-bold text-primary" id="priceInput"
                                    name="price" value="NT$ {{ $product['price'] ?? '199' }}" readonly />
                            </div>

                            <div class="col-12">
                                <label for="cardNumberInput" class="form-label">信用卡號 <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control input-credit-card" id="cardNumberInput"
                                    name="cardNumber" placeholder="請輸入信用卡號" required />
                                <div class="invalid-feedback">請輸入信用卡號</div>
                            </div>

                            <div class="col-md-6">
                                <label for="cardDateInput" class="form-label">有效期限 (月/年) <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control input-date-formate" id="cardDateInput"
                                    name="cardDate" placeholder="MM/YY" required />
                                <div class="invalid-feedback">請輸入有效期限</div>
                            </div>

                            <div class="col-md-6">
                                <label for="cardCSCInput" class="form-label">安全碼 <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="cardCSCInput" name="cardCSC"
                                    placeholder="CSC" maxlength="3" required />
                                <div class="invalid-feedback">請輸入安全碼</div>
                            </div>

                            <div class="col-12 d-grid">
                                <button class="btn btn-primary" type="submit">立即購買</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
