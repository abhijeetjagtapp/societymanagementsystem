<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet" />
    <title>Admin Page</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet" />
    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <link rel="stylesheet" href="font/font/flaticon.css" />
</head>

<style>
body {
    position: relative;
    overflow-x: hidden;
    background: #f7f7fc;
    font-family: "Roboto", sans-serif;
}

a:hover {
    color: white;
    text-decoration: none;
}

body,
html {
    height: 100%;
}

/*---------------------------------
sidebar
----------------------*/

#sidebar-wrapper {
    z-index: 1000;
    height: 100%;
    width: 0px;
    left: -50px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #222e3c;
    transition: all 0.5s ease;
}

#sidebar-wrapper::-webkit-scrollbar {
    width: 8px;
    background: #222e3c;
}

#sidebar-wrapper::-webkit-scrollbar-thumb {
    background-color: #989898;
    border-radius: 10px;
}

.sidebar-brand {
    font-weight: 600;
    font-size: 1.15rem;
    padding: 1.15rem 1.5rem;
    display: block;
    color: #f8f9fa;
}

.sidebar-header {
    text-transform: capitalize;
    padding: 1.5rem 1.5rem 0.375rem !important;
    font-size: 14px;
    color: #ced4da;
}

.navbar-nav>li>a,
.submenu-box ul li a {
    color: gray !important;
    text-transform: capitalize;
    font-size: 14px;
    padding: 10px 10px 10px 20px !important;
    display: block;
    font-weight: 400;
    position: relative;
    z-index: 2;
    font-family: "Roboto", sans-serif;
    letter-spacing: 0.2px;
}

.submenu-box ul li a {
    padding: 4px 10px 4px 20px !important;
    color: #c1c1c1 !important;
}

.navbar-nav>li>a.active {
    color: #e9ecef !important;
    background: linear-gradient(90deg,
            rgba(59, 125, 221, 0.1),
            rgba(59, 125, 221, 0.0875) 50%,
            transparent);
    border-left: 4px solid #3b7ddd;
}

.navbar-nav .has-sub>a.collapsed::after {
    transition: 0.4s ease;
}

.navbar-nav .has-sub>a.collapsed::after {
    color: gray;
    font-size: 10px;
    content: "\f078";
}

.navbar-nav .has-sub>a.collapsed::after {
    color: gray;
}

.navbar-nav .has-sub>a::after {
    position: absolute;
    right: 0px;
    top: 50%;
    height: 30px;
    width: 30px;
    text-align: center;
    color: gray;
    display: block;
    content: "\f077";
    font-family: "Font Awesome\ 5 Free";
    font-weight: 900;
    font-size: 13px;
    line-height: 30px;
    margin-top: -15px;
}

#wrapper.toggled {
    padding-left: 270px;
}

.toggled#sidebar-wrapper {
    width: 270px !important;
    height: 100%;
    left: 0px;
    overflow-y: auto;
    overflow-x: hidden;
    transition: all 0.5s ease;
}

.navbar-nav li {
    display: block !important;
    margin: 2px 0px;
}

.nav-item .nav-link {
    display: block;
    color: white !important;
    text-transform: capitalize;
    text-decoration: none;
    padding: 6px 10px;
    transition: 0.4s ease;
}

.navbar-nav>li>a i:before {
    margin: 0px 12px 0px 0px;
    font-size: 18px;
}
}

/*---------------------------------
sidebar
----------------------*/

/*---------------------------------
  main-content
----------------------*/

#page-content-wrapper {
    width: 100%;
    transition: all 0.5s ease;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -270px;

    transition: all 0.5s ease;
}

.toggled#page-content-wrapper {
    margin-left: 270px;
    transition: all 0.5s ease;
}

@media only screen and (min-width: 992px) {
    .toggled#page-content-wrapper {
        width: calc(100% - 270px);
    }
}

/*---------------------------------
  main-content
----------------------*/

/*---------------------------------
cross-bar animation
----------------------*/

.nav-icon1 {
    z-index: 999;
    position: relative;
    display: block;
    width: 23px;
    margin: 0px 30px 0px 25px;
    cursor: pointer;
    height: 25px;
}

