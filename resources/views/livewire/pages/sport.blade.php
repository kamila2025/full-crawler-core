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

    .pagination-btn {
        border: 1px solid #d6dbe1;
        background-color: white;
        color: #1e1e1e;
        padding: 6px 14px;
        margin: 0 3px;
        border-radius: 0.75rem;
        font-size: 14px;
        min-width: 42px;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .pagination-btn:hover {
        background-color: #f0f4f8;
    }

    .pagination-btn.active {
        background-color: #1d4ed8;
        color: white;
        border-color: #1d4ed8;
    }

    .pagination-btn.disabled {
        opacity: 0.5;
        pointer-events: none;
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
    <section class="py-5 py-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="text-center">
                        <h1 class="mb-3">歷史數據</h1>
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
                                <option value="足球FTB">足球FTB</option>
                                <option value="美國職籃NBA">美國職籃NBA</option>
                            </select>
                        </div>
                    </div>
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

            <div class="d-flex justify-content-center mt-4" id="pagination"></div>
        </div>
    </section>

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
</div>

<script src="{{ asset('assets/js/sport.js') }}"></script>
<script>
    const ITEMS_PER_PAGE = 10;
    let currentPage = 1;

    function paginateData(data, page, perPage) {
        const start = (page - 1) * perPage;
        return data.slice(start, start + perPage);
    }

    function renderPagination(totalItems) {
        const totalPages = Math.ceil(totalItems / ITEMS_PER_PAGE);
        const $pagination = $("#pagination");
        $pagination.empty();

        if (totalPages <= 1) return;

        // 上一頁
        $pagination.append(`
            <div class="pagination-btn ${currentPage === 1 ? 'disabled' : ''}" data-page="${currentPage - 1}">
            上一頁
            </div>
        `);

        // 頁碼
        for (let i = 1; i <= totalPages; i++) {
            $pagination.append(`
            <div class="pagination-btn ${i === currentPage ? 'active' : ''}" data-page="${i}">
                ${i}
            </div>
            `);
        }

        // 下一頁
        $pagination.append(`
            <div class="pagination-btn ${currentPage === totalPages ? 'disabled' : ''}" data-page="${currentPage + 1}">
            下一頁
            </div>
        `);
    }

    function renderTableWithPagination(filter = "") {
        const $tbody = $("#sportTableBody");
        const filteredData = sportData.filter(item => filter === "" || item.category === filter);
        const paginated = paginateData(filteredData, currentPage, ITEMS_PER_PAGE);
        $tbody.empty();

        paginated.forEach(item => {
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

        renderPagination(filteredData.length);
    }

    renderTableWithPagination();

    $("#eventList").on("change", function() {
        currentPage = 1;
        renderTableWithPagination($(this).val());
    });

    $(document).on("click", ".pagination-btn", function() {
        const page = parseInt($(this).data("page"));
        if (!isNaN(page)) {
            currentPage = page;
            renderTableWithPagination($("#eventList").val());
        }
    });

    $(document).on("click", ".btn-contact", function() {
        const modal = new bootstrap.Modal(document.getElementById('lineModal'));
        modal.show();
    });
</script>
