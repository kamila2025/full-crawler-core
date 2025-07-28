<style>
    .table th,
    .table td {
        vertical-align: middle;
        padding: 1rem 0.75rem;
    }

    .badge-pill {
        padding: 0.5em 1em;
        border-radius: 50rem;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .badge-blue {
        background-color: #3b82f6;
        color: white;
    }

    .badge-green {
        background-color: #22c55e;
        color: white;
    }

    .badge-red {
        background-color: #ef4444;
        color: white;
    }

    .btn-contact {
        background-color: #8b5cf6;
        color: white;
        font-size: 0.875rem;
        padding: 6px 14px;
        border: none;
        border-radius: 1.5rem;
        transition: all 0.2s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .btn-contact:hover {
        background-color: #7c3aed;
        transform: translateY(-1px);
    }
</style>

<div>
    <section class="jarallax hero-agency position-relative" data-jarallax data-speed="0.4">
        <img class="jarallax-img" src="{{ asset('assets/images/banner.jpg') }}" alt="banner" />

        <!-- 藍色遮罩 -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(33, 74, 192, 0.6); z-index: 1;">
        </div>

        <!-- 文字內容層 -->
        <div class="position-absolute start-0 end-0" style="z-index: 2;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-12" data-cue="zoomIn">
                        <div class="text-center text-lg-start">
                            <div class="mb-4 text-white">
                                <h1 class="mb-3 mt-3 display-3 fw-bold text-white">BY運彩專業運動分析網</h1>
                                <p class="lead mb-0">專業的體育賽事預測和分析平台</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light-subtle">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-0">歷史數據</h2>
                </div>
            </div>

            <div class="row g-5">
                <div class="table-responsive">
                    <table
                        class="table table-hover table-bordered table-striped align-middle text-center shadow-sm rounded overflow-hidden">
                        <thead class="table-light">
                            <tr>
                                <th>類型</th>
                                <th>開賽時間</th>
                                <th>主場隊伍</th>
                                <th>讓盤</th>
                                <th>客場隊伍</th>
                                <th>官方推薦</th>
                                <th>戰績</th>
                            </tr>
                        </thead>
                        <tbody id="sportTableBody"></tbody>
                    </table>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="{{ route('sport') }}" class="btn btn-outline-primary">查看更多歷史數據</a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="lineModal" tabindex="-1" aria-labelledby="lineModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center p-4">
                    <div class="modal-header border-0">
                        <h5 class="modal-title w-100" id="lineModalLabel">LINE帳號: @085oedmu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('assets/images/line-qr.png') }}" alt="LINE QR Code" class="img-fluid"
                            style="max-width: 240px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-xl-7 py-5">
        <div class="container mb-xl-7">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">賽事新聞</h2>
                </div>
            </div>

            <div class="row g-5" id="newsCards"></div>

            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="{{ route('news') }}" class="btn btn-outline-primary">查看更多賽事新聞</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light-subtle">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="fw-bold mb-0">關於我們</h2>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-4 col-12">
                    <h3 class="mb-3">專業分析</h3>
                    <figure class="mb-3 card-lift">
                        <img src="{{ asset('assets/images/about-1.jpg') }}" alt="about-1"
                            class="img-fluid rounded-3" />
                    </figure>
                    <div class="d-flex">
                        <div class="ms-2">
                            <span>深度數據解析</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <h3 class="mb-3">賽事預測</h3>
                    <figure class="mb-3 card-lift">
                        <img src="{{ asset('assets/images/about-2.jpg') }}" alt="location"
                            class="img-fluid rounded-3" />
                    </figure>
                    <div class="d-flex">
                        <div class="ms-2">
                            <span>精準投注建議</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <h3 class="mb-3">實時資訊</h3>
                    <figure class="mb-3 card-lift">
                        <img src="{{ asset('assets/images/about-3.jpg') }}" alt="location"
                            class="img-fluid rounded-3" />
                    </figure>
                    <div class="d-flex">
                        <div class="ms-2">
                            <span>24小時更新資訊</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p class="text-primary fw-semibold">
                        ★全台灣最專業的賽事資訊！一家致力於提供台灣彩券與運彩預測的專業平台，
                        透過數據分析與專家團隊，為用戶提供高品質的預測資訊，協助用戶獲得更高的赢面！
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: linear-gradient(135deg, #1f2937, #111827);">
        <div class="container text-center">
            <h5 class="fw-bold text-warning mb-4" style="font-size: 1.5rem;">免責聲明</h5>
            <p class="text-white mb-3" style="font-size: 1.125rem; line-height: 1.9;">
                本站資料來源為台灣運彩與其他公開資料，不保證其正確性亦不負任何責任。<br>
                本服務是整理與分析各方資訊，結果僅供參考性質，使用者須自行承擔相關風險。<br>
                在任何情況下均不得轉載或向第三人揭露該等資料。如違反上述規定，本站得以終止會員之資格。
            </p>
            <p class="text-warning fw-bold" style="font-size: 1.25rem;">
                未成年人不得購買彩券，請謹慎評估投注風險！
            </p>
        </div>
    </section>
</div>

<script src="{{ asset('assets/js/news.js') }}"></script>
<script src="{{ asset('assets/js/sport.js') }}"></script>
<script>
    function renderNewsCards(filter = "") {
        const $container = $("#newsCards");
        $container.empty();

        newsData
            .slice(0, 4)
            .forEach((news, index) => {
                const shortDesc = news.desc.length > 20 ?
                    news.desc.substring(0, 20) + "..." :
                    news.desc;

                const card = `
                    <div class="col-md-6">
                        <div class="card shadow-sm h-100 border-0 card-lift overflow-hidden">
                            <div class="row h-100 g-0">
                                <div class="col-lg-5 col-md-12 d-flex align-items-center justify-content-center bg-primary text-white fs-1 fw-bold"
                                    style="min-height: 13rem;">
                                    ${news.icon}
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div
                                        class="card-body h-100 d-flex align-items-start flex-column border rounded-end-lg-3 rounded-bottom-3 rounded-top-0 rounded-start-lg-0 border-start-lg-0 border-top-0 border-top-lg">
                                        <div class="mb-4">
                                            <small class="text-uppercase fw-semibold ls-md">${news.category}</small>
                                            <h4 class="my-2">
                                                <a href="/news/${index}" class="text-reset text-decoration-none">${news.title}</a>
                                            </h4>
                                            <small>${news.date}</small>
                                        </div>
                                        <p class="mb-4 small text-muted">${shortDesc}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
                $container.append(card);
            });
    }

    function renderSportTable() {
        const $tbody = $("#sportTableBody");
        $tbody.empty();

        sportData.slice(0, 6).forEach(item => {
            const recommendBtn = `<button type="button" class="btn-contact">聯繫客服</button>`;
            const resultBadge = `<span class="badge-pill ${
            item.result === "贏" ? "badge-green" : "badge-red"
            }">${item.result}</span>`;

            const row = `
                <tr class="bg-white">
                    <td><span class="badge-pill badge-blue">${item.category}</span></td>
                    <td>${item.date}</td>
                    <td>${item.home}</td>
                    <td>${item.handicap}</td>
                    <td>${item.away}</td>
                    <td>${recommendBtn}</td>
                    <td>${resultBadge}</td>
                </tr>
            `;
            $tbody.append(row);
        });
    }

    $(function() {
        renderNewsCards();
        renderSportTable();
    });

    $(document).on("click", ".btn-contact", function() {
        const modal = new bootstrap.Modal(document.getElementById('lineModal'));
        modal.show();
    });
</script>
