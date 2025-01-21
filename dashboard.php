<?php include "./includes/header.php"; ?>
<link rel="stylesheet" href="./assets/css/dashboard.css">

<main class="main">
    <section class="dashboard-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="dashboard-main-area">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="sm-title pl-14px mb-10px">Profile View</h3>
                            </div>
                            <div class="col-12 col-lg-5 col-xl-4 brder-right">
                                <div class="dashboard-left">
                                    <div class="dash-top-left">
                                        <div class="pro-select-area position-relative">
                                            <select class="form-select profile-select" aria-label="Default select example">
                                                <option selected>Sellers</option>
                                                <option value="1">Buyers</option>
                                            </select>
                                            <span class="select-arrow-down">
                                                <i class="fa-solid fa-angle-down"></i>
                                            </span>
                                        </div>
                                        <div class="">
                                            <a href="#" class="primary-cta w-auto">
                                                View all
                                            </a>
                                        </div>
                                    </div>
                                    <hr class="middle-line">
                                    <ul class="selected-country-list">
                                        <li class="selected-country-list-item">
                                            <div class="country-img-area">
                                                <img class="img-fluid country-img" src="./assets/images/country-flag-1.png" alt="">
                                            </div>
                                            <div class="select-country-detail">
                                                <span class="select-user-cat">Sellers</span>
                                                <h3 class="select-country-name m-0">Russia-1</h3>
                                            </div>
                                        </li>
                                        <li class="selected-country-list-item">
                                            <div class="country-img-area">
                                                <img class="img-fluid country-img" src="./assets/images/country-flag-2.png" alt="">
                                            </div>
                                            <div class="select-country-detail">
                                                <span class="select-user-cat">Sellers</span>
                                                <h3 class="select-country-name m-0">China-1</h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-lg-7 col-xl-8">
                                <div class="dashboard-right">
                                    <div class="dashboard-map" id="dash-map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="dashboard-sm-box" style="--border-bottom-color: #FFC65A">
                        <div class="dash-box-top">
                            <div class="dash-box-top-left">
                                <img class="img-fluid" src="./assets/images/global-search.png" alt="">
                                <h3 class="sm-title m-0">Recent Searches</h3>
                            </div>
                            <div class="dash-box-top-right">
                                <a href="#" class="view-all-cta">View all</a>
                            </div>
                        </div>
                        <ul class="search-list">
                            <li class="search-list-item">
                                <p class="sm-para">1. Penta Technology Products Distribution Trade Joint Stock Company</p>
                            </li>
                            <li class="search-list-item">
                                <p class="sm-para">2. Buyers- Pen</p>
                            </li>
                            <li class="search-list-item">
                                <p class="sm-para">3. Buyers- Pen</p>
                            </li>
                            <li class="search-list-item">
                                <p class="sm-para">4. Buyers- Pen</p>
                            </li>
                            <li class="search-list-item">
                                <p class="sm-para">5. Trade Analysis Export- 01012110</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="dashboard-sm-box" style="--border-bottom-color: #BCD4FF">
                        <div class="dash-box-top">
                            <div class="dash-box-top-left">
                                <img class="img-fluid" src="./assets/images/notification.png" alt="">
                                <h3 class="sm-title m-0">Smart Box</h3>
                            </div>
                            <div class="dash-box-top-right">
                                <a href="#" class="view-all-cta">View all</a>
                            </div>
                        </div>
                        <div class="dash-box-center">
                            <h3 class="sm-title m-0">HS Codes: <strong>070110</strong></h3>
                            <ul class="smart-box-result-list">
                                <li class="smart-box-result-list-item">
                                    <div class="smart-box-img-area">
                                        <img class="img-fluid" src="./assets/images/smart-box-icon-1.png" alt="">
                                    </div>
                                    <div class="smart-box-text-area">
                                        <h3 class="smart-box-result-count">141651</h3>
                                        <span class="smart-box-result-name fw-regular">Shipments</span>
                                    </div>
                                </li>
                                <li class="smart-box-result-list-item">
                                    <div class="smart-box-img-area">
                                        <img class="img-fluid" src="./assets/images/smart-box-icon-2.png" alt="">
                                    </div>
                                    <div class="smart-box-text-area">
                                        <h3 class="smart-box-result-count">6114</h3>
                                        <span class="smart-box-result-name fw-regular">Buyers</span>
                                    </div>
                                </li>
                                <li class="smart-box-result-list-item">
                                    <div class="smart-box-img-area">
                                        <img class="img-fluid" src="./assets/images/smart-box-icon-3.png" alt="">
                                    </div>
                                    <div class="smart-box-text-area">
                                        <h3 class="smart-box-result-count">5386</h3>
                                        <span class="smart-box-result-name fw-regular">Sellers</span>
                                    </div>
                                </li>
                            </ul>
                            <h4 class="comp-sm-title">Companies</h4>
                            <ul class="companies-list">
                                <li class="companies-list-item">
                                    <p class="comp-sm-para">1. RAJI FOODS AUST PTY LTD (AUSTRALIA), Buyer</p>
                                </li>
                                <li class="companies-list-item">
                                    <p class="comp-sm-para">2. CHAIN (GERMANY), Buyer</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="dashboard-sm-box" style="--border-bottom-color: #9EF7CE">
                        <div class="dash-box-top">
                            <div class="dash-box-top-left">
                                <img class="img-fluid" src="./assets/images/document-text.png" alt="">
                                <h3 class="sm-title m-0">Updates</h3>
                            </div>
                            <div class="dash-box-top-right">
                                <a href="#" class="view-all-cta">View all</a>
                            </div>
                        </div>
                        <ul class="updates-list">
                            <li class="updates-list-item">
                                <p class="sm-para">1. Ghana data for October 2024 is now live 29 Dec,2024</p>
                            </li>
                            <li class="updates-list-item">
                                <p class="sm-para">2. Cameroon data for October 2024 is now live 29 Dec,2024</p>
                            </li>
                            <li class="updates-list-item">
                                <p class="sm-para">3. Botswana data for October 2024 is now live 29 Dec,2024</p>
                            </li>
                            <li class="updates-list-item">
                                <p class="sm-para">4. India data for December 10th to 20th, 2024, is now live. 24 Dec,2024</p>
                            </li>
                            <li class="updates-list-item">
                                <p class="sm-para">5. Nigeria data for October 2024 is now live 22 Dec,2024</p>
                            </li>
                            <li class="updates-list-item">
                                <p class="sm-para">6. Namibia data for October 2024 is now live 22 Dec,2024</p>
                            </li>
                            <li class="updates-list-item">
                                <p class="sm-para">7. Kazakhstan data for September 2024 is now live 22 Dec,2024</p>
                            </li>
                            <li class="updates-list-item">
                                <p class="sm-para">8. Sri Lanka data for September 2024 is now live 22 Dec,2024</p>
                            </li>
                            <li class="updates-list-item">
                                <p class="sm-para">9. Costa Rica data for September 2024 is now live 22 Dec,2024</p>
                            </li>
                            <li class="updates-list-item">
                                <p class="sm-para">10. Costa Rica data for September 2024 is now live 22 Dec,2024</p>
                            </li>
                            <li class="updates-list-item">
                                <p class="sm-para">11. Costa Rica data for September 2024 is now live 22 Dec,2024</p>
                            </li>
                            <li class="updates-list-item">
                                <p class="sm-para">12. Costa Rica data for September 2024 is now live 22 Dec,2024</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php include "./includes/footer.php"; ?>

<script>
    const buyersData = {
        RU: { name: "Russia", buyers: 120000 },
        CN: { name: "China", buyers: 300000 },
    };

    const data = buyersData;
    const selectedRegions = ["RU", "CN"];

    const map = new jsVectorMap({
        selector: "#dash-map",
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
                    true
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