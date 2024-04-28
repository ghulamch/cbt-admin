<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="LoitgpzpFpZqAuVmHcoFlgOrwbYkWp1wloRTtwcb">
    <title></title>
    
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'>
    <link rel="shortcut icon" href="img/logomansda.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="plugins/bootstrap_41_dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Fonts and icons -->
    <script src="plugins/webfont/webfont.min.js"></script>
    <!-- Sweet Alert -->
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['http://172.16.16.10:2023/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link rel="stylesheet" href="css/atlantis.min.css">
    <style>
        .brand-image{
            margin-top:-.5rem;margin-right:.2rem;height:33px
        }
        .img-circle{
            border-radius:50%
        }
        .elevation-3{
            box-shadow:0 10px 20px rgba(0,0,0,.19),0 6px 6px rgba(0,0,0,.23)!important
        }
        .page-inner{
            background: url(img/bg.png);
        }
        
        .container-fluid{
            background: url(img/bg.png);
        }
        
        span#loader-text {
            display: block;
            position: relative;
            left: 50%;
            top: 65%;
            width: 175px;
            height: 150px;
            margin: -75px 0 0 -85px;
            text-align: center;
        }
    </style>
    <meta http-equiv="refresh" content="500">
<link rel="stylesheet" href="plugins/toastr/toastr.min.css">

