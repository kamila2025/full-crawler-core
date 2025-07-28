<div>
    <section class="mb-xl-9 my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="text-center mb-5">
                        <h1 class="fw-bold">方案介紹</h1>
                    </div>
                </div>
            </div>

            <div class="row g-4" id="productList">
            </div>
        </div>
    </section>
</div>

<script src="{{ asset('assets/js/product.js') }}"></script>
<script>
    $(function() {
        const $container = $("#productList");
        const imageBaseUrl = "{{ asset('assets/images') }}";

        productData.forEach((product, index) => {
            const $card = $(`
            <div class="col-md-6">
                <div class="card shadow-sm h-100 border-0 card-lift overflow-hidden">
                    <div class="row g-0 h-100">
                        <a href="/product/${index}" class="col-lg-5 col-md-12"
                            style="
                                background-image: url('${imageBaseUrl}/${product.image}');
                                background-size: cover;
                                background-repeat: no-repeat;
                                background-position: center;
                                min-height: 13rem;
                            ">
                        </a>
                        <div class="col-lg-7 col-md-12">
                            <div class="card-body h-100 d-flex align-items-start flex-column border rounded-end-lg-3 rounded-bottom-3 rounded-top-0 rounded-start-lg-0 border-start-lg-0 border-top-0 border-top-lg">
                                <div class="mb-4">
                                    <h5 class="mb-2">${product.name}</h5>
                                    <div class="text-muted small">${product.desc}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `);

            $container.append($card);
        });
    });
</script>
</script>
