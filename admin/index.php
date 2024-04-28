<?php
require "../koneksi_db.php";
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit(); // Terminate script execution after the redirect
}

// Query untuk menghitung jumlah data

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard Proctor - CBT Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../skydash/vendors/feather/feather.css">
  <link rel="stylesheet" href="../skydash/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../skydash/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../skydash/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="../skydash/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../skydash/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../skydash/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="#"><img src="../skydash/images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="#"><img src="../skydash/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
          <h2 class="mb-0 font-weight-normal" id="clock"></h2>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pengawas.php" >
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Pengawas</span>
            </a>
          </li>
        
          <li class="nav-item">
          <form method="post" action="logout.php">
            <button type="submit" name="logout" class="btn btn-danger">Logout</button>
          </form>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Halo Admin, Welcome to CBT Admin</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running <span class="text-primary">smoothly!</span></h6>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="../skydash/images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Sidoarjo</h4>
                        <h6 class="font-weight-normal">Indonesia</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Tes</p>
                      <p class="fs-30 mb-2">
                        <?php 
                          require "../koneksi_db.php";
                          $sql = "SELECT COUNT(*) as total FROM wp_bsfsm_options";
                          $result = mysqli_query($conn, $sql);

                          // Memeriksa hasil query
                          if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $jumlah_data_tes = $row['total']; // Mengambil nilai dari kolom 'total'
                            echo "" . $jumlah_data_tes;
                          } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                          }
                        ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Siswa</p>
                      <p class="fs-30 mb-2">
                        <?php 
                            require "../koneksi_db.php";
                            $sql = "SELECT COUNT(*) as total FROM wp_bsfsm_siswa";
                            $result = mysqli_query($conn, $sql);

                            // Memeriksa hasil query
                            if ($result) {
                              $row = mysqli_fetch_assoc($result);
                              $jumlah_data_siswa = $row['total']; // Mengambil nilai dari kolom 'total'
                              echo "" . $jumlah_data_siswa;
                            } else {
                              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                            }
                          ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 grid-margin stretch-card">
              <div class="card ">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <div class="card-body">
                      <h4 class="card-title">Menu Utama Admin</h4>
                      <div class="template-demo">
                        <a href="pengawas.php" class="btn btn-outline-primary btn-fw">Setting Pengawas</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>

          <div class="row">
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <?php echo date('Y'); ?>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Made by <a href="#" target="_blank">SPENLOS</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>

  <script>
    function updateClock() {
      var currentTime = new Date();
      var hours = currentTime.getHours();
      var minutes = currentTime.getMinutes();
      var seconds = currentTime.getSeconds();

      // Add leading zero if necessary
      hours = (hours < 10 ? "0" : "") + hours;
      minutes = (minutes < 10 ? "0" : "") + minutes;
      seconds = (seconds < 10 ? "0" : "") + seconds;

      // Format the time as HH:MM:SS
      var formattedTime = hours + ":" + minutes + ":" + seconds;

      // Display the time in the clock div
      document.getElementById("clock").textContent = formattedTime;
    }

    // Update the clock every second
    setInterval(updateClock, 1000);

    // Initial update
    updateClock();
  </script>
  <!-- End custom js for this page-->
</body>

</html>

