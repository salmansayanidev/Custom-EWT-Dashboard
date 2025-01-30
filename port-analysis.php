<?php include "./includes/header.php"; ?>
<link rel="stylesheet" href="./assets/css/port-analysis.css">


<main class="main">
    <section class="port-analysis-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12 col-xl-10">
                    <div class="section-title-area">
                        <h1 class="section-title">Port Analysis</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Port Analysis</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-lg-12 col-xl-10">
                    <form action="">
                        <div class="row">
                            <div class="col-12">
                                <div class="home-search-left company-directors-search-area">
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
                                    <div class="position-relative country-select-area">
                                        <select class="all-countries-select">
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
                                        <span class="select-arrow-down">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                    </div>
                                    <div class="position-relative country-select-area">
                                        <select class="port-select">
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
                                        <span class="select-arrow-down">
                                            <i class="fa-solid fa-angle-down"></i>
                                        </span>
                                    </div>
                                    <div class="">
                                        <div class="tags-input-container search-field tags-input" id="">
                                            <input type="hidden" name="search" id="search_tags"
                                                value="" />
                                            <input type="text" id="home-search-input" class="tag-input"
                                                placeholder="Please add 1 or more hs code or product" />

                                        </div>
                                    </div>
                                    <div class="">
                                        <button class="search-btn" type="submit">
                                            <img class="img-fluid" src="./assets/images/search-icon.png" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="trade-analysis-filter-area mt-0">
                                    <div class="row align-items-center">
                                        <div class="col-12">
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
                                                    <select class="year-select">
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
                                                    <select class="month-select">
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
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12">
                    <div class="port-analysis-detail-main">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="port-analysis-title">Top Importers</h3>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="port-analysis-detail-inner">
                                    <div class="top-importers-table-area">
                                        <table class="top-importers-table">
                                            <thead>
                                                <tr>
                                                    <th style="width: 50%;">Company</th>
                                                    <th>Shipments</th>
                                                    <th>Value (in $)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width: 50%;"><a href="#">MILGRAM AND COMPANY LTD</a></td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%;"><a href="#">MILGRAM AND COMPANY LTD</a></td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%;"><a href="#">OVERSEAS EXPRESS CONSOLIDATORS TORONTO INC</a></td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%;"><a href="#">MILGRAM AND COMPANY LTD</a></td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%;"><a href="#">MILGRAM AND COMPANY LTD</a></td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%;"><a href="#">OVERSEAS EXPRESS CONSOLIDATORS TORONTO INC</a></td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%;"><a href="#">MILGRAM AND COMPANY LTD</a></td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%;"><a href="#">MILGRAM AND COMPANY LTD</a></td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%;"><a href="#">OVERSEAS EXPRESS CONSOLIDATORS TORONTO INC</a></td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%;"><a href="#">MILGRAM AND COMPANY LTD</a></td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="port-analysis-detail-inner">
                                    <div id="top-importers-bar-chart"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <h3 class="port-analysis-title">Top Sourcing Destinations</h3>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="port-analysis-detail-inner">
                                    <div id="top-sourcing-destination-map"></div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="port-analysis-detail-inner">
                                    <div class="top-importers-table-area">
                                        <table class="top-importers-table">
                                            <thead>
                                                <tr>
                                                    <th>Country</th>
                                                    <th>Shipments</th>
                                                    <th>Value (in $)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>CAMBODIA</td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                                <tr>
                                                    <td>CAMBODIA</td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                                <tr>
                                                    <td>CAMBODIA</td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                                <tr>
                                                    <td>CAMBODIA</td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
                                                </tr>
                                                <tr>
                                                    <td>CAMBODIA</td>
                                                    <td>100</td>
                                                    <td>$2,723,543,115</td>
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
    </section>
</main>





<?php include "./includes/footer.php"; ?>
<script src="./assets/js/port-analysis.js"></script>

