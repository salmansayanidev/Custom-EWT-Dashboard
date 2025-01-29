<?php include "./includes/header.php"; ?>
<link rel="stylesheet" href="./assets/css/country-analysis.css">


<main class="main">
    <section class="trade-analysis-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12 col-xl-10">
                    <div class="section-title-area">
                        <h1 class="section-title m-0">Explore World Trades</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Country Analysis</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="home-search-main-area">
                                <form action="">
                                    <div class="home-search-left">
                                        <div class="">
                                            <input type="radio" class="d-none search-radio" name="import_export_radio" value="Imports" checked id="Imports">
                                            <label for="Imports" class="primary-btn">
                                                Imports
                                            </label>
                                        </div>
                                        <div class="">
                                            <input type="radio" class="d-none search-radio" name="import_export_radio" value="Exports" id="Exports">
                                            <label for="Exports" class="primary-btn btn-2">
                                                Exports
                                            </label>
                                        </div>
                                        <div class="">
                                            <div class="tags-input-container search-field tags-input" id="">
                                                <input type="text" id="" class="tag-input" placeholder="Please add 1 or more hs code or product" />
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
                                        Advanced Search
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="trade-analysis-filter-area">
                                <div class="row align-items-end">
                                    <div class="col-12 col-lg-5">
                                        <ul class="filter-btns-right-list justify-content-start">
                                            <li class="filter-btns-right-list-item">
                                                <div class="total-shipment-value-area">
                                                    <p class="total-shipment-text">Total Shipments <strong>9,433,226</strong></p>
                                                </div>
                                            </li>
                                            <li class="filter-btns-right-list-item">
                                                <div class="total-shipment-value-area">
                                                    <p class="total-shipment-text">Found Countries <strong>207</strong></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <ul class="filter-btns-left-list align-items-end justify-content-end">
                                            <li class="filter-btns-left-list-item">
                                                <select class="all-continent-select">
                                                    <option></option>
                                                    <option value="one">One</option>
                                                    <option value="two">Two</option>
                                                    <option value="three">Three</option>
                                                    <option value="three">Four</option>
                                                    <option value="three">Five</option>
                                                    <option value="three">Six</option>
                                                    <option value="three">Seven</option>
                                                    <option value="three">Eight</option>
                                                    <option value="three">Nine</option>
                                                    <option value="three">Ten</option>
                                                </select>
                                            </li>
                                            <li class="filter-btns-left-list-item">
                                                <select class="all-country-select">
                                                    <option></option>
                                                    <option value="one">One</option>
                                                    <option value="two">Two</option>
                                                    <option value="three">Three</option>
                                                    <option value="three">Four</option>
                                                    <option value="three">Five</option>
                                                    <option value="three">Six</option>
                                                    <option value="three">Seven</option>
                                                    <option value="three">Eight</option>
                                                    <option value="three">Nine</option>
                                                    <option value="three">Ten</option>
                                                </select>
                                            </li>
                                            <li class="filter-btns-left-list-item">
                                                <div class="year-text-area mb-1">
                                                    <span class="year-text fw-bold">Jan 19,2022 TO Jan 19,2023</span>
                                                </div>
                                                <div class="year-radio-area">
                                                    <div class="year-radio-inner">
                                                        <input type="radio" class="d-none year-radio" checked name="year_radio" value="" id="1year">
                                                        <label for="1year" class="year-radio-label">
                                                            1 Year
                                                        </label>
                                                    </div>
                                                    <div class="year-radio-inner">
                                                        <input type="radio" class="d-none year-radio" name="year_radio" value="" id="2year">
                                                        <label for="2year" class="year-radio-label">
                                                            2 Year
                                                        </label>
                                                    </div>
                                                    <div class="year-radio-inner">
                                                        <input type="radio" class="d-none year-radio" name="year_radio" value="" id="3year">
                                                        <label for="3year" class="year-radio-label">
                                                            3 Year
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container  mt-5">
            <div class="heading">
                <h4>Asia</h4>
            </div>
            <div class="row bg-white py-5 mt-4">
                <div class="col-12 col-lg-3">
                    <div class="countryBox">
                        <img src="./assets/images/country-flag-3.png" class="img-fluid">
                        <div class="rightBox">
                            <ul>
                                <li>Import</li>
                                <li>Export</li>
                            </ul>
                            <h4>Afghanistan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="countryBox">
                        <img src="./assets/images/country-flag-3.png" class="img-fluid">
                        <div class="rightBox">
                            <ul>
                                <li>Import</li>
                                <li>Export</li>
                            </ul>
                            <h4>Turkey</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="countryBox">
                        <img src="./assets/images/country-flag-3.png" class="img-fluid">
                        <div class="rightBox">
                            <ul>
                                <li>Import</li>
                                <li>Export</li>
                            </ul>
                            <h4>Afghanistan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="countryBox">
                        <img src="./assets/images/country-flag-3.png" class="img-fluid">
                        <div class="rightBox">
                            <ul>
                                <li>Import</li>
                                <li>Export</li>
                            </ul>
                            <h4>Afghanistan</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  mt-5">
            <div class="heading">
                <h4>Europe</h4>
            </div>
            <div class="row bg-white py-5 mt-4">
                <div class="col-12 col-lg-3">
                    <div class="countryBox">
                        <img src="./assets/images/country-flag-3.png" class="img-fluid">
                        <div class="rightBox">
                            <ul>
                                <li>Import</li>
                                <li>Export</li>
                            </ul>
                            <h4>Afghanistan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="countryBox">
                        <img src="./assets/images/country-flag-3.png" class="img-fluid">
                        <div class="rightBox">
                            <ul>
                                <li>Import</li>
                                <li>Export</li>
                            </ul>
                            <h4>Afghanistan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="countryBox">
                        <img src="./assets/images/country-flag-3.png" class="img-fluid">
                        <div class="rightBox">
                            <ul>
                                <li>Import</li>
                                <li>Export</li>
                            </ul>
                            <h4>Afghanistan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="countryBox">
                        <img src="./assets/images/country-flag-3.png" class="img-fluid">
                        <div class="rightBox">
                            <ul>
                                <li>Import</li>
                                <li>Export</li>
                            </ul>
                            <h4>Afghanistan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="countryBox">
                        <img src="./assets/images/country-flag-3.png" class="img-fluid">
                        <div class="rightBox">
                            <ul>
                                <li>Import</li>
                                <li>Export</li>
                            </ul>
                            <h4>Afghanistan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="countryBox">
                        <img src="./assets/images/country-flag-3.png" class="img-fluid">
                        <div class="rightBox">
                            <ul>
                                <li>Import</li>
                                <li>Export</li>
                            </ul>
                            <h4>Afghanistan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="countryBox">
                        <img src="./assets/images/country-flag-3.png" class="img-fluid">
                        <div class="rightBox">
                            <ul>
                                <li>Import</li>
                                <li>Export</li>
                            </ul>
                            <h4>Afghanistan</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="countryBox">
                        <img src="./assets/images/country-flag-3.png" class="img-fluid">
                        <div class="rightBox">
                            <ul>
                                <li>Import</li>
                                <li>Export</li>
                            </ul>
                            <h4>Afghanistan</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>

<?php include "./includes/footer.php" ?>
<script src="./assets/js/trade-analysis.js"></script>


<script>
    var $disabledResults = $(".all-continent-select");
    $disabledResults.select2({
        placeholder: 'All Continents',
        allowClear: false
    });

    var $disabledResults = $(".all-country-select");
    $disabledResults.select2({
        placeholder: 'All Countries',
        allowClear: false
    });
</script>