<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsvectormap/dist/jsvectormap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/layout.css">
    <title>Custom EWT</title>
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-6 col-lg-3">
                    <a href="." class="logo text-decoration-none">
                        <img class="img-fluid" src="./assets/images/svgs/Logo.svg" alt="">
                    </a>
                </div>
                <div class="col-12 col-lg-6">
                    <nav class="navigation">
                        <ul class="nav-list">
                            <li class="nav-list-item">
                                <a href="dashboard.php" class="navigation-link active">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.86328 18.6501V16.5801" stroke="#898989" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M12.9824 18.6498V14.5098" stroke="#898989" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M18.1016 18.6497V12.4297" stroke="#898989" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M18.1033 6.34961L17.6433 6.88961C15.0933 9.86961 11.6733 11.9796 7.86328 12.9296" stroke="#898989" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M15.1719 6.34961H18.1019V9.26961" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.98242 22.5H15.9824C20.9824 22.5 22.9824 20.5 22.9824 15.5V9.5C22.9824 4.5 20.9824 2.5 15.9824 2.5H9.98242C4.98242 2.5 2.98242 4.5 2.98242 9.5V15.5C2.98242 20.5 4.98242 22.5 9.98242 22.5Z" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-list-item position-relative">
                                <button type="button" class="navigation-link">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4824 21.5C17.7291 21.5 21.9824 17.2467 21.9824 12C21.9824 6.75329 17.7291 2.5 12.4824 2.5C7.23572 2.5 2.98242 6.75329 2.98242 12C2.98242 17.2467 7.23572 21.5 12.4824 21.5Z" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M22.9824 22.5L20.9824 20.5" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Find
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="sb-nav-list">
                                    <li class="sb-nav-list-item">
                                        <a class="navigation-link fw-regular" href="#">
                                            Buyer & Seller
                                        </a>
                                    </li>
                                    <li class="sb-nav-list-item">
                                        <a class="navigation-link fw-regular" href="company-&-director-search-results.php">
                                            Company & Directors
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-list-item position-relative">
                                <button type="button" class="navigation-link">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.3024 12.4992C21.9024 12.4992 22.9824 11.4992 22.0224 8.2192C21.3724 6.0092 19.4724 4.1092 17.2624 3.4592C13.9824 2.4992 12.9824 3.5792 12.9824 6.1792V9.0592C12.9824 11.4992 13.9824 12.4992 15.9824 12.4992H19.3024Z" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M20.9819 15.1998C20.0519 19.8298 15.6119 23.1898 10.5619 22.3698C6.77186 21.7598 3.72186 18.7098 3.10186 14.9198C2.29186 9.88977 5.63186 5.44977 10.2419 4.50977" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    Analysis
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                                <ul class="sb-nav-list">
                                    <li class="sb-nav-list-item">
                                        <a class="navigation-link fw-regular" href="trade-analysis-search.php">
                                            Trade Analysis
                                        </a>
                                    </li>
                                    <li class="sb-nav-list-item">
                                        <a class="navigation-link fw-regular" href="port-analysis.php">
                                            Port Analysis
                                        </a>
                                    </li>
                                    <li class="sb-nav-list-item">
                                        <a class="navigation-link fw-regular" href="country-analysis.php">
                                            Country Analysis
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-list-item">
                                <a href="#" class="navigation-link">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.2222 9.45898H7.24219" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.2324 7.7793V9.45929" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14.7324 9.43945C14.7324 13.7395 11.3724 17.2194 7.23242 17.2194" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.2316 17.22C15.4316 17.22 13.8316 16.26 12.6816 14.75" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.23242 22.5H15.2324C20.2324 22.5 22.2324 20.5 22.2324 15.5V9.5C22.2324 4.5 20.2324 2.5 15.2324 2.5H9.23242C4.23242 2.5 2.23242 4.5 2.23242 9.5V15.5C2.23242 20.5 4.23242 22.5 9.23242 22.5Z" stroke="#898989" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    English
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-6 col-lg-3 text-webkit-right">
                    <div class="head-profile-btn-area">
                        <button class="head-pro-btn" type="button">
                            <img class="img-fluid user-pro-img" src="./assets/images/dummy-pro-img.png" alt="">
                            <div class="">
                                <span class="user_name">Sara Fox</span>
                                <span class="user_category">Platinum</span>
                            </div>
                            <i class="fa-solid fa-angle-down"></i>
                        </button>
                        <ul class="profile-list">
                            <li class="profile-list-item">
                                <a class="navigation-link fw-regular" href="#">
                                    My Profile
                                </a>
                            </li>
                            <li class="profile-list-item">
                                <a class="navigation-link fw-regular" href="#">
                                    My Preferences
                                </a>
                            </li>
                            <li class="profile-list-item">
                                <a class="navigation-link fw-regular" href="smart-box.php">
                                    Smart Box
                                </a>
                            </li>
                            <li class="profile-list-item">
                                <a class="navigation-link fw-regular" href="profile-views.php">
                                    Profile Views
                                </a>
                            </li>
                            <li class="profile-list-item">
                                <a class="navigation-link fw-regular" href="#">
                                    My Contact
                                </a>
                            </li>
                            <li class="profile-list-item">
                                <a class="navigation-link fw-regular" href="#">
                                    Support
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>