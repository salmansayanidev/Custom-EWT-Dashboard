<?php include "./includes/header.php"; ?>
<link rel="stylesheet" href="./assets/css/trade-analysis.css">


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
                                <li class="breadcrumb-item active" aria-current="page">Trade Analysis</li>
                            </ol>
                        </nav>
                    </div>
                </div>

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
                    <div class="filter-result-text-area position-relative">
                        <p class="filter-result-text">Buyers Country: india, vietnam</p>
                        <button class="filter-result-remove-btn" type="button">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                </div>

                <div class="col-12 col-lg-12 col-xl-10">
                    <div class="trade-analysis-filter-area">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-5">
                                <ul class="filter-btns-left-list">
                                    <li class="filter-btns-left-list-item position-relative">
                                        <button class="filter-btn-2 sm-btn bg-white curr-filter-btn" type="button">
                                            Currency (USD)
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                        <ul class="currency-filter-list">
                                            <li class="currency-filter-list-item">
                                                <div class="currency-radio-area">
                                                    <label for="USD" class="column-filter-label-text currency-radio-label">
                                                        <input type="radio" class="currency-radio" name="currency_radio" value="USD" checked id="USD">
                                                        USD
                                                    </label>
                                                </div>
                                                <div class="currency-inner-radio-area">
                                                    <div class="currency-sm-radio-area">
                                                        <input type="radio" class="d-none inner-curr-radio" name="USD_currencey_radio" checked value="" id="USD-full">
                                                        <label class="curr-filter-sm-label" for="USD-full">
                                                            Full
                                                        </label>
                                                        <input type="radio" class="d-none inner-curr-radio" name="USD_currencey_radio" value="" id="USD-mil-bil">
                                                        <label class="curr-filter-sm-label" for="USD-mil-bil">
                                                            Mil & Bil
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
                                                        <input type="radio" class="d-none inner-curr-radio" disabled checked name="INR_currencey_radio" value="" id="INR-full">
                                                        <label class="curr-filter-sm-label" for="INR-full">
                                                            Full
                                                        </label>
                                                        <input type="radio" class="d-none inner-curr-radio" disabled name="INR_currencey_radio" value="" id="INR-lac-cr">
                                                        <label class="curr-filter-sm-label" for="INR-lac-cr">
                                                            Mil & Bil
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
                                                        <input type="radio" class="d-none inner-curr-radio" disabled checked name="AED_currencey_radio" value="" id="AED-full">
                                                        <label class="curr-filter-sm-label" for="AED-full">
                                                            Full
                                                        </label>
                                                        <input type="radio" class="d-none inner-curr-radio" disabled name="AED_currencey_radio" value="" id="AED-mil-bil">
                                                        <label class="curr-filter-sm-label" for="AED-mil-bil">
                                                            Mil & Bil
                                                        </label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="filter-btns-left-list-item">
                                        <select class="js-example-disabled-results">
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
                                        <button class="filter-btn-2 sm-btn bg-white" type="button">
                                            Hide indirect shipments
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-7">
                                <ul class="filter-btns-right-list">
                                    <li class="filter-btns-right-list-item">
                                        <button class="filter-btn" id="picker" type="button">
                                            <img class="img-fluid" src="./assets/images/filter-icon-1.png" alt="">
                                            Date/Year
                                        </button>
                                    </li>
                                    <li class="filter-btns-right-list-item">
                                        <a class="filter-btn" href="#">
                                            <img class="img-fluid" src="./assets/images/filter-icon-2.png" alt="">
                                            Download
                                        </a>
                                    </li>
                                    <li class="filter-btns-right-list-item">
                                        <a class="filter-btn" href="#">
                                            <img class="img-fluid" src="./assets/images/filter-icon-3.png" alt="">
                                            Save this search
                                        </a>
                                    </li>
                                    <li class="filter-btns-right-list-item">
                                        <a class="filter-btn" href="#">
                                            <img class="img-fluid" src="./assets/images/filter-icon-4.png" alt="">
                                            Saved list
                                        </a>
                                    </li>
                                    <li class="filter-btns-right-list-item position-relative">
                                        <button class="filter-btn" id="column-filter-btn" type="button">
                                            <img class="img-fluid" src="./assets/images/filter-icon-5.png" alt="">
                                            Filter
                                        </button>
                                        <ul class="column-filter-list">
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="0" checked name="column_filter_table" id="checkbox-1">
                                                <label for="checkbox-1" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        Date
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="1" checked name="column_filter_table" id="checkbox-2">
                                                <label for="checkbox-2" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        Shipment Id
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="2" checked name="column_filter_table" id="checkbox-3">
                                                <label for="checkbox-3" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        HS Code
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="3" checked name="column_filter_table" id="checkbox-4">
                                                <label for="checkbox-4" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        Industry
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="4" checked name="column_filter_table" id="checkbox-5">
                                                <label for="checkbox-5" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        Product Description
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="5" checked name="column_filter_table" id="checkbox-6">
                                                <label for="checkbox-6" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        Buyers Country
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="6" checked name="column_filter_table" id="checkbox-7">
                                                <label for="checkbox-7" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        Buyers
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="7" checked name="column_filter_table" id="checkbox-8">
                                                <label for="checkbox-8" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        Destination Port
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="8" checked name="column_filter_table" id="checkbox-9">
                                                <label for="checkbox-9" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        Sellers Country
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="9" checked name="column_filter_table" id="checkbox-10">
                                                <label for="checkbox-10" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        Sellers
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="10" checked name="column_filter_table" id="checkbox-11">
                                                <label for="checkbox-11" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        Origin Port
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="11" checked name="column_filter_table" id="checkbox-12">
                                                <label for="checkbox-12" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        Unit
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="12" checked name="column_filter_table" id="checkbox-13">
                                                <label for="checkbox-13" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        Quantity
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="column-filter-list-item">
                                                <input type="checkbox" class="column-filter-checkbox" data-dt-column="13" checked name="column_filter_table" id="checkbox-14">
                                                <label for="checkbox-14" class="column-filter-label">
                                                    <span class="column-filter-checkbox-square">
                                                        <i class="fa-solid fa-check"></i>
                                                    </span>
                                                    <span class="column-filter-label-text">
                                                        Value (US)
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="filter-btns-right-list-item">
                                        <div class="font-size-filter-area">
                                            <button class="plus-minus-btn" id="table-font-minus" type="button">
                                                <i class="fa-solid fa-minus"></i>
                                            </button>
                                            <img class="plus-minus-btn" src="./assets/images/filter-icon-6.png" alt="">
                                            <button class="plus-minus-btn" id="table-font-plus" type="button">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-4">
            <div class="row">
                <div class="col-12">
                    <div class="shipment-detail-area">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-6">
                                <div class="compare-chart-btn-area">
                                    <h3 class="sec-sb-title">Compare the Charts</h3>
                                    <button class="sm-primary-btn" type="button">
                                        Value
                                    </button>
                                    <button class="sm-primary-btn btn-2" type="button">
                                        Quantity
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="d-flex justify-content-end align-items-center gap-10px">
                                    <div class="total-shipment-value-area">
                                        <p class="total-shipment-text">Total Shipment Value: <strong>$37,296,490,600.97</strong></p>
                                    </div>
                                    <div class="Synopsis-btn-area">
                                        <button class="sm-btn" id="synopsis-btn" type="button">
                                            Synopsis
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="compare-charts-main">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="compare-chart-box">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-6">
                                                <div id="compare-chart-one"></div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="compare-chart-table-area">
                                                    <table class="compare-chart-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Country</th>
                                                                <th>Value (USD)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Vietnam</td>
                                                                <td>$2,723,543,115.60</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Indonsia</td>
                                                                <td>$764,564,841.56</td>
                                                            </tr>
                                                            <tr>
                                                                <td>India</td>
                                                                <td>$25,734,857.95</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Philippines</td>
                                                                <td>$18,072,037.63</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Uzbekistan</td>
                                                                <td>$6,207,068.59</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Uzbekistan</td>
                                                                <td>$6,207,068.59</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Uzbekistan</td>
                                                                <td>$6,207,068.59</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Uzbekistan</td>
                                                                <td>$6,207,068.59</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="compare-chart-box">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div id="compare-chart-two"></div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="compare-chart-table-area">
                                                    <table class="compare-chart-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Country</th>
                                                                <th>Value (USD)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Vietnam</td>
                                                                <td>$2,723,543,115.60</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Indonsia</td>
                                                                <td>$764,564,841.56</td>
                                                            </tr>
                                                            <tr>
                                                                <td>India</td>
                                                                <td>$25,734,857.95</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Philippines</td>
                                                                <td>$18,072,037.63</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Uzbekistan</td>
                                                                <td>$6,207,068.59</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Uzbekistan</td>
                                                                <td>$6,207,068.59</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Uzbekistan</td>
                                                                <td>$6,207,068.59</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Uzbekistan</td>
                                                                <td>$6,207,068.59</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="compare-chart-box">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div id="compare-chart-three"></div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="compare-chart-table-area">
                                                    <table class="compare-chart-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Country</th>
                                                                <th>Value (USD)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>MEIKO ELECTRONICS VIETNAM COMPANY LIMITED</td>
                                                                <td>$1,014,345,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>HANMIFLEXIBLE VINA HAI PHONG COMPANY LIMITED</td>
                                                                <td>$530,828,818.30</td>
                                                            </tr>
                                                            <tr>
                                                                <td>ANEKA TAMBANG PERSERO TBK</td>
                                                                <td>$449,830,144.13</td>
                                                            </tr>
                                                            <tr>
                                                                <td>VIET DUC BUILD TRADING DEVELOPMENT INVESTMENT LIMITED</td>
                                                                <td>$427,572,937.98</td>
                                                            </tr>
                                                            <tr>
                                                                <td>PT ANEKA TAMBANG PERSERO TBK</td>
                                                                <td>$286,110,526.08</td>
                                                            </tr>
                                                            <tr>
                                                                <td>ANEKA TAMBANG PERSERO TBK</td>
                                                                <td>$449,830,144.13</td>
                                                            </tr>
                                                            <tr>
                                                                <td>VIET DUC BUILD TRADING DEVELOPMENT INVESTMENT LIMITED</td>
                                                                <td>$427,572,937.98</td>
                                                            </tr>
                                                            <tr>
                                                                <td>PT ANEKA TAMBANG PERSERO TBK</td>
                                                                <td>$286,110,526.08</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="compare-chart-box">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div id="compare-chart-four"></div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="compare-chart-table-area">
                                                    <table class="compare-chart-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Country</th>
                                                                <th>Value (USD)</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>CONG TY TNHH TINH TUE - VIETOCEAN</td>
                                                                <td>$2,723,543,115.60</td>
                                                            </tr>
                                                            <tr>
                                                                <td>CONG TY TNHH HANMIFLEXIBLE VINA</td>
                                                                <td>$764,564,841.56</td>
                                                            </tr>
                                                            <tr>
                                                                <td>ABC REFINERY AUSTRALIA PTY LTD</td>
                                                                <td>$25,734,857.95</td>
                                                            </tr>
                                                            <tr>
                                                                <td>CONG TY TNHH KAJIMA VET NAM</td>
                                                                <td>$18,072,037.63</td>
                                                            </tr>
                                                            <tr>
                                                                <td>HANMIFLEXIBLE VINA CO,LTD</td>
                                                                <td>$6,207,068.59</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Uzbekistan</td>
                                                                <td>$6,207,068.59</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Uzbekistan</td>
                                                                <td>$6,207,068.59</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Uzbekistan</td>
                                                                <td>$6,207,068.59</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="import-export-table-area position-relative">
                        <img class="table-bg-absolute-img" src="./assets/images/table-bg-img.png" alt="">
                        <table class="datatables-ajax table-responsive table-stripe table company-directors-table" id="shipment-detail-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Shipment Id</th>
                                    <th>
                                        <button type="button" class="sm-btn table-btn">
                                            HS Code
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                    </th>
                                    <th>
                                        <button type="button" class="sm-btn table-btn">
                                            Industry
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                    </th>
                                    <th>Product Description</th>
                                    <th>
                                        <button type="button" class="sm-btn table-btn">
                                            Buyers Country
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                    </th>
                                    <th>
                                        <button type="button" class="sm-btn table-btn">
                                            Buyers
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                    </th>
                                    <th>
                                        <button type="button" class="sm-btn table-btn">
                                            Destination Port
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                    </th>
                                    <th>
                                        <button type="button" class="sm-btn table-btn">
                                            Sellers Country
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                    </th>
                                    <th>
                                        <button type="button" class="sm-btn table-btn">
                                            Sellers
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                    </th>
                                    <th>
                                        <button type="button" class="sm-btn table-btn">
                                            Origin Port
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                    </th>
                                    <th>
                                        <button type="button" class="sm-btn table-btn">
                                            Unit
                                            <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                    </th>
                                    <th>Quantity</th>
                                    <th>Value (US)</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        20/12/2024
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/shipment-icon.png" alt="">
                                            <span>5600581750</span>
                                        </div>
                                    </td>
                                    <td>
                                        84716040
                                    </td>
                                    <td>
                                        Machinery and Mechanical Appliances
                                    </td>
                                    <td>
                                        N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US
                                    </td>
                                    <td>
                                        India
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp India Sales Private Limited</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/smart-box-icon-1.png" alt="">
                                            <span>Delhi Air Cargo (INDEL4)</span>
                                        </div>
                                    </td>
                                    <td>
                                        Singapore
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp Pps Asia Pacific Pte Ltd</span>
                                        </div>
                                    </td>
                                    <td>
                                        Chongqing
                                    </td>
                                    <td>
                                        NOS
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $98.24
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20/12/2024
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/shipment-icon.png" alt="">
                                            <span>5600581750</span>
                                        </div>
                                    </td>
                                    <td>
                                        84716040
                                    </td>
                                    <td>
                                        Machinery and Mechanical Appliances
                                    </td>
                                    <td>
                                        N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US
                                    </td>
                                    <td>
                                        India
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp India Sales Private Limited</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/smart-box-icon-1.png" alt="">
                                            <span>Delhi Air Cargo (INDEL4)</span>
                                        </div>
                                    </td>
                                    <td>
                                        Singapore
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp Pps Asia Pacific Pte Ltd</span>
                                        </div>
                                    </td>
                                    <td>
                                        Chongqing
                                    </td>
                                    <td>
                                        NOS
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $98.24
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20/12/2024
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/shipment-icon.png" alt="">
                                            <span>5600581750</span>
                                        </div>
                                    </td>
                                    <td>
                                        84716040
                                    </td>
                                    <td>
                                        Machinery and Mechanical Appliances
                                    </td>
                                    <td>
                                        N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US
                                    </td>
                                    <td>
                                        India
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp India Sales Private Limited</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/smart-box-icon-1.png" alt="">
                                            <span>Delhi Air Cargo (INDEL4)</span>
                                        </div>
                                    </td>
                                    <td>
                                        Singapore
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp Pps Asia Pacific Pte Ltd</span>
                                        </div>
                                    </td>
                                    <td>
                                        Chongqing
                                    </td>
                                    <td>
                                        NOS
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $98.24
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20/12/2024
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/shipment-icon.png" alt="">
                                            <span>5600581750</span>
                                        </div>
                                    </td>
                                    <td>
                                        84716040
                                    </td>
                                    <td>
                                        Machinery and Mechanical Appliances
                                    </td>
                                    <td>
                                        N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US
                                    </td>
                                    <td>
                                        India
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp India Sales Private Limited</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/smart-box-icon-1.png" alt="">
                                            <span>Delhi Air Cargo (INDEL4)</span>
                                        </div>
                                    </td>
                                    <td>
                                        Singapore
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp Pps Asia Pacific Pte Ltd</span>
                                        </div>
                                    </td>
                                    <td>
                                        Chongqing
                                    </td>
                                    <td>
                                        NOS
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $98.24
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20/12/2024
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/shipment-icon.png" alt="">
                                            <span>5600581750</span>
                                        </div>
                                    </td>
                                    <td>
                                        84716040
                                    </td>
                                    <td>
                                        Machinery and Mechanical Appliances
                                    </td>
                                    <td>
                                        N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US
                                    </td>
                                    <td>
                                        India
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp India Sales Private Limited</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/smart-box-icon-1.png" alt="">
                                            <span>Delhi Air Cargo (INDEL4)</span>
                                        </div>
                                    </td>
                                    <td>
                                        Singapore
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp Pps Asia Pacific Pte Ltd</span>
                                        </div>
                                    </td>
                                    <td>
                                        Chongqing
                                    </td>
                                    <td>
                                        NOS
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $98.24
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20/12/2024
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/shipment-icon.png" alt="">
                                            <span>5600581750</span>
                                        </div>
                                    </td>
                                    <td>
                                        84716040
                                    </td>
                                    <td>
                                        Machinery and Mechanical Appliances
                                    </td>
                                    <td>
                                        N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US
                                    </td>
                                    <td>
                                        India
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp India Sales Private Limited</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/smart-box-icon-1.png" alt="">
                                            <span>Delhi Air Cargo (INDEL4)</span>
                                        </div>
                                    </td>
                                    <td>
                                        Singapore
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp Pps Asia Pacific Pte Ltd</span>
                                        </div>
                                    </td>
                                    <td>
                                        Chongqing
                                    </td>
                                    <td>
                                        NOS
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $98.24
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20/12/2024
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/shipment-icon.png" alt="">
                                            <span>5600581750</span>
                                        </div>
                                    </td>
                                    <td>
                                        84716040
                                    </td>
                                    <td>
                                        Machinery and Mechanical Appliances
                                    </td>
                                    <td>
                                        N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US
                                    </td>
                                    <td>
                                        India
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp India Sales Private Limited</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/smart-box-icon-1.png" alt="">
                                            <span>Delhi Air Cargo (INDEL4)</span>
                                        </div>
                                    </td>
                                    <td>
                                        Singapore
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp Pps Asia Pacific Pte Ltd</span>
                                        </div>
                                    </td>
                                    <td>
                                        Chongqing
                                    </td>
                                    <td>
                                        NOS
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $98.24
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20/12/2024
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/shipment-icon.png" alt="">
                                            <span>5600581750</span>
                                        </div>
                                    </td>
                                    <td>
                                        84716040
                                    </td>
                                    <td>
                                        Machinery and Mechanical Appliances
                                    </td>
                                    <td>
                                        N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US
                                    </td>
                                    <td>
                                        India
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp India Sales Private Limited</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/smart-box-icon-1.png" alt="">
                                            <span>Delhi Air Cargo (INDEL4)</span>
                                        </div>
                                    </td>
                                    <td>
                                        Singapore
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp Pps Asia Pacific Pte Ltd</span>
                                        </div>
                                    </td>
                                    <td>
                                        Chongqing
                                    </td>
                                    <td>
                                        NOS
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $98.24
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20/12/2024
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/shipment-icon.png" alt="">
                                            <span>5600581750</span>
                                        </div>
                                    </td>
                                    <td>
                                        84716040
                                    </td>
                                    <td>
                                        Machinery and Mechanical Appliances
                                    </td>
                                    <td>
                                        N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US
                                    </td>
                                    <td>
                                        India
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp India Sales Private Limited</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/smart-box-icon-1.png" alt="">
                                            <span>Delhi Air Cargo (INDEL4)</span>
                                        </div>
                                    </td>
                                    <td>
                                        Singapore
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp Pps Asia Pacific Pte Ltd</span>
                                        </div>
                                    </td>
                                    <td>
                                        Chongqing
                                    </td>
                                    <td>
                                        NOS
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $98.24
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20/12/2024
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/shipment-icon.png" alt="">
                                            <span>5600581750</span>
                                        </div>
                                    </td>
                                    <td>
                                        84716040
                                    </td>
                                    <td>
                                        Machinery and Mechanical Appliances
                                    </td>
                                    <td>
                                        N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US
                                    </td>
                                    <td>
                                        India
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp India Sales Private Limited</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/smart-box-icon-1.png" alt="">
                                            <span>Delhi Air Cargo (INDEL4)</span>
                                        </div>
                                    </td>
                                    <td>
                                        Singapore
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp Pps Asia Pacific Pte Ltd</span>
                                        </div>
                                    </td>
                                    <td>
                                        Chongqing
                                    </td>
                                    <td>
                                        NOS
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $98.24
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20/12/2024
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/shipment-icon.png" alt="">
                                            <span>5600581750</span>
                                        </div>
                                    </td>
                                    <td>
                                        84716040
                                    </td>
                                    <td>
                                        Machinery and Mechanical Appliances
                                    </td>
                                    <td>
                                        N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US
                                    </td>
                                    <td>
                                        India
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp India Sales Private Limited</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/smart-box-icon-1.png" alt="">
                                            <span>Delhi Air Cargo (INDEL4)</span>
                                        </div>
                                    </td>
                                    <td>
                                        Singapore
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp Pps Asia Pacific Pte Ltd</span>
                                        </div>
                                    </td>
                                    <td>
                                        Chongqing
                                    </td>
                                    <td>
                                        NOS
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $98.24
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        20/12/2024
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/shipment-icon.png" alt="">
                                            <span>5600581750</span>
                                        </div>
                                    </td>
                                    <td>
                                        84716040
                                    </td>
                                    <td>
                                        Machinery and Mechanical Appliances
                                    </td>
                                    <td>
                                        N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US N14061-001 keyboard SPS-TOP COVER W/KB MCS BL 4ZONE US
                                    </td>
                                    <td>
                                        India
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp India Sales Private Limited</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/smart-box-icon-1.png" alt="">
                                            <span>Delhi Air Cargo (INDEL4)</span>
                                        </div>
                                    </td>
                                    <td>
                                        Singapore
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start align-items-center gap-10px">
                                            <img class="img-fluid" src="./assets/images/buyers-table-icon.png" alt="">
                                            <span>Hp Pps Asia Pacific Pte Ltd</span>
                                        </div>
                                    </td>
                                    <td>
                                        Chongqing
                                    </td>
                                    <td>
                                        NOS
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        $98.24
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "./includes/footer.php" ?>
<script src="./assets/js/trade-analysis.js"></script>