<style>
    .moonlite-bg-gradient{
        background: #0F2027;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to top, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .lawrencium-bg-gradient{
        background: #0f0c29;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to top, #24243e, #302b63, #0f0c29);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #24243e, #302b63, #0f0c29); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .calestial-bg-gradient{
        background: #C33764;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to top, #1D2671, #C33764);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #1D2671, #C33764); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .mirage-bg-gradient{
        background: #16222A;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to top, #3A6073, #16222A);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #3A6073, #16222A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .elviolet-bg-gradient{
        background: #4776E6;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to top, #8E54E9, #4776E6);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #8E54E9, #4776E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .horizon-bg-gradient{
        background: #003973;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #E5E5BE, #003973);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #E5E5BE, #003973); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        
    }
    .rosewater-bg-gradient{
        background: #E55D87;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #5FC3E4, #E55D87);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #5FC3E4, #E55D87); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .jshine-bg-gradient{
        background: #12c2e9;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .purple-bg-gradient{
        background: #360033;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to top, #0b8793, #360033);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #0b8793, #360033); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .sunset-bg-gradient{
        background: #0B486B;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #F56217, #0B486B);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #F56217, #0B486B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        
    }
    
    .bg-success-gradient {
        background: #31ce36 !important;
        background: -webkit-linear-gradient(legacy-direction(-45deg),#179d08,#31ce36) !important;
        background: linear-gradient(-45deg,#073502,#31ce67) !important;
    }
</style>
    
</head>

<body>
        <div class="wrapper overlay-sidebar">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue2">
                
                <a href="javascript:void(0);" class="logo">
                    <img src="img/avatar2.png" alt="Pembayaran Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="text-white ml-2">CBT ADMIN</span>
                </a>
                
                
                
            </div>
            <!-- End Logo Header -->
            
            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                
                <div class="container-fluid">
                    
                                        
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
        
        
        
        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
    <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
    <h5 class="text-white op-7 mb-2">Proktor Ruangan - SMPN 2 SUKODONO</h5>
</div>
<div class="ml-md-auto py-2 py-md-0">
    <a href="index.php" class="btn btn-secondary btn-round mr-2"><i class="fas fa-caret-left mr-2"></i>
        Kembali
    </a>
    
</div>
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">
                    <div class="row">
    <div class="col-md-4 col-12">
        <div class="card card-dark purple-bg-gradient">
            <div class="card-body pb-0">
                <div class="h1 fw-bold float-right">
                    <i class="fas fa-calendar"></i>
                </div>
                <h2 class="mb-2">
                    <?php
                    require 'koneksi_db.php';

                    $sql = "SELECT COUNT(*) AS total FROM wp_bsfsm_options WHERE tanggal = '$currentDate'";
                    $result = mysqli_query($conn, $sql);

                    if (!$result) {
                        die("Error: " . mysqli_error($conn));
                    }

                    $row = mysqli_fetch_assoc($result);
                    $totalData = $row['total'];

                    echo $totalData;
                    ?>
                </h2>
                <p>Jadwal Ujian Hari Ini</p>

                <div class="pull-in sparkline-fix chart-as-background">
                    <div id="lineChart"><canvas width="311" height="70" style="display: inline-block; width: 311.328px; height: 70px; vertical-align: top;"></canvas></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-12">
        <div class="card card-dark sunset-bg-gradient">
            <div class="card-body pb-0">
                <div class="h1 fw-bold float-right">
                    <i class="fas fa-user-tie"></i>
                </div>
                <h2 class="mb-2"><?php
                    // require 'koneksi_db.php';

                    $sql_siswa = "SELECT COUNT(*) AS total_siswa FROM wp_bsfsm_siswa";
                    $result_siswa = mysqli_query($conn, $sql_siswa);

                    if (!$result_siswa) {
                        die("Error: " . mysqli_error($conn));
                    }

                    $row_siswa = mysqli_fetch_assoc($result_siswa);
                    $totalData_siswa = $row_siswa['total_siswa'];

                    echo $totalData_siswa;
                    ?></h2>
                <p>Jumlah Peserta</p>
                <div class="pull-in sparkline-fix chart-as-background">
                    <div id="lineChart2"><canvas width="311" height="70" style="display: inline-block; width: 311.328px; height: 70px; vertical-align: top;"></canvas></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-12">
        <div class="card card-dark calestial-bg-gradient">
            <div class="card-body pb-0">
                <div class="h1 fw-bold float-right">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h2 class="mb-2">20</h2>
                <p>Jumlah Ruang Ujian</p>
                <div class="pull-in sparkline-fix chart-as-background">
                    <div id="lineChart3"><canvas width="311" height="70" style="display: inline-block; width: 311.328px; height: 70px; vertical-align: top;"></canvas></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" id="listRuangUjian">
    <?php
    // Koneksi ke database
    include 'koneksi.php';

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Mendapatkan tanggal hari ini dalam format Y-m-d
    $today = date("Y-m-d");

    // Array untuk menyimpan data ruang dan jumlahnya
    $daftarRuang = array("RUANG 1", "RUANG 2", "RUANG 3", "RUANG 4", "RUANG 5", "RUANG 6", "RUANG 7","RUANG 8", "RUANG 9", "RUANG 10", "RUANG 11", "RUANG 12", "RUANG 13", "RUANG 14", "RUANG 15", "RUANG 16", "RUANG 17","RUANG 18", "RUANG 19", "RUANG 20");

    // Array untuk menyimpan link sesuai ruang
    $links = array(
        "RUANG 1" => "proktor/pilihruang/ruang1.php",
        "RUANG 2" => "proktor/pilihruang/ruang2.php",
        "RUANG 3" => "proktor/pilihruang/ruang3.php",
        "RUANG 4" => "proktor/pilihruang/ruang4.php",
        "RUANG 5" => "proktor/pilihruang/ruang5.php",
        "RUANG 6" => "proktor/pilihruang/ruang6.php",
        "RUANG 7" => "proktor/pilihruang/ruang7.php",
        "RUANG 8" => "proktor/pilihruang/ruang8.php",
        "RUANG 9" => "proktor/pilihruang/ruang9.php",
        "RUANG 10" => "proktor/pilihruang/ruang10.php",
        "RUANG 11" => "proktor/pilihruang/ruang11.php",
        "RUANG 12" => "proktor/pilihruang/ruang12.php",
        "RUANG 13" => "proktor/pilihruang/ruang13.php",
        "RUANG 14" => "proktor/pilihruang/ruang14.php",
        "RUANG 15" => "proktor/pilihruang/ruang15.php",
        "RUANG 16" => "proktor/pilihruang/ruang16.php",
        "RUANG 17" => "proktor/pilihruang/ruang17.php",
        "RUANG 18" => "proktor/pilihruang/ruang18.php",
        "RUANG 19" => "proktor/pilihruang/ruang19.php",
        "RUANG 20" => "proktor/pilihruang/ruang20.php"
    );

    // Loop untuk setiap ruang
    foreach ($daftarRuang as $ruang) {
        // Query untuk mengambil data jadwal berdasarkan ruang tertentu dan tanggal hari ini
        $sql = "SELECT mapel, nama FROM pengawas WHERE ruang='$ruang' AND tanggal='$today'";
        $result = $conn->query($sql);

        // Output kartu ruang hanya jika ada jadwal untuk ruang tersebut
        if ($result->num_rows > 0) {
            echo '<div class="col-md-4 col-12">'; // Mengubah col-4 menjadi col-12
            echo '<div class="card" id="card-' . str_replace(' ', '-', $ruang) . '" style="min-height: 200px;">';
            echo '<div class="card-body">';
            echo '<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">';
            echo '<div class="alert alert-info shadow-lg">';
            echo '<h1 style="color:black;">' . $ruang . '</h1>';
            echo '</div>';
            echo '</div>';

            // Tampilkan data jadwal dalam bentuk HTML
            while ($row = $result->fetch_assoc()) {
                echo '<div class="alert alert-danger mirage-bg-gradient">';
                echo '<div class="d-flex justify-content-around"><h3 style="color:white;">' . $row["mapel"] . '</h3></div>';
                echo '<div class="d-flex justify-content-around"><h4 style="color:white;">PENGAWAS : ' . $row["nama"] . '</h4></div>';
                echo "</div>";
            }

            echo '</div>';
            echo '<div class="card-footer justify-content-center">';
            echo '<a href="' . $links[$ruang] . '" data-ruang="' . str_replace(' ', '-', $ruang) . '" class="btn btn-sm btn-block btn-primary btnPilihRuang">';
            echo '<i class="fas fa-sign-in-alt mr-2"></i> PILIH RUANG';
            echo '</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }

    $conn->close();
    ?>
</div>


    <footer class="footer">
        <div class="container-fluid">
            <nav class="pull-left">
                        Sistem Monitoring Ujian CBT <b></b>
            </nav>
            <div class="copyright ml-auto">
                        2024, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.instagram.com/_ghulamc_">MediumStack</a>
            </div>				
        </div>
    </footer>
      
        
</div>
    <!--   Core JS Files   -->
    <script src="js/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- jQuery UI -->
    <script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    
    <!-- jQuery Scrollbar -->
    <script src="plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    
    
    <!-- jQuery Sparkline -->
    <script src="plugins/jquery.sparkline/jquery.sparkline.min.js"></script>
    
    <!-- Bootstrap Notify -->
    <script src="plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <!-- Atlantis JS -->
    <script src="js/atlantis.min.js"></script>
    <script>
        var url = window.location;
        function loadPage(){
            $('#loader-wrapper').show();
            $('#loader-wrapper').fadeIn();
        }
        
        function loadPage(){
            $('#loader-wrapper').fadeOut('slow');
            
        }
        
        document.addEventListener("DOMContentLoaded", function () {
            $('#loader-wrapper').fadeOut('slow');
        })
        $(document).ready(function(){
            $('ul.nav-primary a').filter(function(){
                return this.href == url;
            }).parent().addClass("active");
            
            $('ul.nav-collapse a').filter(function(){
                return this.href == url;
            }).parentsUntil("li.nav-item").addClass('show').parent('li').addClass("active submenu");
        });
        
        $(function(){
            
        })
    </script>
    
<script src="plugins/toastr/toastr.min.js"></script>
<script>
    $(function(){
        getRuanganUjian();
    })
    
    function getRuanganUjian(){
        $.ajax({
            type: "GET",
            url: "http://172.16.16.10:2023/proktor/get_ruangan",
            beforeSend:function(){
                // $('#detailTabelStatus').LoadingOverlay("show");
            },
            success: function (data) {
                console.log(data)
            },
            error: function (data) {
                Swal.fire(
                'Ooopsss ....',
                data.responseJSON.message,
                'error'
                )
            },
            complete: function(){
                
            }
        });
    }
</script>
</body>
</html>