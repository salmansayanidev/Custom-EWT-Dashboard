<?php include "./includes/header.php"; ?>
<link rel="stylesheet" href="./assets/css/company-profile.css">

<main class="main">
    <section class="company-profile-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12 col-xl-10">
                    <div class="company-profile-filter-area mt-0 mb-10px">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="company-profile-filter-innner">
                                    <ul class="filter-btns-left-list d-flex justify-content-start align-items-center gap-10px">
                                        <li class="filter-btns-left-list-item position-relative">
                                            <button class="filter-btn-2 sm-btn bg-white curr-filter-btn" type="button">
                                                Currency (USD)
                                                <i class="fa-solid fa-angle-down"></i>
                                            </button>
                                            <ul class="currency-filter-list" style="opacity: 1;">
                                                <li class="currency-filter-list-item">
                                                    <div class="currency-radio-area">
                                                        <label for="USD" class="column-filter-label-text currency-radio-label">
                                                            <input type="radio" class="currency-radio" name="currency_radio" value="USD" checked="" id="USD">
                                                            USD
                                                        </label>
                                                    </div>
                                                    <div class="currency-inner-radio-area">
                                                        <div class="currency-sm-radio-area">
                                                            <input type="radio" class="d-none inner-curr-radio" name="USD_currencey_radio" checked="" value="" id="USD-full">
                                                            <label class="curr-filter-sm-label" for="USD-full">
                                                                Full
                                                            </label>
                                                            <input type="radio" class="d-none inner-curr-radio" name="USD_currencey_radio" value="" id="USD-mil-bil">
                                                            <label class="curr-filter-sm-label" for="USD-mil-bil">
                                                                Mil &amp; Bil
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="currency-filter-list-item">
                                                    <div class="currency-radio-area">
                                                        <label for="INR" class="column-filter-label-text currency-radio-label">
                                                            <input type="radio" class="currency-radio" name="currency_radio" value="INR" id="INR">
                                                            INR
                                                        </label>
                                                    </div>
                                                    <div class="currency-inner-radio-area">
                                                        <div class="currency-sm-radio-area">
                                                            <input type="radio" class="d-none inner-curr-radio" disabled="" checked="" name="INR_currencey_radio" value="" id="INR-full">
                                                            <label class="curr-filter-sm-label" for="INR-full">
                                                                Full
                                                            </label>
                                                            <input type="radio" class="d-none inner-curr-radio" disabled="" name="INR_currencey_radio" value="" id="INR-lac-cr">
                                                            <label class="curr-filter-sm-label" for="INR-lac-cr">
                                                                Mil &amp; Bil
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="currency-filter-list-item">
                                                    <div class="currency-radio-area">
                                                        <label for="AED" class="column-filter-label-text currency-radio-label">
                                                            <input type="radio" class="currency-radio" name="currency_radio" value="AED" id="AED">
                                                            AED
                                                        </label>
                                                    </div>
                                                    <div class="currency-inner-radio-area">
                                                        <div class="currency-sm-radio-area">
                                                            <input type="radio" class="d-none inner-curr-radio" disabled="" checked="" name="AED_currencey_radio" value="" id="AED-full">
                                                            <label class="curr-filter-sm-label" for="AED-full">
                                                                Full
                                                            </label>
                                                            <input type="radio" class="d-none inner-curr-radio" disabled="" name="AED_currencey_radio" value="" id="AED-mil-bil">
                                                            <label class="curr-filter-sm-label" for="AED-mil-bil">
                                                                Mil &amp; Bil
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="filter-btns-left-list-item position-relative">
                                            <img class="flag-icon-img" src="./assets/images/flag-icon.png" alt="">
                                            <select class="form-select com-country-select w-100px bg-white" aria-label="Default select example">
                                                <option selected disabled="">country</option>
                                                <option value="1">country 1</option>
                                                <option value="2">country 2</option>
                                                <option value="3">country 3</option>
                                                <option value="4">country 4</option>
                                                <option value="5">country 5</option>
                                            </select>
                                        </li>
                                    </ul>
                                    <ul class="filter-btns-right-list">
                                        <li class="filter-btns-right-list-item">
                                            <button class="filter-btn" id="picker" type="button">
                                                <img class="img-fluid" src="./assets/images/filter-icon-1.png" alt="">
                                                Date/Year
                                            </button>
                                        </li>
                                        <li class="filter-btns-right-list-item">
                                            <button class="filter-btn" type="button">
                                                <img class="img-fluid" src="./assets/images/group-icon.png" alt="">
                                                Add buyer group
                                            </button>
                                        </li>
                                        <li class="filter-btns-right-list-item">
                                            <button class="filter-btn" type="button">
                                                <img class="img-fluid" src="./assets/images/contact-icon.png" alt="">
                                                Switch to seller profile
                                            </button>
                                        </li>
                                        <li class="filter-btns-right-list-item">
                                            <button class="filter-btn" type="button">
                                                <img class="img-fluid" src="./assets/images/notification-icon.png" alt="">
                                                Company alerts
                                            </button>
                                        </li>
                                        <li class="filter-btns-right-list-item">
                                            <button class="filter-btn" type="button">
                                                <img class="img-fluid" src="./assets/images/pin-icon.png" alt="">
                                                Pin
                                            </button>
                                        </li>
                                        <li class="filter-btns-right-list-item">
                                            <button class="filter-btn" type="button">
                                                <img class="img-fluid" src="./assets/images/danger-icon.png" alt="">
                                                Report an error
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-10">
                    <div class="company-detail-box mb-10px" style="--border-bottom-color: #7C59FF;">
                        <div class="company-detail-box-top">
                            <div class="company-detail-box-left">
                                <h6 class="comp-name-tag">Buyer Profile / Turkey</h6>
                                <h2 class="comp-lg-title">Penta Technology Products Distribution Trade Joint Stock Company</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="profile-views.php">Profile View</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Company Profile</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="company-detail-box-right">
                                <img class="img-fluid" src="./assets/images/country-img.png" alt="">
                            </div>
                        </div>
                        <ul class="company-profile-tabs-btn-list">
                            <li class="company-profile-tabs-btn-list-item">
                                <button class="comp-pro-tab-btn active" type="button" data-view="About">
                                    About Us
                                </button>
                            </li>
                            <li class="company-profile-tabs-btn-list-item">
                                <button class="comp-pro-tab-btn" type="button" data-view="Analytics">
                                    Analytics
                                </button>
                            </li>
                            <li class="company-profile-tabs-btn-list-item">
                                <button class="comp-pro-tab-btn" type="button" data-view="Port-Analysis">
                                    Port Analysis
                                </button>
                            </li>
                            <li class="company-profile-tabs-btn-list-item">
                                <button class="comp-pro-tab-btn" type="button" data-view="Nexus">
                                    Nexus
                                </button>
                            </li>
                            <li class="company-profile-tabs-btn-list-item">
                                <button class="comp-pro-tab-btn" type="button" data-view="Similar-Buyers">
                                    Similar Buyers
                                </button>
                            </li>
                            <li class="company-profile-tabs-btn-list-item">
                                <button class="comp-pro-tab-btn" type="button" data-view="Contact">
                                    Contact
                                </button>
                            </li>
                            <li class="company-profile-tabs-btn-list-item">
                                <button class="comp-pro-tab-btn" type="button" data-view="HS-Code-Product">
                                    Search HS Code / Product
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="company-profile active" data-content="About">
                    <div class="row justify-content-center">

                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="company-detail-box mb-10px" style="--border-bottom-color: #FFC65A;">
                                <h6 class="com-box-sm-title">About us</h6>
                                <p class="para"><strong>PENTA TECHNOLOGY PRODUCTS DISTRIBUTION TRADE JOINT STOCK COMPANY</strong> is a buyer of Electrical Transformers, Static converters (for Example, Rectifiers) And Inductors <strong>(HS Code: 8504),</strong> Microphones And Stands there for; Loud speakers, whether Or Not Mounted In Their enclosures; Headphones And earphones, Whether Or Not combined With A Microphone, And sets Consisting Of A Microphone <strong>(HS Code: 8518),</strong> Automatic Data Processing machines And Units There of; magnetic Or Optical Readers, machines For Transcribing Data on To Data Media In Coded For mand Machines For Processing such Data, Not Elsewhere Specified Or Included <strong>(HS Code: 8471),</strong> Other Printed Matter, Including Printed Pictures And Photographs <strong>(HS Code: 4911),</strong> Printing Machinery Used For printing By Means Of Plates, Cylinders And Other Printing Components Of Heading 8442; other Printers, Copying Machines And Facsimile Machines, Whether Or Not combined; Parts And Accessories thereof <strong>(HS Code: 8443),</strong> etc. More information on <strong>PENTA TECHNOLOGY PRODUCTS DISTRIBUTION TRADE JOINT STOCK COMPANY</strong> will be updated soon.</p>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="company-detail-box mb-10px" style="--border-bottom-color: #BCD4FF;">
                                <div class="comp-pro-chart-top ">
                                    <h6 class="com-box-sm-title m-0">Industry Analysis</h6>
                                    <div class="chart-btn-area">
                                        <button class="filter-btn" type="button" onclick="toggleChart1FullScreen()">
                                            <img class="img-fluid" src="./assets/images/full-screen-icon.png" alt="">
                                            Full screen
                                        </button>
                                        <button class="filter-btn" type="button">
                                            <img class="img-fluid" src="./assets/images/table-icon.png" alt="">
                                            Table
                                        </button>
                                    </div>
                                </div>
                                <div id="Industry-Analysis"></div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="company-detail-box mb-10px" style="--border-bottom-color: #FFA082;">
                                <div class="comp-pro-chart-top ">
                                    <h6 class="com-box-sm-title m-0">Main Import Products Analysis (Last 12 Months)</h6>
                                    <div class="chart-btn-area">
                                        <button class="digit-btn" type="button">
                                            2 Digit
                                        </button>
                                        <button class="digit-btn" type="button">
                                            4 Digit
                                        </button>
                                        <button class="digit-btn" type="button">
                                            6 Digit
                                        </button>
                                        <button class="digit-btn" type="button">
                                            8 Digit
                                        </button>
                                        <button class="filter-btn" type="button" onclick="toggleChart2FullScreen()">
                                            <img class="img-fluid" src="./assets/images/full-screen-icon.png" alt="">
                                            Full screen
                                        </button>
                                        <button class="filter-btn" type="button">
                                            <img class="img-fluid" src="./assets/images/table-icon.png" alt="">
                                            Table
                                        </button>
                                    </div>
                                </div>
                                <div id="main-import-products-analysis"></div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="company-detail-box mb-10px" style="--border-bottom-color: #9EF7CE;">
                                <h6 class="com-box-sm-title mb-4">Main Import Products</h6>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <h6 class="progress-sm-title mb-3">Value</h6>
                                    </div>
                                    <div class="col-12 col-lg-6"></div>
                                </div>
                                <div class="import-products-progress-area">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-6">
                                            <div class="progress import-product-progress" role="progressbar" aria-label="Example with label" aria-valuenow="20.68" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 20.68%">20.68%</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <p class="para"><strong>(84713000)</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="import-products-progress-area">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-6">
                                            <div class="progress import-product-progress" role="progressbar" aria-label="Example with label" aria-valuenow="10.93" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 10.93%">10.93%</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <p class="para">Other units of automatic data processing machines <strong>(84718000)</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="import-products-progress-area">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-6">
                                            <div class="progress import-product-progress" role="progressbar" aria-label="Example with label" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 10%">10%</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <p class="para"><strong>(85285210)</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="import-products-progress-area">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-6">
                                            <div class="progress import-product-progress" role="progressbar" aria-label="Example with label" aria-valuenow="9.55" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 9.55%">9.55%</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <p class="para"><strong>(85423190)</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="import-products-progress-area">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-6">
                                            <div class="progress import-product-progress" role="progressbar" aria-label="Example with label" aria-valuenow="8.03" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 8.03%">8.03%</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <p class="para">Parts and accessories of the machines of heading 8471:Other:Motherboards <strong>(84733020)</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="import-products-progress-area">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-6">
                                            <div class="progress import-product-progress" role="progressbar" aria-label="Example with label" aria-valuenow="5.06" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 5.06%">5.06%</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <p class="para">8471 41 or 8471 49, whether or not containing in the same housing one or two of the following types of unit: storage units, input units, output units Input or output units, whether or not containing storage units in the same housing: Printer: Mouse <strong>(84716060)</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="import-products-progress-area">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-6">
                                            <div class="progress import-product-progress" role="progressbar" aria-label="Example with label" aria-valuenow="20.06" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 20.06%">20.06%</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <p class="para"><strong>(84716070)</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="import-products-progress-area">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-6">
                                            <div class="progress import-product-progress" role="progressbar" aria-label="Example with label" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 50%">50%</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <p class="para">Other: Parts and accessories of goods of sub- heading 8443 31, 8443 32: Other <strong>(84439990)</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="import-products-progress-area">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-6">
                                            <div class="progress import-product-progress" role="progressbar" aria-label="Example with label" aria-valuenow="30.60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 30.60%">30.60%</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <p class="para"><strong>(85176200)</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="import-products-progress-area">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-6">
                                            <div class="progress import-product-progress" role="progressbar" aria-label="Example with label" aria-valuenow="40.60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 40.60%">40.60%</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <p class="para">Processing units other than those of sub-headings <strong>(84439990)</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="import-products-progress-area">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-lg-6">
                                            <div class="progress import-product-progress" role="progressbar" aria-label="Example with label" aria-valuenow="70.60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 70.60%">70.60%</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <p class="para">Others</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="products-chart-area">
                                    <div id="compare-chart-one"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="text-end mt-20px">
                                <button type="button" class="primary-cta border-0" data-view="Analytics">
                                    Analytics
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="company-profile" data-content="Analytics">
                    <div class="row justify-content-center">

                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="company-detail-box mb-10px" style="--border-bottom-color: #FFC65A;">
                                <h6 class="com-box-sm-title m-0">Exports Summary of All Products</h6>
                                <div class="results-area">
                                    <div class="result-box gap-10px" style="--border-bottom-color: #BCD4FF">
                                        <div class="result-img-area">
                                            <img class="img-fluid" src="./assets/images/result-icon-4.png" alt="">
                                        </div>
                                        <div class="result-text-area">
                                            <span class="result-name">Currency (USD)</span>
                                            <h5 class="result-count">$1,341,566</h5>
                                        </div>
                                    </div>
                                    <div class="result-box gap-10px" style="--border-bottom-color: #FFA082">
                                        <div class="result-img-area">
                                            <img class="img-fluid" src="./assets/images/result-icon-5.png" alt="">
                                        </div>
                                        <div class="result-text-area">
                                            <span class="result-name">Quantity</span>
                                            <h5 class="result-count">15,886</h5>
                                        </div>
                                    </div>
                                    <div class="result-box gap-10px" style="--border-bottom-color: #9EF7CE">
                                        <div class="result-img-area">
                                            <img class="img-fluid" src="./assets/images/result-icon-6.png" alt="">
                                        </div>
                                        <div class="result-text-area">
                                            <span class="result-name">Please select unit type</span>
                                            <h5 class="result-count">Unit types</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="company-detail-box mb-10px" style="--border-bottom-color: #BCD4FF;">
                                <div class="comp-pro-chart-top ">
                                    <h6 class="com-box-sm-title m-0">Monthly Exports Pattern Analysis of All Products</h6>
                                    <div class="chart-btn-area">
                                        <button class="filter-btn" type="button" onclick="toggleChart3FullScreen()">
                                            <img class="img-fluid" src="./assets/images/full-screen-icon.png" alt="">
                                            Full screen
                                        </button>
                                        <button class="filter-btn" type="button">
                                            <img class="img-fluid" src="./assets/images/table-icon.png" alt="">
                                            Table
                                        </button>
                                    </div>
                                </div>
                                <div id="Monthly-Exports-Pattern-Analysis"></div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="company-detail-box mb-10px" style="--border-bottom-color: #FFA082;">
                                <h6 class="com-box-sm-title m-0">Total Transactional Analysis</h6>
                                <div class="total-transactional-analysis-table-area">
                                    <table class="datatables-ajax table-responsive table-stripe table total-transactional-table" id="total-transactional-analysis-table">
                                        <thead>
                                            <tr>
                                                <th>Hs Code</th>
                                                <th width="50%">Description</th>
                                                <th>Buyer Country</th>
                                                <th>Unit</th>
                                                <th>Quantity</th>
                                                <th>Value (USD)</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>844399909000</td>
                                                <td>
                                                    <p class="transactional-disc">XEROX 604K23670 FEED/RETARD/NUD,XEROX 126N00433 FUSER 220V, 948K28413 WS TCNVCLRHUSAS</p>
                                                </td>
                                                <td>Turkey</td>
                                                <td>KGS</td>
                                                <td>41.7</td>
                                                <td>$3,192.86</td>
                                            </tr>
                                            <tr>
                                                <td>844399909000</td>
                                                <td>
                                                    <p class="transactional-disc">XEROX 006R01831 C7100 YELLOW TONER, XEROX 006R01830 C7100 MAGENTA TONER, TONER DMO,XEROX 106R03396 VERSALINK B70XX BLACK,XEROX 006R01819 VERSALINK B71XX BLACK</p>
                                                </td>
                                                <td>Turkey</td>
                                                <td>KGS</td>
                                                <td>57.64</td>
                                                <td>$4,412.89</td>
                                            </tr>
                                            <tr>
                                                <td>844399909000</td>
                                                <td>
                                                    <p class="transactional-disc">XEROX 115R00128 VERSALINK C7000 WASTE, MFP B,XEROX 115R00115 VERSALINK B7XXX/C70XX</p>
                                                </td>
                                                <td>Turkey</td>
                                                <td>KGS</td>
                                                <td>37.59</td>
                                                <td>$2,878.37</td>
                                            </tr>
                                            <tr>
                                                <td>841459150000</td>
                                                <td>
                                                    <p class="transactional-disc">XEROX 127K56981 ESS FAN</p>
                                                </td>
                                                <td>Turkey</td>
                                                <td>KGS</td>
                                                <td>0.24</td>
                                                <td>$18.15</td>
                                            </tr>
                                            <tr>
                                                <td>844399909000</td>
                                                <td>
                                                    <p class="transactional-disc">XEROX 006R01703 C8000 MAGENTA TONER, XEROX 006R01702 C8000CYAN TONER</p>
                                                </td>
                                                <td>Turkey</td>
                                                <td>KGS</td>
                                                <td>32.72</td>
                                                <td>$2,505.86</td>
                                            </tr>
                                            <tr>
                                                <td>847330200000</td>
                                                <td>
                                                    <p class="transactional-disc">ASUE2S TUF4B GAMING21 B560M-PL8AUS,ASUS PRI2 ME H510M-K MB,ASUS PROART B760-CREATOR,ASUS PRIME Z790-A WIFI,ASUS PRIME H610M-R D4-SI,ASUS MB TUF GAMING X670E-PLUS WIFI,ASUS MB ROG STRIX X670E-I GAMING WIFI,ASUS ROG STRIX Z790-A GAMING WIFI II,ASUS TUF GAMI</p>
                                                </td>
                                                <td>Taiwan</td>
                                                <td>PIECE</td>
                                                <td>19</td>
                                                <td>$3,387.07</td>
                                            </tr>
                                            <tr>
                                                <td>847180000000</td>
                                                <td>
                                                    <p class="transactional-disc">ASUE2S GEF4BORCE DU21AL-RTX4068A0-O8G,ASUS 2 TUF-RTX4080-16G-GAMING,ASUS ROG STRIX RTX4090 O24G WHITE,ASUS TUF+ RTX4070 O12G GAMING,ASUS DUAL RTX 4060TI O8G</p>
                                                </td>
                                                <td>Taiwan</td>
                                                <td>PIECE</td>
                                                <td>6</td>
                                                <td>$4,945</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="company-detail-box mb-10px" style="--border-bottom-color: #9EF7CE;">
                                <div class="comp-pro-chart-top d-flex justify-content-between align-items-center">
                                    <h6 class="com-box-sm-title m-0">Export Markets Analysis of All Products</h6>
                                    <button class="filter-btn" type="button">
                                        <img class="img-fluid" src="./assets/images/table-icon.png" alt="">
                                        Table
                                    </button>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-3 brder-right">
                                        <div class="dashboard-left">
                                            <ul class="selected-country-list">
                                                <li class="selected-country-list-item">
                                                    <div class="country-img-area">
                                                        <img class="img-fluid country-img" src="./assets/images/country-flag-3.png" alt="">
                                                    </div>
                                                    <div class="select-country-detail">
                                                        <h3 class="select-country-name m-0">Turkey</h3>
                                                    </div>
                                                </li>
                                                <li class="selected-country-list-item">
                                                    <div class="country-img-area">
                                                        <img class="img-fluid country-img" src="./assets/images/country-flag-4.png" alt="">
                                                    </div>
                                                    <div class="select-country-detail">
                                                        <h3 class="select-country-name m-0">Taiwan</h3>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <div class="dashboard-right">
                                            <div class="export-market-analysis-map" id="export-market-analysis-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="text-end d-flex justify-content-between mt-20px">
                                <button type="button" class="primary-cta border-0" data-view="About">
                                    About Us
                                </button>
                                <button type="button" class="primary-cta border-0" data-view="Port-Analysis">
                                    Port Analysis
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="company-profile" data-content="Port-Analysis">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="company-detail-box mb-10px" style="--border-bottom-color: #FFC65A;">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div id="port-analysis-pie-chart-1"></div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div id="port-analysis-pie-chart-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="text-end d-flex justify-content-between mt-20px">
                                <button type="button" class="primary-cta border-0" data-view="Analytics">
                                    Analytics
                                </button>
                                <button type="button" class="primary-cta border-0" data-view="Nexus">
                                    Nexus
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="company-profile" data-content="Nexus">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="company-detail-box mb-10px" style="--border-bottom-color: #FFC65A;">
                                <div class="comp-pro-chart-top ">
                                    <h6 class="com-box-sm-title m-0">Company Nexus</h6>
                                    <div class="nexus-box-top">
                                        <form action="">
                                            <ul class="nexus-filter-list">
                                                <li class="nexus-filter-list-item">
                                                    <select class="form-select pro-filter-select w-82px bg-white" aria-label="Default select example">
                                                        <option selected="" disabled="">HS-Codes</option>
                                                        <option value="1">12</option>
                                                        <option value="2">13</option>
                                                        <option value="2">14</option>
                                                        <option value="2">15</option>
                                                        <option value="2">16</option>
                                                        <option value="2">17</option>
                                                        <option value="2">18</option>
                                                        <option value="2">19</option>
                                                        <option value="2">20</option>
                                                    </select>
                                                </li>
                                                <li class="nexus-filter-list-item">
                                                    <select class="form-select pro-filter-select w-75px bg-white" aria-label="Default select example">
                                                        <option selected="" disabled="">All years</option>
                                                        <option value="1">2025</option>
                                                        <option value="2">2024</option>
                                                        <option value="2">2023</option>
                                                        <option value="2">2022</option>
                                                        <option value="2">2021</option>
                                                        <option value="2">2020</option>
                                                    </select>
                                                </li>
                                                <li class="nexus-filter-list-item">
                                                    <input type="text" class="pro-filter-search bg-white w-100px" placeholder="Product" name="" id="">
                                                </li>
                                                <li class="nexus-filter-list-item">
                                                    <button class="pro-filter-select" type="submit">Go</button>
                                                </li>
                                                <li class="nexus-filter-list-item">
                                                    <button class="pro-filter-select bg-white" type="button">Reset</button>
                                                </li>
                                            </ul>
                                        </form>
                                        <div class="chart-btn-area">
                                            <button class="filter-btn" type="button" onclick="sankeyDiagramFullScreen()">
                                                <img class="img-fluid" src="./assets/images/full-screen-icon.png" alt="">
                                                Full screen
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="nexus-sankey-diagram-main">
                                    <div class="sankey-diagram-chart" id="sankey-diagram"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-xl-10">
                            <div class="text-end d-flex justify-content-between mt-20px">
                                <button type="button" class="primary-cta border-0" data-view="Port-Analysis">
                                    Port Analysis
                                </button>
                                <button type="button" class="primary-cta border-0" data-view="Similar-Buyers">
                                    Similar Sellers
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "./includes/footer.php"; ?>
<script src="./assets/js/company-profile.js"></script>

