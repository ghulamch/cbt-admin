<?php

session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: admin/index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="LoitgpzpFpZqAuVmHcoFlgOrwbYkWp1wloRTtwcb">
    
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    
    <title>CBTADMIN | SMPN 2 SUKODONO</title>
    <!-- META DISKRIPSI-->
    <meta name="msapplication-navbutton-color" content="#4285f4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-TileColor" content="#ffffff">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="plugins/izitoast/css/iziToast.min.css">
    <link href="css/frontend_2/front.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logomansda.ico">
    <link rel="stylesheet" href="css/frontend_2/front1.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    
    <link rel="stylesheet" href="css/frontend_2/components2.css">
    <link rel="stylesheet" href="plugins/bootstrap_41_dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/securimage/securimage.css">
    <link rel="stylesheet" href="css/preloader.css">
    <script src="plugins/jquery/jquery.min.js"></script>
    
    <script src="plugins/securimage/securimage.js"></script>
    <script src="plugins/izitoast/js/iziToast.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
    
    <style>
        ol.syarat{
            padding-inline-start: 20px;
        }
        li.persyaratan{
            cursor: pointer;
        }
        
        /* img#imglogo{
            display: none;
        } */
        
        
        
        .callout {
            border-radius: 0.25rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            background-color: #fff;
            border-left: 5px solid #e9ecef;
            margin-bottom: 1rem;
            padding: 1rem;
        }
        .callout p:last-child {
            margin-bottom: 0;
        }
        .callout.callout-info {
            border-left-color: #117a8b;
        }
        
        .home-banner-bg-color {
            background: linear-gradient( 90deg , #00076a 100%, #1B4D3E 0%) !important;
        }
        .home-banner-bg-img {
            background: url(img/pattern-chemical.png);
        }
        .calestial-bg-gradient{
            background: #C33764;  /* fallback for old browsers */
            background: -webkit-linear-gradient(348deg, #1D2671, #C33764);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(348deg, #1D2671, #C33764); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .purple-bg-gradient{
            background: #00076a;  /* fallback for old browsers */
            background: -webkit-linear-gradient(348deg, #0b8793, #00076a);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(348deg, #0b8793, #00076a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            
        }
        
        .skeleton {
            padding:15px;
            max-width: 300px;
            width: 100%;
            background: #fff;
            margin-bottom: 20px;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 3px 4px 0 rgba(0, 0, 0, .14), 0 3px 3px -2px rgba(0, 0, 0, .2), 0 1px 8px 0 rgba(0, 0, 0, .12);
        }
        .skeleton .square {
            height: 80px;
            border-radius: 5px;
            background: rgba(130, 130, 130, 0.2);
            background: -webkit-gradient(linear, left top, right top, color-stop(8%, rgba(130, 130, 130, 0.2)), color-stop(18%, rgba(130, 130, 130, 0.3)), color-stop(33%, rgba(130, 130, 130, 0.2)));
            background: linear-gradient(to right, rgba(130, 130, 130, 0.2) 8%, rgba(130, 130, 130, 0.3) 18%, rgba(130, 130, 130, 0.2) 33%);
            background-size: 800px 100px;
            animation: wave-squares 2s infinite ease-out;
        }
        .skeleton .line {
            height: 12px;
            margin-bottom:6px;
            border-radius: 2px;
            background: rgba(130, 130, 130, 0.2);
            background: -webkit-gradient(linear, left top, right top, color-stop(8%, rgba(130, 130, 130, 0.2)), color-stop(18%, rgba(130, 130, 130, 0.3)), color-stop(33%, rgba(130, 130, 130, 0.2)));
            background: linear-gradient(to right, rgba(130, 130, 130, 0.2) 8%, rgba(130, 130, 130, 0.3) 18%, rgba(130, 130, 130, 0.2) 33%);
            background-size: 800px 100px;
            animation: wave-lines 2s infinite ease-out;
        }
        
        
    </style>
</head>
<body data-spy="scroll" data-target="#menu" data-offset="100" style="font-family: 'Poppins', sans-serif !important;">
        <div class="home-wrapper" id="home">
        
        
        <div class="home-header">
            
            
            <div class="container p-0">
                <nav class="navbar navbar-expand-lg navbar-light" id="navbar-header">
                    <a class="navbar-brand" href="javascript:;">
                        
                        
                        <div class="img-logo">
                            <img id="imglogo" height="75" src="img/logo.png">
                            
                        </div>
                        
                        
                        <div class="home-header-text d-none d-sm-block">
                            <h5 style="color:#00076a;">SISTEM MONITORING UJIAN</h5>
                            <h6>SMPN 2 SUKODONO</h6>
                            <h6>Tahun Pelajaran 2023 / 2024 </h6>
                        </div>
                        <span class="logo-mini-unbk d-block d-sm-none">CBTADMIN SPENLOS</span>
                        
                    </a>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                </nav>
            </div>
        </div>
        
        <div class="home-banner">
            <div class="home-banner-bg home-banner-bg-color"></div>
            <div class="home-banner-bg home-banner-bg-img"></div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-8">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel" data-slide-to="1"></li>
                                
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div>
                                        <h5 data-animation="animated fadeInDownBig">
                                            Selamat Datang Di Sistem Monitoring Ujian
                                        </h5>
                                        <ul>
                                            <li data-animation="animated flipInX" data-delay="1s">
                                                Aplikasi Computer / Android Based Test SMPN 2 SUKODONO
                                            </li>
                                            <li data-animation="animated flipInX" data-delay="2s">
                                                Terdapat <?php
                                                require 'koneksi_db.php';
                            
                                                $sql = "SELECT COUNT(*) AS total FROM wp_bsfsm_options WHERE tanggal = '$currentDate'";
                                                $result = mysqli_query($conn, $sql);
                            
                                                if (!$result) {
                                                    die("Error: " . mysqli_error($conn));
                                                }
                            
                                                $row = mysqli_fetch_assoc($result);
                                                $totalData = $row['total'];
                            
                                                echo $totalData;
                                                ?> Jadwal Ujian Hari Ini, silakan login untuk monitoring ujian.
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>
                                
                                <div class="carousel-item">
                                    <div>
                                        <h5 data-animation="animated fadeInDownBig">
                                            Tipe soal yang didukung oleh Aplikasi Ujian :
                                        </h5>
                                        
                                        <ul>
                                            <li data-animation="animated flipInX" data-delay="1s">
                                                <span data-toggle="modal">Pilihan Ganda Tunggal & Kompleks</span>
                                            </li>
                                            <li data-animation="animated flipInX" data-delay="2s">
                                                Benar / Salah
                                            </li>
                                            <li data-animation="animated flipInX" data-delay="3s">
                                                Penjodohan
                                            </li>
                                            <li data-animation="animated flipInX" data-delay="4s">
                                                Isian Singkat & Uraian
                                            </li>
                                            <li data-animation="animated flipInX" data-delay="5s">
                                                Survei Lingkungan
                                            </li>
                                            <li data-animation="animated flipInX" data-delay="6s">
                                                Upload File
                                            </li>
                                            <li data-animation="animated flipInX" data-delay="7s">
                                                Integrasi Google Form
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-4" id="kartu-login">
                        
                        <div class="card card-login mb-2">
                            <div class="card-body">
                                <a href="proktor.php" class="btn purple-bg-gradient text-white btn-block btn-login" id="btnProktor"><i class="fas fa-user-tie mr-1"></i>
                                    Proktor Ruang
                                </a>
                            </div>
                        </div>
                        <div class="card card-login mt-2">
                            
                            <div class="card-body">
                                <h6 class="mb-3">LOGIN</h6>
                                <form id="form-login" action="login_process.php" method="post">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                            </div>
                                            <input type="password" class="form-control <?php echo isset($_SESSION['login_error']) ? 'is-invalid' : ''; ?>" name="password" id="password" placeholder="Password" required>
                <?php if(isset($_SESSION['login_error'])): ?>
                    <div class="invalid-feedback">
                        <?php echo $_SESSION['login_error']; ?>
                    </div>
                <?php endif; ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block btn-login" id="btnLogin">
                                        <i class="fas fa-sign-in-alt"></i> Masuk
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        <!-- Assets -->
        <script>
            var baseURL = '/';
        </script>
        <script src="http://172.16.16.10:2023/css/frontend_2/front.js"></script>
        <script>

            document.addEventListener("DOMContentLoaded", function () {
                // Mengambil gambar dari folder img
                var logoSrc = "img/logo.png";
                
                // Mengatur sumber gambar untuk elemen imglogo
                document.getElementById('imglogo').src = logoSrc;
                
                // Sembunyikan loader-wrapper setelah gambar dimuat
                document.getElementById("loader-wrapper").style.display = "none";
            });

            
            const url = "http://172.16.16.10:2023/dashboard";
            // Tetapkan tanggal kita menghitung mundur
            var countDownDate = new Date(2022, 4, 18, 0, 0, 1, 0);
            
            document.addEventListener("DOMContentLoaded", function() {
    // Sembunyikan loader-wrapper
    document.getElementById("loader-wrapper").style.display = "none";
});


                
                $(document).ready(function() {
                    $('.carousel').carousel({
                        interval: 12000
                    })
                    var elapsedTime = 0;
                    
                    //setTimeout(function(){ $(".pre-loader").hide(); }, 2000);
                    function getCookie(cname) {
                        var name = cname + "=";
                        var decodedCookie = decodeURIComponent(document.cookie);
                        var ca = decodedCookie.split(';');
                        for(var i = 0; i <ca.length; i++) {
                            var c = ca[i];
                            while (c.charAt(0) == ' ') {
                                c = c.substring(1);
                            }
                            if (c.indexOf(name) == 0) {
                                return c.substring(name.length, c.length);
                            }
                        }
                        return "";
                    }
                    
                });
            </script>
            
        </div></body>
        </html>
        
        
        
        