<script>
    var $disabledResults = $(".js-example-disabled-results");
    $disabledResults.select2({
        placeholder: 'Report of',
        allowClear: false
    });

    new DataTable('#shipment-detail-table', {
        pageLength: 12,
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
                data: 'Date'
            },
            {
                data: 'Shipment Id'
            },
            {
                data: 'HS Code'
            },
            {
                data: 'Industry'
            },
            {
                data: 'Product Description'
            },
            {
                data: 'Buyers Country'
            },
            {
                data: 'Buyers'
            },
            {
                data: 'Destination Port'
            },
            {
                data: 'Sellers Country'
            },
            {
                data: 'Sellers'
            },
            {
                data: 'Origin Port'
            },
            {
                data: 'Unit'
            },
            {
                data: 'Quantity'
            },
            {
                data: 'Value (US)'
            },
        ]
    });


    // compare chart one

    Highcharts.chart('compare-chart-one', {
        chart: {
            plotBackgroundColor: "transparent",
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Top Buyer Country',
            align: 'center',
            verticalAlign: 'middle',
            y: 130,
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
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        fontFamily: 'Roboto',
                        fontSize: '10px',
                        textOutline: 'none'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '90%'],
                size: '170%'
            }
        },
        series: [{
            type: 'pie',
            name: 'Top Buyer Country',
            innerSize: '50%',
            data: [
                ['Data', 73.86],
                ['Data', 5.97],
                ['Data', 5.52],
                ['Data', 4.98],
                ['Data', 5.90],
                ['Data', 3.77]
            ]
        }]
    });

    // compare chart two

    Highcharts.chart('compare-chart-two', {
        chart: {
            plotBackgroundColor: "transparent",
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Top Seller Country',
            align: 'center',
            verticalAlign: 'middle',
            y: 130,
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
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        fontFamily: 'Roboto',
                        fontSize: '10px',
                        textOutline: 'none'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '90%'],
                size: '170%'
            }
        },
        series: [{
            type: 'pie',
            name: 'Top Buyer Country',
            innerSize: '50%',
            data: [
                ['Data', 73.86],
                ['Data', 5.97],
                ['Data', 5.52],
                ['Data', 4.98],
                ['Data', 5.90],
                ['Data', 3.77]
            ]
        }]
    });

    // compare chart three

    Highcharts.chart('compare-chart-three', {
        chart: {
            plotBackgroundColor: "transparent",
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Top Buyers',
            align: 'center',
            verticalAlign: 'middle',
            y: 130,
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
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        fontFamily: 'Roboto',
                        fontSize: '10px',
                        textOutline: 'none'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '90%'],
                size: '170%'
            }
        },
        series: [{
            type: 'pie',
            name: 'Top Buyer Country',
            innerSize: '50%',
            data: [
                ['Data', 73.86],
                ['Data', 5.97],
                ['Data', 5.52],
                ['Data', 4.98],
                ['Data', 5.90],
                ['Data', 3.77]
            ]
        }]
    });

    // compare chart four

    Highcharts.chart('compare-chart-four', {
        chart: {
            plotBackgroundColor: "transparent",
            plotBorderWidth: 0,
            plotShadow: false
        },
        title: {
            text: 'Top Seller',
            align: 'center',
            verticalAlign: 'middle',
            y: 130,
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
                dataLabels: {
                    enabled: true,
                    distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        fontFamily: 'Roboto',
                        fontSize: '10px',
                        textOutline: 'none'
                    }
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '90%'],
                size: '170%'
            }
        },
        series: [{
            type: 'pie',
            name: 'Top Buyer Country',
            innerSize: '50%',
            data: [
                ['Data', 73.86],
                ['Data', 5.97],
                ['Data', 5.52],
                ['Data', 4.98],
                ['Data', 5.90],
                ['Data', 3.77]
            ]
        }]
    });
</script>