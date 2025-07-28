<div>
    <div class="py-xl-9 py-4">
        <div class="container">
            <div class="row">
                <article class="col-lg-8 offset-lg-2">
                    <h1>最新新聞</h1>
                    <div id="newsList" class="mt-4"></div>
                </article>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/news.js') }}"></script>
<script>
    $(function() {
        const $newsList = $("#newsList");

        if (Array.isArray(newsData)) {
            newsData.forEach((news, index) => {
                const $item = $(`
                    <div class="mb-3 pb-3 border-bottom">
                        <div class="small text-muted mb-1">${news.date}</div>
                        <div class="fw-semibold">
                            <a href="/news/${index}" class="text-reset text-decoration-none">
                                ${news.title}
                            </a>
                        </div>
                    </div>
                `);
                $newsList.append($item);
            });
        }
    });
</script>
