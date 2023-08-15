<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">

</head>

<body>

  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
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
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
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
              <a class="dropdown-item d-flex align-items-center" href="#">
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
        <a class="nav-link " href="ShopDashBoard.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="ShopProfitLossReport2.html">
          <i class="bi bi-grid"></i>
          <span>Bet Profit/Loss Report</span>
        </a>
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
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">₹ 100</h2>
              <div style="margin-bottom: 5px!important;"> WALLET AMOUNT </div>
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
              style="background-color: #2ecc71!important;box-sizing: border-box;width: calc(100% - 40px);padding: 12px 15px;"
              id="heightid">
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">Shops Name</h2>
              <div style="margin-bottom: 5px!important;">ANILTESTS</div>
            </div>
            <div
              style="background-color: green;width: 40px;box-sizing: border-box;display: flex;align-items: center;justify-content: center;">
              <i class="ti-user widget-stat-icon" style="font-size: 30px;"></i>
            </div>
          </div>

        </div>

        <div class="col-lg-3">

          <div style="display: flex;margin-bottom: 25px;">
            <div
              style="background-color: #2ecc71!important;box-sizing: border-box;width: calc(100% - 40px);padding: 12px 15px;"
              id="heightid">
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">Owner Name</h2>
              <div style="margin-bottom: 5px!important;">ANIL HURMUNJE</div>
            </div>
            <div
              style="background-color: green;width: 40px;box-sizing: border-box;display: flex;align-items: center;justify-content: center;">
              <i class="ti-user widget-stat-icon" style="font-size: 30px;"></i>
            </div>
          </div>

        </div>

        <div class="col-lg-3">

          <div style="display: flex;margin-bottom: 25px;">
            <div
              style="background-color: #2ecc71!important;box-sizing: border-box;width: calc(100% - 40px);padding: 12px 15px;"
              id="heightid">
              <h2 style="margin-bottom: 5px!important;font-size: 2rem;font-weight: 600!important;">Total Wins</h2>
              <div style="margin-bottom: 5px!important;">0</div>
            </div>
            <div
              style="background-color: green;width:40px;box-sizing: border-box;display: flex;align-items: center;justify-content: center;">
              <i class="ti-user widget-stat-icon" style="font-size: 30px;"></i>
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
                  <h2 class="m-b-5 font-strong" title="Winning Number">4</h2>
                  <i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">0</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">4</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">450</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">9</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">180</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">9</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">450</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">3</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">180</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">5</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">540</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">7</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">270</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">1</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">540</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">0</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">630</div>
                </div>
              </div>
              <div class="col-lg-1 col-md-1">
                <div class="ibox-body" style="padding: 12px 15px;">
                  <h2 class="m-b-5 font-strong" title="Winning Number">9</h2><i class="fa fa-level-up m-r-5"></i>
                  <div class="m-b-5" title="Winning Amount">720</div>
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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>