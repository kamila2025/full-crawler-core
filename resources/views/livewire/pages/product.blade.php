<div>
    <section class="mb-xl-9 my-5">
        <div class="container">
            <!-- 標題區 -->
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="text-center mb-5">
                        <h1 class="fw-bold">熱賣商品</h1>
                        <p class="text-muted">立即選購分析報告與訂閱方案，掌握賽事關鍵數據！</p>
                    </div>
                </div>
            </div>

            <!-- 商品卡片 -->
            <div class="row g-4">
                @php
                    $products = [
                        [
                            'title' => '單場分析報告',
                            'desc' => '專業分析，助您精準判斷',
                            'price' => 199,
                            'image' => 'https://unsplash.it/400/300?image=1025',
                        ],
                        [
                            'title' => 'VIP 月訂閱',
                            'desc' => '完整賽事資料庫，包含歷史戰績、數據圖表與專家分析',
                            'price' => 999,
                            'image' => 'https://unsplash.it/400/300?image=1003',
                        ],
                        [
                            'title' => '數據庫存取權',
                            'desc' => '專屬會員可使用分析工具查詢各項資料',
                            'price' => 399,
                            'image' => 'https://unsplash.it/400/300?image=1062',
                        ],
                    ];
                @endphp

                @foreach ($products as $product)
                    <div class="col-md-6">
                        <div class="card shadow-sm h-100 border-0 card-lift overflow-hidden">
                            <div class="row h-100 g-0">
                                <a href="{{ route('product-detail', 1) }}" class="col-lg-5 col-md-12"
                                    style="
                                        background-image: url('{{ $product['image'] }}');
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position: center;
                                        min-height: 13rem;
                                    ">
                                </a>
                                <div class="col-lg-7 col-md-12">
                                    <div
                                        class="card-body h-100 d-flex flex-column justify-content-between border rounded-end-lg-3 rounded-bottom-3 border-start-lg-0">
                                        <div>
                                            <h4 class="fw-semibold mb-2">
                                                <a href="{{ route('product-detail', 1) }}"
                                                    class="text-reset">{{ $product['title'] }}</a>
                                            </h4>
                                            <p class="text-muted small mb-0">{{ $product['desc'] }}</p>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="fw-bold text-primary">NT$ {{ $product['price'] }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</div>
