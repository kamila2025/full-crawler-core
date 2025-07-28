<div>
    <section class="py-5 py-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="text-center">
                        <h1 class="mb-3">賽事新聞</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-xl-9">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6 col-md-10 col-12">
                    <div class="row g-3 align-items-center">
                        <div class="col-lg-6 col-md-6 col-12">
                            <label for="eventList" class="form-label visually-hidden">Search Category</label>
                            <select class="form-select" id="eventList">
                                <option selected value="">全部</option>
                                <option value="經營指南">經營指南</option>
                                <option value="工具推薦">工具推薦</option>
                                <option value="熱點資訊">熱點資訊</option>
                                <option value="體育新聞">體育新聞</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5" id="newsCards"></div>
        </div>
    </section>
</div>

<script src="{{ asset('assets/js/news.js') }}"></script>
<script>
    function renderNewsCards(filter = "") {
        const $container = $("#newsCards");
        $container.empty();

        newsData
            .filter(item => filter === "" || item.category === filter)
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

    $(function() {
        renderNewsCards();

        $("#eventList").on("change", function() {
            const selectedCategory = $(this).val();
            renderNewsCards(selectedCategory);
        });
    });
</script>
