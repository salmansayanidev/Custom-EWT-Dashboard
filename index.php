<?php include './includes/header.php'; ?>
<link rel="stylesheet" href="./assets/css/index.css">

<main class="main">
    <section class="home-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12 col-xl-10">
                    <div class="home-search-main-area">
                        <form action="">
                            <div class="home-search-left">
                                <div class="">
                                    <input type="radio" class="d-none search-radio" name="customer_radio" value="buyer" checked id="Buyers">
                                    <label for="Buyers" class="primary-btn">
                                        Buyers
                                    </label>
                                </div>
                                <div class="">
                                    <input type="radio" class="d-none search-radio" name="customer_radio" value="seller" id="Sellers">
                                    <label for="Sellers" class="primary-btn btn-2">
                                        Sellers
                                    </label>
                                </div>
                                <div class="">
                                    <div class="tags-input-container search-field tags-input" id="">
                                        <input type="text" id="home-search-input" class="tag-input" placeholder="Please add 1 or more hs code or product" />
                                    </div>
                                </div>
                                <div class="">
                                    <button class="search-btn" type="submit">
                                        <img class="img-fluid" src="./assets/images/search-icon.png" alt="">
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="home-search-right">
                            <a href="#" class="primary-cta">
                                HS-Code Chapter List
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="home-map"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12 col-xl-10">
                    <div class="results-area">
                        <div class="result-box" style="--border-bottom-color: #FFC65A">
                            <div class="result-img-area">
                                <img class="img-fluid" src="./assets/images/result-icon-1.png" alt="">
                            </div>
                            <div class="result-text-area">
                                <span class="result-name">Buyers</span>
                                <h5 class="result-count">18,419,263</h5>
                            </div>
                        </div>
                        <div class="result-box" style="--border-bottom-color: #BCD4FF">
                            <div class="result-img-area">
                                <img class="img-fluid" src="./assets/images/result-icon-2.png" alt="">
                            </div>
                            <div class="result-text-area">
                                <span class="result-name">Countries</span>
                                <h5 class="result-count">181</h5>
                            </div>
                        </div>
                        <div class="result-box" style="--border-bottom-color: #9EF7CE">
                            <div class="result-img-area">
                                <img class="img-fluid" src="./assets/images/result-icon-3.png" alt="">
                            </div>
                            <div class="result-text-area">
                                <span class="result-name">21 Sections</span>
                                <h5 class="result-count">HS-Code List</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include './includes/footer.php' ?>
<script src="./assets/js/index.js"></script>


<script>
    const buyersData = {
        RU: {
            name: "Russia",
            buyers: 120
        },
        CN: {
            name: "China",
            buyers: 300
        },
        IN: {
            name: "India",
            buyers: 450
        },
        CA: {
            name: "Canada",
            buyers: 200
        },
        BR: {
            name: "Brazil",
            buyers: 150
        },
        DZ: {
            name: "Algeria",
            buyers: 80
        },
        AU: {
            name: "Australia",
            buyers: 100
        },
    };

    const data = buyersData;
    const selectedRegions = ["RU", "CN", "IN", "CA", "BR", "DZ", "AU"];

    const map = new jsVectorMap({
        selector: "#home-map",
        map: "world",
        onLoaded(map) {
            window.addEventListener("resize", () => {
                map.updateSize();
            });
        },
        selectedRegions: selectedRegions,
        regionStyle: {
            initial: {
                fill: "#CACACA",
            },
            selected: {
                fill: "#989898",
            },
        },
        regionsSelectable: true,
        onRegionTooltipShow(event, tooltip, code) {
            const normalizedCode = code.toUpperCase();
            const countryData = data[normalizedCode];
            if (countryData) {
                tooltip.text(
                    `<h5 class="m-0 chart-coutry-name">${countryData.name}</h5>` +
                    `<span class="m-0 chart-coutry-buyers">${countryData.buyers}</span>`,
                    true // Enables HTML rendering
                );
                tooltip.css({
                    "background-color": "#fff",
                    "padding": "7px 14px 11px 15px ",
                    "border-radius": "15px",
                    "width": "95px",
                    "color": "#343434",
                    "font-weight": "medium",
                    "font-size": "10px",
                    "margin": "0",
                    "height": "auto",
                    "width": "95px",
                    "align-content": "center",
                });
            }
        },
    });
</script>