<script>
    let chart;

    const dataset = [
        ["Amazon", 1200],
        ["Walmart", 950],
        ["Alibaba", 870],
        ["eBay", 730],
        ["Target", 620],
        ["Best Buy", 590],
        ["Flipkart", 550],
        ["Rakuten", 500],
        ["Shopify", 450],
        ["Snapdeal", 400],
        ["Myntra", 360],
        ["Newegg", 900],
        ["Costco", 780],
        ["Lazada", 456],
        ["Wayfair", 789],
        ["Overstock", 120]
    ];

    (async () => {

        chart = Highcharts.chart('top-importers-bar-chart', {
            chart: {
                animation: {
                    duration: 500
                },
                marginRight: 50,
            },
            title: {
                text: '',
            },
            legend: {
                enabled: false
            },
            xAxis: {
                type: 'category',
                labels: {
                    enabled: false
                },
                title: {
                    text: ''
                }
            },
            yAxis: {
                opposite: true,
                title: {
                    text: 'Number of Shipments'
                }
            },
            tooltip: {
                headerFormat: '',
                pointFormat: '<span>{point.name}:</span> <span>{point.y} Shipments</span>',
                style: {
                    fontSize: '1.2rem',
                    color: '#343434',
                    fontWeight: 'medium',
                    fontFamily: 'Roboto'
                }
            },
            plotOptions: {
                series: {
                    animation: false,
                    groupPadding: 0,
                    pointPadding: 0.1,
                    borderWidth: 0,
                    colorByPoint: true,
                    type: 'bar',
                    dataLabels: {
                        enabled: true,
                        format: '{point.y}',
                        style: {
                            fontSize: '1rem',
                            color: '#343434',
                            fontWeight: 'semibold',
                            fontFamily: 'Roboto'
                        }
                    }
                }
            },
            series: [{
                type: 'bar',
                name: 'Shipments',
                data: dataset.map(item => ({
                    name: item[0],
                    y: item[1]
                }))
            }]
        });

    })();
</script>

<script>
    const buyersData = {
        RU: {
            name: "Russia",
            buyers: 120,
            url: "https://example.com/russia"
        },
        CN: {
            name: "China",
            buyers: 300,
            url: "https://example.com/china"
        },
        IN: {
            name: "India",
            buyers: 450,
            url: "https://example.com/india"
        },
        CA: {
            name: "Canada",
            buyers: 200,
            url: "https://example.com/canada"
        },
        BR: {
            name: "Brazil",
            buyers: 150,
            url: "https://example.com/brazil"
        },
        DZ: {
            name: "Algeria",
            buyers: 80,
            url: "https://example.com/algeria"
        },
        AU: {
            name: "Australia",
            buyers: 100,
            url: "https://example.com/australia"
        },
    };

    const selectedRegions = Object.keys(buyersData);

    const map = new jsVectorMap({
        selector: "#top-sourcing-destination-map",
        map: "world",
        selectedRegions: selectedRegions,
        regionStyle: {
            initial: {
                fill: "#CACACA"
            },
            selected: {
                fill: "#989898"
            },
        },
        regionsSelectable: false,
        onRegionTooltipShow(event, tooltip, code) {
            const countryData = buyersData[code.toUpperCase()];
            if (countryData) {
                tooltip.text(
                    `<h5 class="m-0 chart-coutry-name">${countryData.name}</h5>` +
                    `<span class="m-0 chart-coutry-buyers">${countryData.buyers} Buyers</span>`,
                    true
                );

                tooltip.css({
                    "background-color": "#fff",
                    "padding": "7px 14px 11px 15px",
                    "border-radius": "15px",
                    "width": "95px",
                    "color": "#343434",
                    "font-weight": "500",
                    "font-size": "10px",
                    "height": "auto",
                    "text-align": "center",
                    "box-shadow": "0px 4px 6px rgba(0, 0, 0, 0.1)"
                });
            }
        },
        onRegionClick(event, code) {
            const countryData = buyersData[code.toUpperCase()];
            if (countryData && countryData.url) {
                window.open(countryData.url, "_blank"); // Open link in new tab
            }
        }
    });
</script>


<script>
    var $disabledResults = $(".year-select");
    $disabledResults.select2({
        placeholder: 'Select Year',
        allowClear: false
    });

    var $disabledResults = $(".month-select");
    $disabledResults.select2({
        placeholder: 'Select Month',
        allowClear: false
    });

    var $disabledResults = $(".port-select");
    $disabledResults.select2({
        placeholder: 'Select Port',
        allowClear: false
    });

    var $disabledResults = $(".all-countries-select");
    $disabledResults.select2({
        placeholder: 'Select Countries',
        allowClear: false
    });
</script>