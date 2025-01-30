<?php include "./includes/header.php"; ?>
<link rel="stylesheet" href="./assets/css/smart-box.css">

<main class="main">
    <section class="smart-box-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title-area border-0 pb-0">
                        <h1 class="section-title">Smart Box </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Smart Box</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12">
                    <div class="smart-box-main">
                        <div class="row mb-5">
                            <div class="col-12 col-lg-6">
                                <div class="">
                                    <h3 class="port-analysis-title">HS Codes</h3>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <ul class="filter-btns-right-list">
                                    <li class="filter-btns-left-list-item">
                                        <div class="year-radio-area position-relative">
                                            <span class="year-text fw-bold">Jan 19,2022 TO Jan 19,2023</span>
                                            <div class="year-radio-inner">
                                                <input type="radio" class="d-none year-radio" checked name="year_radio" value="" id="1Month">
                                                <label for="1Month" class="year-radio-label">
                                                    1 Month
                                                </label>
                                            </div>
                                            <div class="year-radio-inner">
                                                <input type="radio" class="d-none year-radio" name="year_radio" value="" id="3Month">
                                                <label for="3Month" class="year-radio-label">
                                                    3 Month
                                                </label>
                                            </div>
                                            <div class="year-radio-inner">
                                                <input type="radio" class="d-none year-radio" name="year_radio" value="" id="6Month">
                                                <label for="6Month" class="year-radio-label">
                                                    6 Month
                                                </label>
                                            </div>
                                            <div class="year-radio-inner">
                                                <input type="radio" class="d-none year-radio" name="year_radio" value="" id="1year">
                                                <label for="1year" class="year-radio-label">
                                                    1 Year
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="filter-btns-right-list-item">
                                        <button class="filter-btn" id="picker" type="button">
                                            <img class="img-fluid" src="./assets/images/filter-icon-1.png" alt="">
                                            Date/Year
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="smart-box-area">
                                    <div class="smart-box-area-top">
                                        <h3 class="smart-box-title">HS Codes : cars</h3>
                                        <div class="smart-box-btns-area">
                                            <button class="smart-box-btn red-color" type="button">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </button>
                                            <button class="smart-box-btn" type="button">
                                                <i class="fa-solid fa-angle-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="results-area">
                                        <a href="#" class="result-box" style="--border-bottom-color: #FFC65A">
                                            <div class="result-img-area">
                                                <img class="img-fluid" src="./assets/images/result-icon-1.png" alt="">
                                            </div>
                                            <div class="result-text-area">
                                                <h5 class="result-count mb-2">Shipments</h5>
                                                <span class="result-name">18,419,263 </span>
                                            </div>
                                        </a>
                                        <div class="result-box" style="--border-bottom-color: #BCD4FF">
                                            <div class="result-img-area">
                                                <img class="img-fluid" src="./assets/images/result-icon-2.png" alt="">
                                            </div>
                                            <div class="result-text-area">
                                                <h5 class="result-count">Buyers</h5>
                                                <span class="result-name">181</span>
                                            </div>
                                        </div>
                                        <div class="result-box" style="--border-bottom-color: #9EF7CE">
                                            <div class="result-img-area">
                                                <img class="img-fluid" src="./assets/images/result-icon-3.png" alt="">
                                            </div>
                                            <div class="result-text-area">
                                                <h5 class="result-count">Sellers</h5>
                                                <span class="result-name">161,770</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>





<?php include "./includes/footer.php"; ?>
<script>
    // filter date picker
    $('#picker').daterangepicker();
</script>