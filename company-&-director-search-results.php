<?php include "./includes/header.php"; ?>
<link rel="stylesheet" href="./assets/css/company-directors.css">

<main class="main">
    <section class="company-and-directors-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12 col-xl-10">
                    <div class="section-title-area">
                        <h1 class="section-title">Company & Director Search</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Company & Director Search</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-lg-12 col-xl-10">
                    <form action="">
                        <div class="home-search-left company-directors-search-area">
                            <div class="">
                                <input type="radio" class="d-none search-radio" name="customer_radio" value="Company" checked id="Company">
                                <label for="Company" class="primary-btn">
                                    Company
                                </label>
                            </div>
                            <div class="">
                                <input type="radio" class="d-none search-radio" name="customer_radio" value="Directors" id="Directors">
                                <label for="Directors" class="primary-btn btn-2">
                                    Directors
                                </label>
                            </div>
                            <div class="">
                                <div class="tags-input-container search-field tags-input" id="">
                                    <input type="hidden" name="search" id="search_tags"
                                        value="" />
                                    <input type="text" id="home-search-input" class="tag-input"
                                        placeholder="Please add 1 or more hs code or product" />

                                </div>
                            </div>
                            <div class="position-relative country-select-area">
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
                                <span class="select-arrow-down">
                                    <i class="fa-solid fa-angle-down"></i>
                                </span>
                            </div>
                            <div class="">
                                <button class="search-btn" type="submit">
                                    <img class="img-fluid" src="./assets/images/search-icon.png" alt="">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-lg-12 col-xl-10">
                    <div class="company-directors-table-area position-relative">
                        <img class="table-bg-absolute-img" src="./assets/images/table-bg-img.png" alt="">
                        <div class="company-directors-table-main d-none">
                            <table class="datatables-ajax table-responsive table-stripe table company-directors-table" id="comp-director-table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Company</th>
                                        <th>N/A</th>
                                        <th>Transactions</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <input type="checkbox" class="table-checkbox d-none" checked name="table_checkbox" id="checkbox-1">
                                            <label for="checkbox-1" class="table-checkbox-square">
                                                <i class="fa-solid fa-check"></i>
                                            </label>
                                        </td>
                                        <td>
                                            <h5 class="comp-name">ABCO YECHNICAL PVT LTD</h5>
                                        </td>
                                        <td>
                                            <div class="table-na-area">
                                                <span class="table-tag" style="--bg-color: #FFC65A;">Buyers</span>
                                                <span class="table-tag" style="--bg-color: #BCD4FF;">Sellers</span>
                                                <span class="table-tag" style="--bg-color: #9EF7CE;">Industry</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block">Exports: 1</span>
                                            <span class="d-block">Imports: 3,919</span>
                                        </td>
                                        <td>PAKISTAN</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="table-checkbox d-none" name="table_checkbox" id="checkbox-2">
                                            <label for="checkbox-2" class="table-checkbox-square">
                                                <i class="fa-solid fa-check"></i>
                                            </label>
                                        </td>
                                        <td>
                                            <h5 class="comp-name">ABC TAG COMPANY</h5>
                                        </td>
                                        <td>
                                            <div class="table-na-area">
                                                <span class="table-tag" style="--bg-color: #FFC65A;">Buyers</span>
                                                <span class="table-tag" style="--bg-color: #BCD4FF;">Sellers</span>
                                                <span class="table-tag" style="--bg-color: #9EF7CE;">Industry</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block">Exports: 396</span>
                                            <span class="d-block">Imports: 782</span>
                                        </td>
                                        <td>PAKISTAN</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="table-checkbox d-none" name="table_checkbox" id="checkbox-3">
                                            <label for="checkbox-3" class="table-checkbox-square">
                                                <i class="fa-solid fa-check"></i>
                                            </label>
                                        </td>
                                        <td>
                                            <h5 class="comp-name">ABC INTERNATIONAL LOGISTICS SMC-PRIVATE LIMITED</h5>
                                        </td>
                                        <td>
                                            <div class="table-na-area">
                                                <span class="table-tag" style="--bg-color: #FFC65A;">Buyers</span>
                                                <span class="table-tag" style="--bg-color: #BCD4FF;">Sellers</span>
                                                <span class="table-tag" style="--bg-color: #9EF7CE;">Industry</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block">Exports: 28</span>
                                            <span class="d-block">Imports: 528</span>
                                        </td>
                                        <td>PAKISTAN</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="table-checkbox d-none" name="table_checkbox" id="checkbox-4">
                                            <label for="checkbox-4" class="table-checkbox-square">
                                                <i class="fa-solid fa-check"></i>
                                            </label>
                                        </td>
                                        <td>
                                            <h5 class="comp-name">ABC TRADERS</h5>
                                        </td>
                                        <td>
                                            <div class="table-na-area">
                                                <span class="table-tag" style="--bg-color: #FFC65A;">Buyers</span>
                                                <span class="table-tag" style="--bg-color: #9EF7CE;">Industry</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block">Imports: 193</span>
                                        </td>
                                        <td>PAKISTAN</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="table-checkbox d-none" name="table_checkbox" id="checkbox-5">
                                            <label for="checkbox-5" class="table-checkbox-square">
                                                <i class="fa-solid fa-check"></i>
                                            </label>
                                        </td>
                                        <td>
                                            <h5 class="comp-name">ABC COMMUNICATION NETWORK PRIVATE LIMITED</h5>
                                        </td>
                                        <td>
                                            <div class="table-na-area">
                                                <span class="table-tag" style="--bg-color: #FFC65A;">Buyers</span>
                                                <span class="table-tag" style="--bg-color: #9EF7CE;">Industry</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block">Imports: 175</span>
                                        </td>
                                        <td>PAKISTAN</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="table-checkbox d-none" name="table_checkbox" id="checkbox-6">
                                            <label for="checkbox-6" class="table-checkbox-square">
                                                <i class="fa-solid fa-check"></i>
                                            </label>
                                        </td>
                                        <td>
                                            <h5 class="comp-name">ABC FISHING CORPORATION</h5>
                                        </td>
                                        <td>
                                            <div class="table-na-area">
                                                <span class="table-tag" style="--bg-color: #FFC65A;">Buyers</span>
                                                <span class="table-tag" style="--bg-color: #BCD4FF;">Sellers</span>
                                                <span class="table-tag" style="--bg-color: #9EF7CE;">Industry</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block">Exports: 106</span>
                                            <span class="d-block">Imports: 1</span>
                                        </td>
                                        <td>PAKISTAN</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="table-checkbox d-none" name="table_checkbox" id="checkbox-7">
                                            <label for="checkbox-7" class="table-checkbox-square">
                                                <i class="fa-solid fa-check"></i>
                                            </label>
                                        </td>
                                        <td>
                                            <h5 class="comp-name">ABC HYGIENE INDUSTRIES PRIVATE LIMITED</h5>
                                        </td>
                                        <td>
                                            <div class="table-na-area">
                                                <span class="table-tag" style="--bg-color: #FFC65A;">Buyers</span>
                                                <span class="table-tag" style="--bg-color: #BCD4FF;">Sellers</span>
                                                <span class="table-tag" style="--bg-color: #9EF7CE;">Industry</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block">Exports: 22</span>
                                            <span class="d-block">Imports: 64</span>
                                        </td>
                                        <td>PAKISTAN</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="table-checkbox d-none" name="table_checkbox" id="checkbox-8">
                                            <label for="checkbox-8" class="table-checkbox-square">
                                                <i class="fa-solid fa-check"></i>
                                            </label>
                                        </td>
                                        <td>
                                            <h5 class="comp-name">ABCO INTERNATIONAL CORPORATION</h5>
                                        </td>
                                        <td>
                                            <div class="table-na-area">
                                                <span class="table-tag" style="--bg-color: #FFC65A;">Buyers</span>
                                                <span class="table-tag" style="--bg-color: #BCD4FF;">Sellers</span>
                                                <span class="table-tag" style="--bg-color: #9EF7CE;">Industry</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block">Exports: 3</span>
                                            <span class="d-block">Imports: 82</span>
                                        </td>
                                        <td>PAKISTAN</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="table-checkbox d-none" name="table_checkbox" id="checkbox-9">
                                            <label for="checkbox-9" class="table-checkbox-square">
                                                <i class="fa-solid fa-check"></i>
                                            </label>
                                        </td>
                                        <td>
                                            <h5 class="comp-name">ABC GROUP</h5>
                                        </td>
                                        <td>
                                            <div class="table-na-area">
                                                <span class="table-tag" style="--bg-color: #FFC65A;">Buyers</span>
                                                <span class="table-tag" style="--bg-color: #9EF7CE;">Industry</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block">Imports: 67</span>
                                        </td>
                                        <td>PAKISTAN</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="table-checkbox d-none" name="table_checkbox" id="checkbox-10">
                                            <label for="checkbox-10" class="table-checkbox-square">
                                                <i class="fa-solid fa-check"></i>
                                            </label>
                                        </td>
                                        <td>
                                            <h5 class="comp-name">ABC BRANDZ</h5>
                                        </td>
                                        <td>
                                            <div class="table-na-area">
                                                <span class="table-tag" style="--bg-color: #FFC65A;">Buyers</span>
                                                <span class="table-tag" style="--bg-color: #BCD4FF;">Sellers</span>
                                                <span class="table-tag" style="--bg-color: #9EF7CE;">Industry</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block">Exports: 60</span>
                                            <span class="d-block">Imports: 6</span>
                                        </td>
                                        <td>PAKISTAN</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="table-checkbox d-none" name="table_checkbox" id="checkbox-11">
                                            <label for="checkbox-11" class="table-checkbox-square">
                                                <i class="fa-solid fa-check"></i>
                                            </label>
                                        </td>
                                        <td>
                                            <h5 class="comp-name">ABC TECHNOLOGIES</h5>
                                        </td>
                                        <td>
                                            <div class="table-na-area">
                                                <span class="table-tag" style="--bg-color: #FFC65A;">Buyers</span>
                                                <span class="table-tag" style="--bg-color: #9EF7CE;">Industry</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block">Imports: 42</span>
                                        </td>
                                        <td>PAKISTAN</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" class="table-checkbox d-none" name="table_checkbox" id="checkbox-12">
                                            <label for="checkbox-12" class="table-checkbox-square">
                                                <i class="fa-solid fa-check"></i>
                                            </label>
                                        </td>
                                        <td>
                                            <h5 class="comp-name">ABC RAGS</h5>
                                        </td>
                                        <td>
                                            <div class="table-na-area">
                                                <span class="table-tag" style="--bg-color: #BCD4FF;">Sellers</span>
                                                <span class="table-tag" style="--bg-color: #9EF7CE;">Industry</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="d-block">Exports: 34</span>
                                        </td>
                                        <td>PAKISTAN</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "./includes/footer.php" ?>
<script src="./assets/js/company-directors.js"></script>

<script>
    var $disabledResults = $(".js-example-disabled-results");
    $disabledResults.select2({
        placeholder: 'Select a country',
        allowClear: false
    });

    new DataTable('#comp-director-table', {
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
                data: ''
            },
            {
                data: 'Company'
            },
            {
                data: 'N/A'
            },
            {
                data: 'Transactions'
            },
            {
                data: 'Address'
            },
        ]
    });
</script>