.nav-icon1 span {
    position: absolute;
    top: 0;
    width: 100%;
    height: 3px;
    cursor: pointer;
    background-color: #5d5d5d;
    left: 0;
    transform: rotate(0deg);
    transition: 0.3s ease-in-out;
}

.nav-icon1:hover span:nth-of-type(1) {
    top: -3px;
}

.nav-icon1:hover span:nth-of-type(3) {
    top: 19px;
}

.nav-icon1 span:nth-of-type(1) {
    top: 0;
}

.nav-icon1 span:nth-of-type(2) {
    top: 8px;
}

.nav-icon1 span:nth-of-type(3) {
    top: 16px;
}

.nav-icon1.open span:nth-of-type(1) {
    top: 8px;
    transform: rotate(135deg);
}

.nav-icon1.open span:nth-of-type(2) {
    top: 8px;
    opacity: 0;
    left: -30px;
}

.nav-icon1.open span:nth-of-type(3) {
    top: 8px;
    transform: rotate(-135deg);
}

/*---------------------------------
cross-bar animation
----------------------*/

/*---------------------------------
header navbar design
----------------------*/
.my-navbar {
    padding: 0px;
    background-color: white;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.16);
}

.text-gray-600 {
    color: #858796 !important;
}

.nav-link .img-profile {
    height: 40px;
    width: 40px;
}

.navbar-nav>li>a>i {
    font-size: 18px;
    color: #b3b3b3;
    margin: 8px 0px 0px 0px;
    padding: 0px;
}

.badge-counter {
    position: absolute;
    transform: scale(0.7);
    transform-origin: top right;
    right: 6px;
    margin-top: 4px;
}

.dropdown,
.dropleft,
.dropright,
.dropup {
    position: relative;
}

.nav-flag,
.nav-icon {
    padding: 0.1rem 0.8rem;
    display: block;
    font-size: 1.5rem;
    color: #6c757d;
    transition: background 0.1s ease-in-out, color 0.1s ease-in-out;
    line-height: 1.4;
}

.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute;
}

.navbar-nav .dropdown-menu {
    box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, 0.05);
}

.navbar-nav .dropdown-menu {
    position: static;
    float: none;
}

.dropdown-menu-lg {
    min-width: 20rem;
}

.position-relative {
    position: relative !important;
}

.nav-item .indicator {
    background: #3b7ddd;
    box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, 0.05);
    border-radius: 50%;
    display: block;
    height: 18px;
    width: 18px;
    padding: 1px;
    position: absolute;
    top: 0;
    right: -8px;
    text-align: center;
    transition: top 0.1s ease-out;
    font-size: 0.675rem;
    color: #fff;
}

/*---------------------------------
 header navbar design
----------------------*/

/*---------------------------------
main-top card
----------------------*/

.dashboardbutton {
    border: none;
    background: transparent;
}

.card {
    margin-bottom: 24px;
    border: none;
    box-shadow: 0 0 0.875rem 0 rgba(33, 37, 41, 0.05);
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}

.card-body:hover {
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
    color: #000;
}

.card-title {
    font-size: 1.2rem !important;
    color: #495057;
}

.card-body h1 {
    font-size: 1.75rem;
    font-weight: 400;
    line-height: 1.2;
    color: #000;
}

small.details {
    color: #000;
}

.text-gray-800 {
    color: #5a5c69 !important;
    font-size: 1.75rem;
    font-weight: 400;
    line-height: 1.2;
}

.shadow-sm {
    box-shadow: 0 0.125rem 0.25rem 0 rgba(58, 59, 69, 0.2) !important;
}

.btn-sm {
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1.5;
    border-radius: 0.2rem;
}

.font-16 {
    font-size: 16px;
}

/*---------------------------------
main-top card
----------------------*/

/*---------------------------------
main-table
----------------------*/

.m-r-10 {
    margin-right: 10px;
}

.btn-circle {
    border-radius: 100%;
    width: 40px;
    height: 40px;
    padding: 10px;
}

.btn-info {
    color: #fff;
    background-color: #2962ff;
    border-color: #2962ff;
}

.btn-orange {
    color: #212529;
    background-color: #fb8c00;
    border-color: #fb8c00;
}

