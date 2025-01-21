<?php include "./includes/header.php"; ?>
<link rel="stylesheet" href="./assets/css/profile-views.css">


<main class="main">
    <section class="profile-views-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12 col-xl-10">
                    <div class="section-title-area">
                        <h1 class="section-title">Profile Views</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile View</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-10">
                    <div class="profile-views-filter-area mt-0">
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                <ul class="profile-views-left-list">
                                    <li class="">
                                        <select class="form-select pro-filter-select w-140px bg-white" aria-label="Default select example">
                                            <option selected disabled>Select buyers or sellers</option>
                                            <option value="1">Buyers</option>
                                            <option value="2">Sellers</option>
                                        </select>
                                    </li>
                                    <li class="">
                                        <select class="form-select pro-filter-select w-101px bg-white" aria-label="Default select example">
                                            <option selected disabled>Select country</option>
                                            <option value="1">country 1</option>
                                            <option value="2">country 2</option>
                                            <option value="3">country 3</option>
                                            <option value="4">country 4</option>
                                            <option value="5">country 5</option>
                                        </select>
                                    </li>
                                    <li class="">
                                        <div class="pro-filter-search-area">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                            <input type="text" class="pro-filter-search bg-white w-101px" placeholder="Search" name="" id="">
                                        </div>
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
                                            <img class="img-fluid" src="./assets/images/group-icon.png" alt="">
                                            My groups
                                        </a>
                                    </li>
                                    <li class="filter-btns-right-list-item">
                                        <a class="filter-btn" href="#">
                                            <img class="img-fluid" src="./assets/images/contact-icon.png" alt="">
                                            My contacts
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-10">
                    <div class="company-directors-table-area position-relative">
                        <table class="datatables-ajax table-responsive table-stripe table pro-table" id="profile-views-table">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Type</th>
                                    <th>Company Name</th>
                                    <th>Country</th>
                                    <th>Added On</th>
                                    <th>Status</th>
                                    <th>
                                        <div class="pro-table-btn">
                                            <span>Contacts</span>
                                            <button class="table-btn" type="button">
                                                <img class="img-fluid" src="./assets/images/info-circle.png" alt="">
                                            </button>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Buyer</td>
                                    <td>
                                        <a href="company-profile.php" class="comp-name d-block">ABCO YECHNICAL PVT LTD</a>
                                    </td>
                                    <td>Turkey</td>
                                    <td>03-01-2025</td>
                                    <td>
                                        <button class="table-btn" type="button">
                                            <img class="img-fluid" src="./assets/images/phone-icon.png" alt="">
                                        </button>
                                    </td>
                                    <td>
                                        <ul class="table-btn-list">
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-tag.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-cirlce-add.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/trash.png" alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Buyer</td>
                                    <td>
                                        <a href="company-profile.php" class="comp-name d-block">ABCO YECHNICAL PVT LTD</a>
                                    </td>
                                    <td>Turkey</td>
                                    <td>03-01-2025</td>
                                    <td>
                                        <button class="table-btn" type="button">
                                            <img class="img-fluid" src="./assets/images/phone-icon.png" alt="">
                                        </button>
                                    </td>
                                    <td>
                                        <ul class="table-btn-list">
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-tag.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-cirlce-add.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/trash.png" alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Buyer</td>
                                    <td>
                                        <a href="company-profile.php" class="comp-name d-block">ABCO YECHNICAL PVT LTD</a>
                                    </td>
                                    <td>Turkey</td>
                                    <td>03-01-2025</td>
                                    <td>
                                        <button class="table-btn" type="button">
                                            <img class="img-fluid" src="./assets/images/phone-icon.png" alt="">
                                        </button>
                                    </td>
                                    <td>
                                        <ul class="table-btn-list">
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-tag.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-cirlce-add.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/trash.png" alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Buyer</td>
                                    <td>
                                        <a href="company-profile.php" class="comp-name d-block">ABCO YECHNICAL PVT LTD</a>
                                    </td>
                                    <td>Turkey</td>
                                    <td>03-01-2025</td>
                                    <td>
                                        <button class="table-btn" type="button">
                                            <img class="img-fluid" src="./assets/images/phone-icon.png" alt="">
                                        </button>
                                    </td>
                                    <td>
                                        <ul class="table-btn-list">
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-tag.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-cirlce-add.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/trash.png" alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Buyer</td>
                                    <td>
                                        <a href="company-profile.php" class="comp-name d-block">ABCO YECHNICAL PVT LTD</a>
                                    </td>
                                    <td>Turkey</td>
                                    <td>03-01-2025</td>
                                    <td>
                                        <button class="table-btn" type="button">
                                            <img class="img-fluid" src="./assets/images/phone-icon.png" alt="">
                                        </button>
                                    </td>
                                    <td>
                                        <ul class="table-btn-list">
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-tag.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-cirlce-add.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/trash.png" alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>Buyer</td>
                                    <td>
                                        <a href="company-profile.php" class="comp-name d-block">ABCO YECHNICAL PVT LTD</a>
                                    </td>
                                    <td>Turkey</td>
                                    <td>03-01-2025</td>
                                    <td>
                                        <button class="table-btn" type="button">
                                            <img class="img-fluid" src="./assets/images/phone-icon.png" alt="">
                                        </button>
                                    </td>
                                    <td>
                                        <ul class="table-btn-list">
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-tag.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-cirlce-add.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/trash.png" alt="">
                                                </button>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td>Buyer</td>
                                    <td>
                                        <a href="company-profile.php" class="comp-name d-block">ABCO YECHNICAL PVT LTD</a>
                                    </td>
                                    <td>Turkey</td>
                                    <td>03-01-2025</td>
                                    <td>
                                        <button class="table-btn" type="button">
                                            <img class="img-fluid" src="./assets/images/phone-icon.png" alt="">
                                        </button>
                                    </td>
                                    <td>
                                        <ul class="table-btn-list">
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-tag.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/user-cirlce-add.png" alt="">
                                                </button>
                                            </li>
                                            <li class="">
                                                <button class="table-btn" type="button">
                                                    <img class="img-fluid" src="./assets/images/trash.png" alt="">
                                                </button>
                                            </li>
                                        </ul>
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


<?php include "./includes/footer.php"; ?>
<script src="./assets/js/profile-views.js"></script>


<script>
    new DataTable('#profile-views-table', {
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
                data: 'S/N',
                orderable: false
            },
            {
                data: 'Type'
            },
            {
                data: 'Company Name'
            },
            {
                data: 'Country'
            },
            {
                data: 'Added On'
            },
            {
                data: 'Status',
                orderable: false
            },
            {
                data: 'Contacts',
                orderable: false
            },
        ],
        order: [
            [1, 'asc']
        ]
    });
</script>