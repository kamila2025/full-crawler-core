<div>
    <div class="py-xl-9 py-4">
        <div class="container">
            <div class="row">
                <article class="col-lg-8 offset-lg-2">
                    <h1 id="newsTitle" class="fw-bold mb-2">新聞標題</h1>

                    <div class="d-flex align-items-center flex-wrap mb-3">
                        <span id="newsCategory"
                            class="badge bg-primary me-2 mb-2 text-uppercase px-3 py-1 small fw-semibold">
                            分類
                        </span>
                        <span id="newsDate" class="text-muted small mb-2"></span>
                    </div>

                    <div id="newsContent" class="mt-3 lh-lg"></div>
                </article>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/news.js') }}"></script>
<script>
    $(function() {
        const newsId = new URLSearchParams(window.location.search).get("id") ?? window.location.pathname.split(
            "/").pop();
        const index = parseInt(newsId);

        if (!isNaN(index) && Array.isArray(newsData) && newsData[index]) {
            const news = newsData[index];
            $("#newsTitle").text(news.title);
            $("#newsDate").text(news.date);
            $("#newsCategory").text(news.category || "未分類");
            $("#newsContent").html(news.desc);
        } else {
            $("#newsTitle").text("找不到新聞");
            $("#newsCategory").hide();
            $("#newsContent").html("<p>您查詢的新聞不存在或已被移除。</p>");
        }
    });
</script>