<script>
    // Industry Analysis chart js
    const chart = new Highcharts.Chart({
        chart: {
            renderTo: 'Industry-Analysis',
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 0,
                beta: 0,
                depth: 50,
                viewDistance: 25
            }
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '1rem',
                    fontFamily: 'Roboto',
                    fontWeight: 'medium',
                    color: '#343434',
                    lineHeight: '12px',
                    textalign: 'center'
                }
            }
        },
        yAxis: {
            title: {
                text: 'Values',
                style: {
                    fontSize: '1rem',
                    fontFamily: 'Roboto',
                    fontWeight: 'medium',
                    color: '#343434',
                    lineheight: '12px'
                }
            },
            labels: {
                formatter: function() {
                    return this.value + 'M';
                },
                style: {
                    fontSize: '1rem',
                    fontFamily: 'Roboto',
                    fontWeight: 'medium',
                    color: '#343434',
                    lineHeight: '12px'
                }
            }
        },

        tooltip: {
            headerFormat: '<b>{point.key}</b><br>',
            pointFormat: 'Cars sold: {point.y}',
            style: {
                fontSize: '1rem',
                fontFamily: 'Roboto',
                fontWeight: 'medium',
                color: '#343434',
                lineHeight: '12px'
            }

        },
        title: {
            text: ''
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        series: [{
            data: [
                ['Product Name', 1800],
                ['Pro 2', 1242],
                ['Pro 3', 1074],
                ['Pro 4', 832],
                ['Pro 5', 593],
                ['Pro 6', 509],
                ['Pro 7', 471],
                ['Pro 8', 442],
                ['Pro 9', 385],
                ['Pro 10', 371]
            ],
            colorByPoint: true,
        }],
        exporting: {
            enabled: true
        }
    });

    function toggleChart1FullScreen() {
        chart.fullscreen.toggle();
    }

    // main-import-products-analysis chart js

    const chart2 = Highcharts.chart({
        chart: {
            type: 'column',
            renderTo: 'main-import-products-analysis',
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 0,
                depth: 50,
                viewDistance: 25
            }
        },
        title: {
            text: ''
        },
        xAxis: {
            categories: ['October <br> 2023', 'November <br> 2023', 'December <br> 2023', 'January <br> 2024', 'February <br> 2024', 'March <br> 2024', 'April <br> 2024', 'May <br> 2024', 'June <br> 2024', 'July <br> 2024', 'August <br> 2024', 'September <br> 2024'],
            labels: {
                style: {
                    fontSize: '1rem',
                    fontFamily: 'Roboto',
                    fontWeight: 'medium',
                    color: '#343434',
                    lineHeight: '12px',
                    textalign: 'center'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Value (USD)',
                style: {
                    fontSize: '1rem',
                    fontFamily: 'Roboto',
                    fontWeight: 'medium',
                    color: '#343434',
                    lineheight: '12px'
                }
            },
            labels: {
                formatter: function() {
                    return this.value + 'M';
                },
                style: {
                    fontSize: '1rem',
                    fontFamily: 'Roboto',
                    fontWeight: 'medium',
                    color: '#343434',
                    lineHeight: '12px'
                }
            }

        },
        tooltip: {
            pointFormat: '<span style="color:{series.color}">{series.name}</span>' +
                ': <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            shared: true,
            style: {
                fontSize: '1rem',
                fontFamily: 'Roboto',
                fontWeight: 'medium',
                color: '#343434',
                lineHeight: '12px'
            }
        },
        plotOptions: {
            column: {
                stacking: 'percent',
                dataLabels: {
                    enabled: true,
                    format: '{point.percentage:.0f}%',
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        fontFamily: 'Roboto',
                        fontSize: '10px',
                        textOutline: 'none'
                    }
                }
            }
        },
        legend: {
            align: 'center',
            verticalAlign: 'bottom',
            layout: 'horizontal',
            itemStyle: {
                fontSize: '1.2rem',
                fontFamily: 'Roboto',
                fontWeight: 'bold',
                color: '#343434'
            },
            itemDistance: 60,
        },
        series: [{
            name: 'Road',
            data: [434, 290, 307, 400, 350, 100, 200, 450, 700, 600, 50, 20]
        }, {
            name: 'Rail',
            data: [272, 153, 156, 1000, 120, 230, 342, 433, 232, 543, 342, 423]
        }, {
            name: 'Air',
            data: [13, 7, 8, 49, 234, 45, 234, 45, 234, 45, 234, 45]
        }, {
            name: 'Sea',
            data: [55, 35, 41, 234, 45, 234, 650, 234, 45, 234, 65, 223]
        }]
    });

    function toggleChart2FullScreen() {
        chart2.fullscreen.toggle();
    }

    // product chart js 

    Highcharts.chart('compare-chart-one', {
        chart: {
            plotBackgroundColor: "transparent",
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Top Seller',
            align: 'center',
            verticalAlign: 'middle',
            y: 150,
            style: {
                fontSize: '15px',
                fontFamily: 'Roboto',
                fontWeight: 'bold',
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>',
            style: {
                fontSize: '12px',
                fontFamily: 'Roboto',
                fontWeight: 'bold',
                color: 'black'
            }
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    distance: -80,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        fontFamily: 'Roboto',
                        fontSize: '10px',
                        textOutline: 'none'
                    }
                },
                showInLegend: true,
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '100%'],
                size: '190%'
            }
        },
        legend: {
            align: 'center',
            // y: 30,
            verticalAlign: 'bottom',
            layout: 'horizontal',
            itemStyle: {
                fontSize: '1.2rem',
                fontFamily: 'Roboto',
                fontWeight: 'bold',
                color: '#343434'
            },
            itemDistance: 60,
        },
        series: [{
            type: 'pie',
            name: 'Top Seller',
            colorByPoint: true,
            innerSize: '50%',
            data: [{
                name: 'Data1',
                y: 60.77,
            }, {
                name: 'Data2',
                y: 12.82
            }, {
                name: 'Data3',
                y: 9.63
            }, {
                name: 'Data4',
                y: 6.44
            }, {
                name: 'Data5',
                y: 5.02
            }, {
                name: 'Data6',
                y: 5.28
            }]
        }]
    });


    // Monthly Exports Pattern Analysis of All Products

    const chart3 = Highcharts.chart({
        chart: {
            zooming: {
                type: 'xy'
            },
            renderTo: 'Monthly-Exports-Pattern-Analysis',
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 0,
                depth: 50,
                viewDistance: 25
            }
        },
        title: {
            text: ''
        },
        credits: {
            text: ''
        },
        xAxis: [{
            categories: [
                'October <br> 2023', 'November <br> 2023', 'December <br> 2023', 'January <br> 2024', 'February <br> 2024 ', 'March <br> 2024',
                'April <br> 2024', 'May <br> 2024', 'June <br> 2024', 'July <br> 2024', 'August <br> 2024', 'September <br> 2024'
            ],
            crosshair: true,
            labels: {
                style: {
                    fontSize: "1rem",
                    fontFamily: "Roboto",
                    fontWeight: "medium",
                    color: "#343434"
                }
            }
        }],
        yAxis: [{ // Primary yAxis
            labels: {
                format: '{value}M',
                style: {
                    fontSize: "1rem",
                    fontFamily: "Roboto",
                    fontWeight: "medium",
                    color: "#343434"
                }
            },
            title: {
                text: 'Value (USD)',
                style: {
                    fontSize: "1rem",
                    fontFamily: "Roboto",
                    fontWeight: "medium",
                    color: "#343434"
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'Quantity',
                style: {
                    fontSize: "1rem",
                    fontFamily: "Roboto",
                    fontWeight: "medium",
                    color: "#343434"
                }
            },
            labels: {
                format: '{value}',
                style: {
                    fontSize: "1.2rem",
                    fontFamily: "Roboto",
                    fontWeight: "medium",
                    color: "#343434"
                }
            },
            opposite: true
        }],
        tooltip: {
            shared: true,
            style: {
                fontSize: "1rem",
                fontFamily: "Roboto",
                fontWeight: "medium",
                color: "#000000"
            }
        },
        legend: {
            align: 'center',
            verticalAlign: 'bottom',
            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor ||
                'rgba(255,255,255,0.25)',
            itemStyle: {
                fontSize: "1.2rem",
                fontFamily: "Roboto",
                fontWeight: "bold",
                color: "#343434"
            }
        },
        series: [{
            name: '2024 Quality',
            type: 'spline',
            color: '#343434',
            yAxis: 1,
            data: [
                100000, 100000, 100000, 100000, 100000, 300000, 320000, 300000, 100000,
                100000, 100000, 100000
            ],
            tooltip: {
                valueSuffix: ''
            }

        }, {
            name: '2024 Value',
            type: 'column',
            data: [{
                    y: 1000,
                    color: '#40affc'
                },
                {
                    y: 1000,
                    color: '#574ec3'
                },
                {
                    y: 1000,
                    color: '#2de375'
                },
                {
                    y: 1000,
                    color: '#f9683d'
                },
                {
                    y: 1000,
                    color: '#6e8abb'
                },
                {
                    y: 15000,
                    color: '#d366f9'
                },
                {
                    y: 19000,
                    color: '#44e1ca'
                },
                {
                    y: 17000,
                    color: '#f54747'
                },
                {
                    y: 1000,
                    color: '#fbb46f'
                },
                {
                    y: 1000,
                    color: '#96e8e1'
                },
                {
                    y: 1000,
                    color: '#40affc'
                },
                {
                    y: 1000,
                    color: '#574ec3'
                }
            ],
            tooltip: {
                valueSuffix: 'M'
            }
        }]
    });


    function toggleChart3FullScreen() {
        chart3.fullscreen.toggle();
    }

    // total-transactional-analysis-table js

    new DataTable('#total-transactional-analysis-table', {
        pageLength: 7,
        layout: {
            bottomEnd: {
                paging: {
                    firstLast: false
                }
            }
        },
        language: {
            oPaginate: {
                sNext: '<i class="fa-solid fa-angle-right"></i>',
                sPrevious: '<i class="fa-solid fa-angle-left"></i>',
            }
        },
        columns: [{
                data: 'Hs Code',
                orderable: false
            },
            {
                data: 'Description',
                orderable: false
            },
            {
                data: 'Buyer Country',
                orderable: false
            },
            {
                data: 'Unit',
                orderable: false
            },
            {
                data: 'Quantity',
                orderable: false
            },
            {
                data: 'Value (USD)',
                orderable: false
            }
        ],
    });

    // export-market-analysis-chart js
    const buyersData = {
        TR: {
            name: "Turkey",
            buyers: 120000,
        },
        TW: {
            name: "Taiwan",
            buyers: 300000,
        },
    };

    const data = buyersData;
    const selectedRegions = ["TR", "TW"];

    let map;

    function initializeMap() {
        if (!map) {
            map = new jsVectorMap({
                selector: "#export-market-analysis-chart",
                map: "world",
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
                onLoaded(mapInstance) {
                    window.addEventListener("resize", () => {
                        mapInstance.updateSize();
                    });
                },
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
                            padding: "7px 14px 11px 15px",
                            "border-radius": "15px",
                            "min-width": "95px",
                            color: "#343434",
                            "font-weight": "medium",
                            "font-size": "10px",
                            margin: "0",
                            height: "auto",
                            "align-content": "center",
                        });
                    }
                },
            });
        } else {
            map.updateSize();
        }
    }

    const tabs = document.querySelectorAll(".comp-pro-tab-btn, .primary-cta");
    tabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            const chartContainer = document.querySelector("#export-market-analysis-chart");

            if (chartContainer && chartContainer.offsetParent !== null) {
                setTimeout(() => {
                    initializeMap();
                }, 100);
            }
        });
    });

    // snakey diagram chart js
    const sankeyDiagram = Highcharts.chart({
        chart: {
            renderTo: 'sankey-diagram',
        },
        title: {
            text: ''
        },
        accessibility: {
            point: {
                valueDescriptionFormat: '{index}. {point.from} to {point.to}, ' +
                    '{point.weight}.'
            }
        },
        tooltip: {
            headerFormat: null,
            pointFormat: '{point.fromNode.name} \u2192 {point.toNode.name}: {point.weight:.2f} ' +
                'quads',
            nodeFormat: '{point.name}: {point.sum:.2f} quads',
            style: {
                fontSize: '1.2rem',
                fontWeight: 'medium',
                fontFamily: 'Roboto'
            },
            borderColor: '#333333',
            backgroundColor: 'rgba(255, 255, 255, 0.95)',
            shadow: true
        },
        series: [{
            keys: ['from', 'to', 'weight'],
            dataLabels: {
                style: {
                    fontSize: '1.2rem',
                    fontWeight: 'bold',
                    color: '#000000',
                    fontFamily: 'Roboto'
                }
            },

            nodes: [{
                    id: 'Electricity & Heat',
                    color: '#ffa500',
                    offset: -110
                },
                {
                    id: 'Net Import',
                    color: '000000'
                },
                {
                    id: 'Residential',
                    color: '#74ffe7',
                    column: 2,
                    offset: 50
                },
                {
                    id: 'Commercial',
                    color: '#8cff74',
                    column: 2,
                    offset: 50
                },
                {
                    id: 'Industrial',
                    color: '#ff8da1',
                    column: 2,
                    offset: 50
                },
                {
                    id: 'Transportation',
                    color: '#f4c0ff',
                    column: 2,
                    offset: 50
                },
                {
                    id: 'Rejected Energy',
                    color: '#e6e6e6',
                    column: 3,
                    offset: -30
                },
                {
                    id: 'Energy Services',
                    color: '#F9E79F',
                    column: 3
                },
                {
                    id: 'Net Import',
                    color: '000000'
                },
                {
                    id: 'Solar',
                    color: '#009c00'
                },
                {
                    id: 'Nuclear',
                    color: '#1a8dff'
                },
                {
                    id: 'Hydro',
                    color: '#009c00'
                },
                {
                    id: 'Wind',
                    color: '#009c00'
                },
                {
                    id: 'Geothermal',
                    color: '#009c00'
                },
                {
                    id: 'Natural Gas',
                    color: '#1a8dff'
                },
                {
                    id: 'Biomass',
                    color: '#009c00'
                },
                {
                    id: 'Coal',
                    color: '#989898'
                },
                {
                    id: 'Petroleum',
                    color: '#989898',
                    offset: -1
                }
            ],

            data: [
                ['Net Import', 'Electricity & Heat', 0.14],
                ['Solar', 'Electricity & Heat', 1.28],
                ['Nuclear', 'Electricity & Heat', 8.05],
                ['Hydro', 'Electricity & Heat', 2.31],
                ['Wind', 'Electricity & Heat', 3.84],
                ['Geothermal', 'Electricity & Heat', 0.15],
                ['Natural Gas', 'Electricity & Heat', 12.5],
                ['Coal', 'Electricity & Heat', 8.9],
                ['Biomass', 'Electricity & Heat', 0.41],
                ['Petroleum', 'Electricity & Heat', 0.24],

                ['Electricity & Heat', 'Residential', 5.19],
                ['Solar', 'Residential', 0.4],
                ['Geothermal', 'Residential', 0.04],
                ['Natural Gas', 'Residential', 5.17],
                ['Biomass', 'Residential', 0.48],
                ['Petroleum', 'Residential', 0.98],

                ['Electricity & Heat', 'Commercial', 4.69],
                ['Solar', 'Commercial', 0.16],
                ['Geothermal', 'Commercial', 0.02],
                ['Natural Gas', 'Commercial', 3.65],
                ['Coal', 'Commercial', 0.02],
                ['Biomass', 'Commercial', 0.15],
                ['Petroleum', 'Commercial', 0.88],

                ['Electricity & Heat', 'Industrial', 3.44],
                ['Solar', 'Industrial', 0.04],
                ['Natural Gas', 'Industrial', 10.8],
                ['Coal', 'Industrial', 0.99],
                ['Biomass', 'Industrial', 2.27],
                ['Petroleum', 'Industrial', 9.13],

                ['Electricity & Heat', 'Transportation', 0.02],
                ['Natural Gas', 'Transportation', 1.29],
                ['Biomass', 'Transportation', 1.57],
                ['Petroleum', 'Transportation', 24.6],

                ['Electricity & Heat', 'Rejected Energy', 24.3],
                ['Residential', 'Rejected Energy', 4.29],
                ['Commercial', 'Rejected Energy', 3.35],
                ['Industrial', 'Rejected Energy', 13.6],
                ['Transportation', 'Rejected Energy', 21.7],

                ['Residential', 'Energy Services', 7.97],
                ['Commercial', 'Energy Services', 6.22],
                ['Industrial', 'Energy Services', 13.1],
                ['Transportation', 'Energy Services', 5.77]
            ],
            type: 'sankey',
            name: 'Sankey demo series'
        }]

    });

    function sankeyDiagramFullScreen() {
        sankeyDiagram.fullscreen.toggle();
    }

    // port-analysis-pie-chart-1

    Highcharts.chart('port-analysis-pie-chart-1', {
        chart: {
            styledMode: false
        },
        title: {
            text: ''
        },
        tooltip: {
            headerFormat: '<span style="font-size: 12px; font-weight: medium;">{point.key}</span><br>',
            pointFormat: '<span style="font-size: 12px; color: #343434;">{series.name}: </span>' +
                '<span style="font-size: 12px; color: #343434;">{point.y}%</span>',
            backgroundColor: '#ffffff',
            borderColor: '#000',
            borderRadius: 5,
            shadow: false
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    style: {
                        fontSize: '1.2rem',
                        color: '#343434',
                        fontWeight: 'semibold'
                    }
                }
            }
        },
        legend: {
            enabled: true,
            itemStyle: {
                fontSize: '1.2rem',
                color: '#343434',
                fontWeight: 'medium'
            },
            itemHoverStyle: {
                color: '#007bff'
            },
            itemHiddenStyle: {
                color: '#ccc'
            }
        },
        series: [{
            type: 'pie',
            allowPointSelect: true,
            keys: ['name', 'y', 'selected', 'sliced'],
            data: [
                ['Apple', 27.16, true],
                ['Samsung', 23.72, false],
                ['Xiaomi', 11.92, false],
            ],
            showInLegend: true
        }]
    });


    // port-analysis-pie-chart-2

    Highcharts.chart('port-analysis-pie-chart-2', {
        chart: {
            styledMode: false
        },
        title: {
            text: ''
        },
        tooltip: {
            headerFormat: '<span style="font-size: 12px; font-weight: medium;">{point.key}</span><br>',
            pointFormat: '<span style="font-size: 12px; color: #343434;">{series.name}: </span>' +
                '<span style="font-size: 12px; color: #343434;">{point.y}%</span>',
            backgroundColor: '#ffffff',
            borderColor: '#000',
            borderRadius: 5,
            shadow: false
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: true,
                    style: {
                        fontSize: '1.2rem',
                        color: '#343434',
                        fontWeight: 'semibold'
                    }
                }
            }
        },
        legend: {
            enabled: true,
            itemStyle: {
                fontSize: '1.2rem',
                color: '#343434',
                fontWeight: 'medium'
            },
            itemHoverStyle: {
                color: '#007bff'
            },
            itemHiddenStyle: {
                color: '#ccc'
            }
        },
        series: [{
            type: 'pie',
            allowPointSelect: true,
            keys: ['name', 'y', 'selected', 'sliced'],
            data: [
                ['Apple', 27.16, true],
                ['Samsung', 23.72, false],
                ['Xiaomi', 11.92, false],
            ],
            showInLegend: true
        }]
    });
</script>