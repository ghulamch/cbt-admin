<?php
require "../../koneksi_db.php"; // Sesuaikan dengan file koneksi Anda


// Query untuk mengambil token dari tabel wp_bsfsm_aktif
$sql = "SELECT * FROM wp_bsfsm_siswa";
$result = mysqli_query($conn, $sql);


    $s_mapel="";
    $s_ruang="";
    if (isset($_POST['search'])) {
        $s_mapel = $_POST['s_mapel'];
        // $s_ruang = $_POST['s_ruang'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="LoitgpzpFpZqAuVmHcoFlgOrwbYkWp1wloRTtwcb">
    <title></title>
    
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'>
    <link rel="shortcut icon" href="../../img/logomansda.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="../../plugins/bootstrap_41_dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/preloader.css">
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Fonts and icons -->
    <script src="../../plugins/webfont/webfont.min.js"></script>
    <!-- Sweet Alert -->
    <script src="../../plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Lato:300,400,700,900"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['http://172.16.16.10:2023/css/fonts.min.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#tabelPeserta').DataTable({
                responsive: true,
                pageLength: 50,
                columnDefs: [
                    { targets: '_all', orderable: false }, // Menonaktifkan pengurutan untuk semua kolom
                    { targets: [2, 6], orderable: true }, // Mengaktifkan pengurutan untuk kolom 3 dan 7
                    { targets: [2, 6], orderData: [2, 6] } // Mengatur kolom 3 dan 7 sebagai kolom pengurutan utama
                ]
            });
        });
    </script>
    <link rel="stylesheet" href="../../css/atlantis.min.css">
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
            background: url(../../img/bg.png);
        }
        
        .container-fluid{
            background: url(../../img/bg.png);
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
    <link rel="stylesheet" href="../../plugins/datetimepicker-master/build/jquery.datetimepicker.min.css">
<link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/sweetalert2/sweetalert2.min.css">

<link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.dataTables.min.css">

<link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">


<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../../plugins/jquery-typeahead-2.11.0/dist/jquery.typeahead.min.css">
<link rel="stylesheet" href="../../plugins/bs-tags-input/tagsinput.css">
<link rel="stylesheet" href="../../plugins/bs-select/css/bootstrap-select.min.css">

<script src="../../plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="../../plugins/jquery-typeahead-2.11.0/dist/jquery.typeahead.min.js"></script>
<script src="../../plugins/bs-tags-input/tagsinput.js"></script>

    
</head>

<body>
        <div class="wrapper overlay-sidebar">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue2">
                
                <a href="javascript:void(0);" class="logo">
                    <img src="../../img/avatar2.png" alt="Pembayaran Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
    <h2 class="text-white pb-2 fw-bold">Daftar Peserta Ruang - 04</h2>
    <h5 class="text-white op-7 mb-2">Beranda > Proktor Ruangan</h5>
</div>
<div class="ml-md-auto py-2 py-md-0">
    
    <a href="../../proktor.php" class="btn btn-secondary btn-round mr-2"><i class="fas fa-caret-left mr-2"></i>
        Kembali
    </a>
    <a data-toggle="modal" data-target="#exampleModal"  id="btnCekToken" class="btn btn-white btn-border btn-round"><i class="fas fa-eye mr-2"></i>
        TOKEN UJIAN
    </a>
</div>
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">
                    <script>
    Swal.fire({
        title: 'Selamat Datang',
        icon: 'info',
        text: "Anda sedang berada di Ruang 04, silakan pilih mata pelajaran!"
    });
</script>
<div class="row">
    <div class="col-12">
        <div class="card mt-3">
            <div class="card-body">
                <div class="row mt--5" id="infoadministrasi" class="hidden-mobile">
                    
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="card full-height">
                            <div class="card-body d-flex justify-content-between">
                                <h4>PESERTA MENGERJAKAN</h4>
                                <h1 class="badgemengerjakan" style="color: #06418e">0</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="card full-height">
                            <div class="card-body d-flex justify-content-between">
                                <h4>PESERTA SELESAI</h4>
                                <h1 class="badgeselesai" style="color: #06418e">0</h1>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="card full-height">
                            <div class="card-body d-flex justify-content-between">
                                <h4>TIDAK HADIR</h4>
                                <h1 class="badgealpha" style="color: #06418e">0</h1>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <form method="POST" action="">
                <div class="form-group row">
                
                    <label class="col-form-label col-sm-2 offset-sm-1 col-12">MATA PELAJARAN</label>
                    
                    <div class="col-sm-4 col-12">
                        
                        <select name="s_mapel" id="s_mapel" class="form-control">
                            <option value="" hidden="">PILIH MATA PELAJARAN</option>
                            <option value="SIMULASI">SIMULASI</option>
		                    <option value="PPKN">PENDIDIKAN PANCASILA KEWARGANEGARAAN</option>
                            <option value="IPA">ILMU PENGETAHUAN ALAM</option>
                            <option value="IPS">ILMU PENGETAHUAN SOSIAL</option>
                            <option value="BINDO">BAHASA INDONESIA</option>
                            <option value="BJAWA">BAHASA JAWA</option>
                            <option value="BING">BAHASA INGGRIS</option>
                            <option value="PJOK">PENDIDIKAN JASMANI</option>
                            <option value="PAI">PENDIDIKAN AGAMA ISLAM</option>
                            <option value="PAK">PENDIDIKAN AGAMA KRISTEN</option>
                            <option value="BTQ">BACA TULIS ALQURAN</option>
                            <option value="BGA">BACA GALI ALKITAB</option>
                            <option value="MAT">MATEMATIKA</option>
                            <option value="PRK">PRAKARYA</option>
                            <option value="SBK">SENI BUDAYA</option>
                        </select>
                    </div>
                    <div class="col-sm-4" >
		        
		    </div>
            </form>
            <button id="reloadTable" class="btn btn-primary" style="display: none; text-align: center;">Reload Tabel</button>
           

                    
                </div>
                <div class="table-responsive">
                <div id="loader-wrapper" style="display: none;"> <div id="loader"style="display: none;"></div><span id="loader-text"style="display: none;"></span></div>
                    <table class="table table-striped table-hover table-bordered" width="100%" id="tabelPeserta">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>USER</th>
                                <th data-priority="1">NAMA LENGKAP</th>
                                <th>KELAS</th>
                                <th>MATA PELAJARAN</th>
                                <th>RUANG</th>
                                <th data-priority="2">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
include '../../koneksi_db.php';
$s_ruang = "RUANG 04"; // Nilai statis yang diinginkan

$search_mapel = '%' . $s_mapel . '%';
$search_ruang = '%' . $s_ruang . '%';

$no = 1;
$query = "SELECT * FROM wp_bsfsm_siswa WHERE mapel LIKE ? AND nik2 LIKE ? ORDER BY id DESC";
$dewan1 = $conn->prepare($query);
$dewan1->bind_param('ss', $search_mapel, $search_ruang);
$dewan1->execute();
$res1 = $dewan1->get_result();

if ($res1->num_rows > 0) {
    while ($row = $res1->fetch_assoc()) {
        $id = $row['id'];
        $kode = $row['kode'];
        $nama = $row['nama'];
        $kelas = $row['nik'];
        $mapel = $row['mapel'];
        $ruang = $row['nik2'];
        $finish = $row['finish'];
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $kode; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $kelas; ?></td>
            <td><?php echo $mapel; ?></td>
            <td><?php echo $ruang; ?></td>
            <td>
                <?php
                if ($row["finish"] === null) {
                    echo '<span class="badge badge-danger">Belum login</span>';
                } elseif ($row["finish"] == 1) {
                    echo '<span class="badge badge-success">Selesai</span>';
                } elseif ($row["finish"] == 2) {
                    echo '<span class="badge badge-warning">Mengerjakan</span>';
                }
                ?>
            </td>
        </tr>
    <?php }
} else {
    ?>
    <tr>
        <td colspan='7'>Tidak ada data ditemukan</td>
    </tr>
<?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->




<div class="modal fade" id="modalToken" tabindex="-1" role="dialog" aria-labelledby="modalTokenTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTokenTitle">Token Ujian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info">
                    Sebutkan token berikut ini agar siswa dapat mengikuti ujian. Token akan selalu update setiap <b><span id="interval-token"><?php
// URL target
$url = 'http://172.16.16.15/wp-content/themes/unbk/api-18575621/generatetoken.php';

// Mengambil konten dari URL
$content = file_get_contents($url);

// Mencari posisi awal dan akhir dari teks yang ingin Anda ambil
$startPos = strpos($content, ' Interval :');
if ($startPos !== false) {
    $endPos = strpos($content, ' menit', $startPos);
    if ($endPos !== false) {
        // Mengambil substring yang sesuai
        $interval = substr($content, $startPos, $endPos - $startPos + 6); // Tambahkan 6 untuk menambah panjang kata " menit"
        
        // Menampilkan hasil
        echo $interval;
    } else {
        echo "Teks 'Interval : ' ditemukan tetapi ' menit' tidak ditemukan setelahnya.";
    }
} else {
    echo "Teks 'Interval : ' tidak ditemukan.";
}
?>
</span> </b>.
                </div>
                <div class="alert alert-danger"> 
                    Jika siswa tidak bisa login karena token salah, silahkan lakukan refresh halaman untuk mendapat token terbaru!.
                </div>
                
                <div id="tokenUjian" style="font-size:10vw; color:black;" class="text-center">
                    
                </div>
                <div id="updateTime" class="text-center">
                
                <?php
                    // URL target
                    $url = 'http://172.16.16.15/wp-content/themes/unbk/api-18575621/generatetoken.php';

                    // Mengambil konten dari URL
                    $content = file_get_contents($url);

                    // Mencocokkan pola untuk menemukan teks yang ingin Anda ambil
                    preg_match('/Updated : (\d{2}-\d{2}-\d{4} \d{2}:\d{2})/', $content, $matches);

                    // Menampilkan hasil
                    if (isset($matches[1])) {
                        echo "Updated : " . $matches[1];
                    } else {
                        echo "Tidak dapat menemukan informasi yang diinginkan.";
                    }
                ?>

                    
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">TUTUP</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->

                </div>
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
        
    </div>
    <!--   Core JS Files   -->
    <script src="../../js/popper.min.js"></script>
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- jQuery UI -->
    <script src="../../plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="../../plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    
    <!-- jQuery Scrollbar -->
    <script src="../../plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    
    
    <!-- jQuery Sparkline -->
    <script src="../../plugins/jquery.sparkline/jquery.sparkline.min.js"></script>
    
    <!-- Bootstrap Notify -->
    <script src="../../plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <!-- Atlantis JS -->
    <script src="../../js/atlantis.min.js"></script>

    <script>
        $(document).ready(function(){
            // Fungsi untuk reload tabel
            function reloadTable() {
                $.ajax({
                    url: 'load_data_4.php', // Ubah URL sesuai dengan lokasi skrip PHP Anda
                    type: 'POST',
                    data: { mapel: $('#s_mapel').val() }, // Kirim data mata pelajaran yang dipilih
                    success: function(response) {
                        $('#tabelPeserta tbody').html(response); // Perbarui isi tabel dengan respons dari server
                    },
                    error: function(xhr, status, error) {
                        console.error('Terjadi kesalahan:', status, error);
                    }
                });
                $('#loader-wrapper').show();
                $('#loader-wrapper').fadeIn();
            }

            // Tambahkan event click pada tombol reload
            $('#reloadTable').click(function(e) {
                e.preventDefault();
                reloadTable(); // Panggil fungsi reloadTable saat tombol di-klik
                // Tampilkan loader
                $("#loader-wrapper").show();
                $("#loader").show();
                $("#loader-text").show();
            });
            $(window).on('load', function() {
        // Sembunyikan loader setelah halaman selesai dimuat
        $("#loader-wrapper").hide();
        $("#loader").hide();
        $("#loader-text").hide();
    });

            // Panggil reloadTable secara otomatis saat halaman dimuat
            reloadTable();
        });
    </script>




    <script>
$(document).ready(function(){
    // Fungsi untuk reload tabel
    function reloadTable() {
        $.ajax({
            url: 'load_data_4.php', // Ubah URL sesuai dengan lokasi skrip PHP Anda
            type: 'POST',
            data: { mapel: $('#s_mapel').val() }, // Kirim data mata pelajaran yang dipilih
            success: function(response) {
                $('#tabelPeserta tbody').html(response); // Perbarui isi tabel dengan respons dari server
                // Sembunyikan loader setelah memuat data selesai
                $("#loader-wrapper").hide();
                $("#loader").hide();
                $("#loader-text").hide();
            },
            error: function(xhr, status, error) {
                console.error('Terjadi kesalahan:', status, error);
                // Sembunyikan loader jika terjadi kesalahan
                $("#loader-wrapper").hide();
                $("#loader").hide();
                $("#loader-text").hide();
            }
        });
    }

    // Tambahkan event click pada tombol reload
    $('#reloadTable').click(function(e) {
        e.preventDefault();
        // Panggil fungsi reloadTable saat tombol di-klik
        reloadTable();
        // Tampilkan loader
        $("#loader-wrapper").show();
        $("#loader").show();
        $("#loader-text").show();
    });

    // Panggil reloadTable secara otomatis saat halaman dimuat
    reloadTable();

    // Event handler saat pemilihan mata pelajaran diubah
    $('#s_mapel').change(function() {
        // Ambil nilai yang dipilih
        var selectedMapel = $(this).val();

        // Kirim permintaan AJAX ke file PHP untuk memuat data tabel
        $.ajax({
            url: 'load_data_4.php',
            method: 'POST',
            data: { mapel: selectedMapel },
            success: function(response) {
                // Perbarui tabel dengan data yang diterima
                $('#tabelPeserta tbody').html(response);
            },
            error: function(xhr, status, error) {
                // Tangani kesalahan jika terjadi
                console.error('Terjadi kesalahan: ' + status + ' - ' + error);
            }
        });
        $("#reloadTable").show();
    });
});

</script>

    <script>
        $(document).ready(function() {
    // Panggil fungsi untuk menghitung jumlah peserta saat halaman dimuat
    hitungPesertaBelumLogin();
    hitungPesertaMengerjakan();
    hitungPesertaSelesai();

    // Fungsi untuk menghitung jumlah peserta yang belum login
    function hitungPesertaBelumLogin() {
        var jumlahPesertaBelumLogin = $('.badge-danger').length;
        // Update teks pada elemen dengan kelas badgealpha
        $('.badgealpha').text(jumlahPesertaBelumLogin);
    }

    // Fungsi untuk menghitung jumlah peserta yang sedang mengerjakan
    function hitungPesertaMengerjakan() {
        var jumlahPesertaMengerjakan = $('.badge-warning').length;
        // Update teks pada elemen dengan kelas badgemengerjakan
        $('.badgemengerjakan').text(jumlahPesertaMengerjakan);
    }

    // Fungsi untuk menghitung jumlah peserta yang telah selesai
    function hitungPesertaSelesai() {
        var jumlahPesertaSelesai = $('.badge-success').length;
        // Update teks pada elemen dengan kelas badgeselesai
        $('.badgeselesai').text(jumlahPesertaSelesai);
    }

    // Panggil fungsi untuk memuat data secara realtime setiap 5 detik
    setInterval(function() {
        // Panggil fungsi hitungPesertaBelumLogin() untuk memuat data secara realtime
        hitungPesertaBelumLogin();
        // Panggil fungsi hitungPesertaMengerjakan() untuk memuat data secara realtime
        hitungPesertaMengerjakan();
        // Panggil fungsi hitungPesertaSelesai() untuk memuat data secara realtime
        hitungPesertaSelesai();
    }, 1000); // 1000 milidetik (1 detik)




    // Event listener untuk tombol 'Cari'
    $('#searchForm').submit(function(event) {
        event.preventDefault(); // Mencegah form dari pengiriman default

        // Menghitung kembali jumlah peserta yang belum login setelah pencarian dilakukan
        hitungPesertaBelumLogin();
    });
});

    $(document).ready(function(){
        
        // Ketika tombol cek token ditekan
        $("#btnCekToken").click(function(){
            // Panggil fungsi untuk melakukan permintaan ke server
            performRequest();
        });

        // Fungsi untuk melakukan permintaan ke server dan menampilkan respons dalam modal
        function performRequest() {
    // URL untuk melakukan permintaan ke server PHP
    var url = "handle_request.php";

    // Lakukan permintaan AJAX menggunakan jQuery
    $.ajax({
        url: url,
        type: "POST",
        success: function(response) {
            // Tampilkan respons dalam modal
            $("#tokenUjian").text(response);
            $("#modalToken").modal("show"); // Tampilkan modal
        },
        error: function(xhr, status, error) {
            // Tampilkan pesan kesalahan jika terjadi kesalahan
            alert("Terjadi kesalahan: " + status + " - " + error);
        }
    });

    
}

    });
  </script>

    <script>
        var url = window.location;
        
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
    
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/moment/locales.min.js"></script>
<script src="../../plugins/datetimepicker-master/build/jquery.datetimepicker.full.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/jszip.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>

<script src="../../plugins/toastr/toastr.min.js"></script>

<script src="../../plugins/sketchpad/scripts/sketchpad.js"></script>
<script src="../../plugins/bs-select/js/bootstrap-select.min.js"></script>

</body>
</html>