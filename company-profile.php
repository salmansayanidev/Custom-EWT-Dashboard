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
                                        <li class="breadcrumb-item"><a href="dashboard.php">Profile View</a></li>
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
                                <h6 class="com-box-sm-title">Industry Analysis</h6>
                                <div id="Industry-Analysis"></div>
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
    // Set up the chart
    const chart = new Highcharts.Chart({
        chart: {
            renderTo: 'Industry-Analysis',
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 5,
                beta: 5,
                depth: 0,
                viewDistance: 25
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Values'
            }
        },

        tooltip: {
            headerFormat: '<b>{point.key}</b><br>',
            pointFormat: 'Cars sold: {point.y}'
        },
        title: {
            text: ''
        },
        // subtitle: {
        //     text: 'Source: ' +
        //         '<a href="https://ofv.no/registreringsstatistikk"' +
        //         'target="_blank">OFV</a>'
        // },
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
                ['Product Name', 1795],
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
            colorByPoint: true
        }]
    });

    // function showValues() {
    //     document.getElementById(
    //         'alpha-value'
    //     ).innerHTML = chart.options.chart.options3d.alpha;
    //     document.getElementById(
    //         'beta-value'
    //     ).innerHTML = chart.options.chart.options3d.beta;
    //     document.getElementById(
    //         'depth-value'
    //     ).innerHTML = chart.options.chart.options3d.depth;
    // }

    // Activate the sliders
    // document.querySelectorAll(
    //     '#sliders input'
    // ).forEach(input => input.addEventListener('input', e => {
    //     chart.options.chart.options3d[e.target.id] = parseFloat(e.target.value);
    //     showValues();
    //     chart.redraw(false);
    // }));

    // showValues();
</script>