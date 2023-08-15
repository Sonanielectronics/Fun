<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
  <style>
    @media (min-width: 992px) {
      .col-lg-3 {
        flex: 0 0 auto;
        width: 25%;
      }
    }

    @media (max-width: 1199px) {
      .toggle-sidebar .sidebar {
        width: 100%;
      }
    }

    #heightid {
      height: 125px;
    }
  </style>
</head>

<body>

  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <!-- <span class="d-none d-lg-block">NiceAdmin</span> -->
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['UserName']; ?></span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="https://funtargetgame.co.in/LogOut">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul>
        </li>

      </ul>
    </nav>

  </header>

  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="DashBoard.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Master Account</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="AddShop.html">
              <i class="bi bi-circle"></i><span>Master Id List</span>
            </a>
          </li>
          <li>
            <a href="ShopList2.html">
              <i class="bi bi-circle"></i><span>Add Master Id</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Agent</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="ShopList.html">
              <i class="bi bi-circle"></i><span>Agent List</span>
            </a>
          </li>
          <li>
            <a href="Weekly.html">
              <i class="bi bi-circle"></i><span>Add Agent</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Fund Transfer</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="FundListCopy.html">
              <i class="bi bi-circle"></i><span>Fund List</span>
            </a>
          </li>
          <li>
            <a href="FundAdd.html">
              <i class="bi bi-circle"></i><span>Add Fund</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Bet Amounts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="BetListCopy.html">
              <i class="bi bi-circle"></i><span>Bet Amount List</span>
            </a>
          </li>
          <li>
            <a href="BetAdd.html">
              <i class="bi bi-circle"></i><span>Add Amount Bet</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Results</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="ResultListCopy.html">
              <i class="bi bi-circle"></i><span>Results List</span>
            </a>
          </li>
          <li>
            <a href="ResultAdd.html">
              <i class="bi bi-circle"></i><span>Add Results</span>
            </a>
          </li>
          <li>
            <a href="ResultAddRoundWinner.html">
              <i class="bi bi-circle"></i><span>Add Round Winner</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Report</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="ShopWinningReport.html">
              <i class="bi bi-circle"></i><span>Shop Winning Report</span>
            </a>
          </li>
          <li>
            <a href="ShopBetReport.html">
              <i class="bi bi-circle"></i><span>Shop Bet Report</span>
            </a>
          </li>
          <li>
            <a href="ShopProfitLossReport.html">
              <i class="bi bi-circle"></i><span>Shop Profit\Loss Report</span>
            </a>
          </li>
          <li>
            <a href="Transaction.html">
              <i class="bi bi-circle"></i><span>All Profit\Loss Report</span>
            </a>
          </li>
        </ul>
      </li>

    </ul>

  </aside>

  <main id="main" class="main">

    <section class="section">
      <div class="row" style="margin-bottom: 25px;">

        <div class="col-lg-3">

          <div style="display: flex;margin-bottom: 25px;">
            <div
              style="background-color: #2ecc71!important;box-sizing: border-box;width: calc(100% - 40px);padding: 12px 15px;"
              id="heightid">
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">23</h2>
              <div style="margin-bottom: 5px!important;"> TOTAL Shop ( 0 ) </div>
            </div>
            <div
              style="background-color: green;width: 40px;box-sizing: border-box;display: flex;align-items: center;justify-content: center;">
              <i class="fa fa-money widget-stat-icon" style="font-size: 30px;"></i>
            </div>
          </div>

        </div>

        <div class="col-lg-3">

          <div style="display: flex;margin-bottom: 25px;">
            <div
              style="background-color: #23B6E5!important;box-sizing: border-box;width: calc(100% - 40px);padding: 12px 15px;"
              id="heightid">
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">128899</h2>
              <div style="margin-bottom: 5px!important;">TOTAL GAME PLAYED</div>
            </div>
            <div
              style="background-color: #1EA4CE;width: 40px;box-sizing: border-box;display: flex;align-items: center;justify-content: center;">
              <i class="fa fa-money widget-stat-icon" style="font-size: 30px;"></i>
            </div>
          </div>

        </div>

        <div class="col-lg-3">

          <div style="display: flex;margin-bottom: 25px;">
            <div
              style="background-color: #F29C12!important;box-sizing: border-box;width: calc(100% - 40px);padding: 12px 15px;"
              id="heightid">
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">1302832</h2>
              <div style="margin-bottom: 5px!important;">TOTAL SHOP WALLET</div>
            </div>
            <div
              style="background-color: #DA8B10;width: 40px;box-sizing: border-box;display: flex;align-items: center;justify-content: center;">
              <i class="fa fa-money widget-stat-icon" style="font-size: 30px;"></i>
            </div>
          </div>

        </div>

        <div class="col-lg-3">

          <div style="display: flex;margin-bottom: 25px;">
            <div
              style="background-color: #E64B3C!important;box-sizing: border-box;width: calc(100% - 40px);padding: 12px 15px;"
              id="heightid">
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">163125</h2>
              <div style="margin-bottom: 5px!important;">TOTAL BETS</div>
            </div>
            <div
              style="background-color: #D04336;width:40px;box-sizing: border-box;display: flex;align-items: center;justify-content: center;">
              <i class="ti-user widget-stat-icon" style="font-size: 30px;"></i>
            </div>
          </div>

        </div>

        <div class="col-lg-3">

          <div style="display: flex;margin-bottom: 25px;">
            <div
              style="background-color: #F29C12!important;box-sizing: border-box;width: calc(100% - 40px);padding: 12px 15px;"
              id="heightid">
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">23831128</h2>
              <div style="margin-bottom: 5px!important;">TOTAL BETS AMOUNT</div>
            </div>
            <div
              style="background-color: #DA8B10;width: 40px;box-sizing: border-box;display: flex;align-items: center;justify-content: center;">
              <i class="fa fa-money widget-stat-icon" style="font-size: 30px;"></i>
            </div>
          </div>

        </div>

        <div class="col-lg-3">

          <div style="display: flex;margin-bottom: 25px;">
            <div
              style="background-color: #3397DB!important;box-sizing: border-box;width: calc(100% - 40px);padding: 12px 15px;"
              id="heightid">
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">20928145</h2>
              <div style="margin-bottom: 5px!important;">TOTAL WINNING AMOUNT</div>
            </div>
            <div
              style="background-color: #2F88C5;width: 40px;box-sizing: border-box;display: flex;align-items: center;justify-content: center;">
              <i class="fa fa-money widget-stat-icon" style="font-size: 30px;"></i>
            </div>
          </div>

        </div>

        <div class="col-lg-3">

          <div style="display: flex;margin-bottom: 25px;">
            <div
              style="background-color: #23B6E5!important;box-sizing: border-box;width: calc(100% - 40px);padding: 12px 15px;"
              id="heightid">
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">247610</h2>
              <div style="margin-bottom: 5px!important;">TODAY BETS AMOUNT</div>
            </div>
            <div
              style="background-color: #1EA4CE;box-sizing: border-box;width:40px;display: flex;align-items: center;justify-content: center;">
              <i class="fa fa-money widget-stat-icon" style="font-size: 30px;"></i>
            </div>
          </div>

        </div>

        <div class="col-lg-3">

          <div style="display: flex;margin-bottom: 25px;">
            <div
              style="background-color: #868E96!important;box-sizing: border-box;width: calc(100% - 40px);padding: 12px 15px;"
              id="heightid">
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">223000</h2>
              <div style="margin-bottom: 5px!important;">TODAY WINNING AMOUNT</div>
            </div>
            <div
              style="background-color: #777F87;box-sizing: border-box;width:40px;display: flex;align-items: center;justify-content: center;">
              <i class="fa fa-money widget-stat-icon" style="font-size: 30px;"></i>
            </div>
          </div>

        </div>

        <div class="col-lg-3">

          <div style="display: flex;margin-bottom: 25px;">
            <div
              style="background-color: #23B6E5!important;box-sizing: border-box;width: calc(100% - 40px);padding: 12px 15px;"
              id="heightid">
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">24761</h2>
              <div style="margin-bottom: 5px!important;">PROFIT LIMIT</div>
            </div>
            <div
              style="background-color: #1EA4CE;box-sizing: border-box;width:40px;display: flex;align-items: center;justify-content: center;">
              <i class="fa fa-money widget-stat-icon" style="font-size: 30px;"></i>
            </div>
          </div>

        </div>

        <div class="col-lg-3">

          <div style="display: flex;margin-bottom: 25px;">
            <div
              style="background-color: #2ecc71!important;box-sizing: border-box;width: calc(100% - 40px);padding: 12px 15px;"
              id="heightid">
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">25070</h2>
              <div style="margin-bottom: 5px!important;">SHOP PROFIT</div>
            </div>
            <div
              style="background-color: green;box-sizing: border-box;width:40px;display: flex;align-items: center;justify-content: center;">
              <i class="fa fa-money widget-stat-icon" style="font-size: 30px;"></i>
            </div>
          </div>

        </div>

      </div>
      <div class="row" style="margin-bottom: 25px;">
        <div class="col-lg-12 col-md-12">
          <div class="ibox bg-success color-white widget-stat" style="background-color: #2ecc71!important;">
            <div style="padding: 12px 15px;">Last 10 Winner</div>
            <div class="row">
              <div class="col-lg-2 col-md-2">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="winning Number">Number</h2>
                  <div>&nbsp;</div>
                  <div class="m-b-5" title="winning Amount"> Amount</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">6</h2>
                  <i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">0</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">6</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">360</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">8</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">270</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">7</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">0</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">0</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">180</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">2</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">0</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">6</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">0</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">7</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">450</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">4</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">0</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">7</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">360</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-bottom: 25px;">
        <div class="col-lg-12 col-md-12">
          <div class="ibox bg-success color-white widget-stat" style="background-color: #23B6E5!important;">
            <div style="padding: 12px 15px;">Total Bets on Number</div>
            <div class="row">
              <div class="col-lg-2 col-md-2">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="winning Number">Number</h2>
                  <div>&nbsp;</div>
                  <div class="m-b-5" title="winning Amount"> Amount</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">0</h2>
                  <i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">2491291</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">1</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">2493588</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">2</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">2312129</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">3</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">2350892</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">4</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">2305795</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">5</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">2375911</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">6</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">2315070</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">7</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">2335151</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">8</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">2402869</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">9</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">2448432</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-bottom: 25px;">
        <div class="col-lg-12 col-md-12">
          <div class="ibox bg-success color-white widget-stat" style="background-color: #868E96!important;">
            <div style="padding: 12px 15px;">Total Bets on Number Today</div>
            <div class="row">
              <div class="col-lg-2 col-md-2">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="winning Number">Number</h2>
                  <div>&nbsp;</div>
                  <div class="m-b-5" title="winning Amount"> Amount</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">0</h2>
                  <i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">26000</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">1</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">31680</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">2</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">20860</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">3</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">23180</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">4</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">23480</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">5</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">22460</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">6</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">28280</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">7</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">21980</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">8</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">25260</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">9</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">24430</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-4"></div>
        <div class="col-lg-4 col-md-4 text-center"><a class="btn btn-success" href=""> Go to Home</a></div>
      </div>
    </section>

  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>