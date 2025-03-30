<?php
session_start();
if(!isset($_SESSION['user']))
{
  header("location:user-login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Crop Prediction</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

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
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Crop Prediction</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="admin.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              <span>Farmer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="change-password.php">
                <i class="bi bi-gear"></i>
                <span>Change-Password</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->



      </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  <!-------------SIDEBAR START--------------------------------->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>CROP PREDICTION</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="farm-add.php">
        <i class="bi bi-journal-text"></i><span>FARM</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li class="nav-item">
          <a class="nav-link " href="farm-add.php">
            <i class="bi bi-grid"></i>
            <span>AAD-FARM</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="manage-farm.php">
            <i class="bi bi-grid"></i>
            <span>MANAGE-FARMS</span>
          </a>

      </ul>




      <a class="nav-link collapsed" data-bs-target="#forms-crop" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>CROP</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-crop" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li class="nav-item">
          <a class="nav-link " href="crop-add.php">
            <i class="bi bi-grid"></i>
            <span>AAD-CROP</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="crop-manage.php">
            <i class="bi bi-grid"></i>
            <span>MANAGE-CROP</span>
          </a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="crop-prediction-show.php">
            <i class="bi bi-grid"></i>
            <span>CROPS-PREDICTION</span>
          </a>
        </li>
      </ul>
      <a class="nav-link collapsed" data-bs-target="#forms-exp" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>EXPENCE</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-exp" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li class="nav-item">
          <a class="nav-link " href="expence-add.php">
            <i class="bi bi-grid"></i>
            <span>AAD-EXPENCE</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="expence-manage.php">
            <i class="bi bi-grid"></i>
            <span>MANAGE-EXPENCE</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="expence-total.php">
            <i class="bi bi-grid"></i>
            <span>Check-Expence</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="profit-prediction.php">
            <i class="bi bi-grid"></i>
            <span>Check-profit-prediction</span>
          </a>
        </li>
      </ul>


      <a class="nav-link collapsed" data-bs-target="#forms-aut" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>AUTHENTICATION</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-aut" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li class="nav-item">
          <a class="nav-link " href="change-password.php">
            <i class="bi bi-grid"></i>
            <span>CHANGE-PASSWORD</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="logout.php">
            <i class="bi bi-grid"></i>
            <span>Log-out</span>
          </a>
        </li>

      </ul>


    </ul>
  </aside>

  </ul>
  </li><!-- End Icons Nav -->

  <!--     <li class="nav-heading">Pages</li>                   --->

  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->