.btn-success {
    color: #fff;
    background-color: #36bea6;
    border-color: #36bea6;
}

.btn-purple {
    color: #fff;
    background-color: #7460ee;
    border-color: #7460ee;
}

.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px;
}

.card .card-subtitle {
    font-weight: 300;
    margin-bottom: 10px;
    color: #a1aab2;
    margin-top: -0.375rem;
}

.table td,
.table th {
    padding: 1rem;
    font-size: 14px;
    color: #333;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

.table h5 {
    font-size: 16px;
    font-weight: 600;
    color: #585858;
}

/*---------------------------------
main-table
----------------------*/

/*---------------------------------
 footer
----------------------*/

footer.footer {
    padding: 1rem 0.875rem;
    direction: ltr;
    background: #fff;
}

footer.footer ul {
    margin: 0px;
    list-style: none;
}

.footer ul li {
    display: inline-block;
    margin: 0px 7px;
}

.text-muted {
    color: #6c757d !important;
    font-size: 14px;
}

/*---------------------------------
footer
----------------------*/
</style>

<body>
    <div id="wrapper">
        <div class="overlay"></div>

        <!-- Sidebar -->
        <nav class="fixed-top align-top" id="sidebar-wrapper" role="navigation">
            <div class="simplebar-content" style="padding: 0px;">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">Sea Breeze Society</span>
                </a>

                <ul class="navbar-nav align-self-stretch">
                <a href="index.php"><li class="sidebar-header">
                        Home
                    </li></a>
                    
                    <li class="">
                        <a class="nav-link text-left active" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="flaticon-bar-chart-1"></i> Dashboard
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Accounts
                    </li>

                    <li class="">
                        <a class="nav-link text-left" role="button">
                            <i class="flaticon-bar-chart-1"></i> Society Members
                        </a>
                    </li>

                    <li class="">
                        <a class="nav-link text-left" role="button">
                            <i class="flaticon-bar-chart-1"></i> Staff Members
                        </a>
                    </li>
                    <a href="owners.php">
                        <li class="sidebar-header">
                            Owners
                        </li>
                    </a>
                    <a href="board.php">
                        <li class="sidebar-header">
                            Notices
                        </li>
                    </a>
                    <a href="maintenance.php">
                        <li class="sidebar-header">
                            Maintenance
                        </li>
                    </a>
                    <li class="sidebar-header">
                        Billings
                    </li>
                    <a href="complaintBoard.php">
                        <li class="sidebar-header">
                            Complaints
                        </li>
                    </a>
                    <li class="sidebar-header">
                        Parking
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div id="content">
                <div class="container-fluid p-0 px-lg-0 px-md-0">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light my-navbar">
                        <!-- Sidebar Toggle (Topbar) -->
                        <div type="button" id="bar" class="nav-icon1 hamburger animated fadeInLeft is-closed"
                            data-toggle="offcanvas">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <!-- Topbar Search -->
                        <form class="d-none d-sm-inline-block form-inline navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light" placeholder="Search for..."
                                    aria-label="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown d-sm-none">
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." />
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown">
                                <a class="nav-icon dropdown" href="#" id="alertsDropdown" data-toggle="dropdown"
                                    aria-expanded="false">
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0"
                                    aria-labelledby="alertsDropdown">
                                    <div class="dropdown-menu-footer">
                                        <a href="#" class="text-muted">Show all notifications</a>
                                    </div>
                                </div>
                            </li>
                            <!-- Nav Item - Messages -->
                            <li class="nav-item">
                                <a class="nav-link" href="#" role="button">
                                    <i class="fas fa-envelope"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid px-lg-4">
                        <div class="row">
                            <div class="col-md-12 mt-lg-4 mt-4">
                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                            class="fas fa-download fa-sm text-white-50"></i>
                                        Generate Report</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="card">
                                            <a href="board.php">
                                                <div class="card-body">
                                                    <h3 class="card-title mb-4">Notices</h3>
                                                    <small class="details">View Details</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card">
                                            <a href="complaintBoard.php">
                                                <div class="card-body">
                                                    <h3 class="card-title mb-4">Complaints</h3>
                                                    <small class="details">View Details</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card">
                                            <a href="maintenance.php">
                                                <div class="card-body">
                                                    <h3 class="card-title mb-4">Maintenance</h3>
                                                    <small class="details">View Details</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card">
                                            <a href="billings.php">
                                                <div class="card-body">
                                                    <h3 class="card-title mb-4">Billings</h3>
                                                    <small class="details">View Details</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- column -->
                            <div class="col-md-12 mt-4">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- title -->
                                        <div class="d-md-flex align-items-center">
                                            <div>
                                                <h2 class="card-title">Maintenance Pending</h2>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="dl">
                                                    <select class="custom-select">
                                                        <option value="0" selected="">Monthly</option>
                                                        <option value="1">Daily</option>
                                                        <option value="2">Weekly</option>
                                                        <option value="3">Yearly</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- title -->
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table v-middle">
                                            <thead>
                                                <tr class="bg-light">
                                                    <th class="border-top-0">Names</th>
                                                    <th class="border-top-0">Flat No.</th>
                                                    <th class="border-top-0">Maintenance</th>
                                                    <th class="border-top-0">Water Charges</th>
                                                    <th class="border-top-0">Parking</th>
                                                    <th class="border-top-0">Society Fund</th>
                                                    <th class="border-top-0">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="m-r-10">
                                                                <a class="btn btn-circle btn-info text-white">AJ</a>
                                                            </div>
                                                            <div class="">
                                                                <h4 class="m-b-0 font-16">Abhijeet</h4>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>389</td>
                                                    <td>5000</td>
                                                    <td>
                                                        <label class="label label-danger">1000</label>
                                                    </td>
                                                    <td>3000</td>
                                                    <td>1000</td>
                                                    <td>
                                                        <h5 class="m-b-0">10,000</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="m-r-10">
                                                                <a class="btn btn-circle btn-orange text-white">AP</a>
                                                            </div>
                                                            <div class="">
                                                                <h4 class="m-b-0 font-16">Abhishek</h4>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5000</td>
                                                    <td>500</td>
                                                    <td>
                                                        <label class="label label-info">2454</label>
                                                    </td>
                                                    <td>5220</td>
                                                    <td>459</td>
                                                    <td>
                                                        <h5 class="m-b-0">6000</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="m-r-10">
                                                                <a class="btn btn-circle btn-success text-white">MP</a>
                                                            </div>
                                                            <div class="">
                                                                <h4 class="m-b-0 font-16">
                                                                    Mahendra
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2222</td>
                                                    <td>5633</td>
                                                    <td>
                                                        <label class="label label-success">4242</label>
                                                    </td>
                                                    <td>46</td>
                                                    <td>356</td>
                                                    <td>
                                                        <h5 class="m-b-0">200000</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="m-r-10">
                                                                <a class="btn btn-circle btn-purple text-white">PP</a>
                                                            </div>
                                                            <div class="">
                                                                <h4 class="m-b-0 font-16">Pratik</h4>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>S1000</td>
                                                    <td>2000</td>
                                                    <td>
                                                        <label class="label label-purple">3000</label>
                                                    </td>
                                                    <td>1000</td>
                                                    <td>500</td>
                                                    <td>
                                                        <h5 class="m-b-0">$20000</h5>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-muted">
                            <div class="col-6 text-left">
                                <p class="mb-0">
                                    <a href="index.html" class="text-muted"><strong>Dashboard Abhijeet Jagtap
                                        </strong></a>
                                    &copy
                                </p>
                            </div>
                            <div class="col-6 text-right">
                                <ul class="list-inline">
                                    <li class="footer-item">
                                        <a class="text-muted" href="#">Support</a>
                                    </li>
                                    <li class="footer-item">
                                        <a class="text-muted" href="#">Help Center</a>
                                    </li>
                                    <li class="footer-item">
                                        <a class="text-muted" href="#">Privacy</a>
                                    </li>
                                    <li class="footer-item">
                                        <a class="text-muted" href="#">Terms</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script>
    $("#bar").click(function() {
        $(this).toggleClass("open");
        $("#page-content-wrapper ,#sidebar-wrapper").toggleClass("toggled");
    });
    </script>
</body>

</html>