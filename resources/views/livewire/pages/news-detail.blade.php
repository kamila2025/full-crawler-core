<div>
    <div class="py-xl-9 py-4">
        <div class="container">
            <div class="row">
                <article class="col-lg-8 offset-lg-2">
                    <h1 id="newsTitle">新聞標題</h1>
                    <div class="text-muted small mb-3" id="newsDate"></div>
                    <div id="newsContent"></div>
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
            $("#newsContent").html(news.desc);
        } else {
            $("#newsTitle").text("找不到新聞");
            $("#newsContent").html("<p>您查詢的新聞不存在或已被移除。</p>");
        }
    });
</script>
