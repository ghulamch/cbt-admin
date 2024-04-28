<?php
require "../koneksi.php"; // Sesuaikan dengan file koneksi Anda

$conn = mysqli_connect($servername, $username, $password, $database);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}



// Fungsi untuk mengambil data
$result = mysqli_query($conn, "SELECT * FROM pengawas");

// Fungsi untuk menghapus data




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pengawas - CBT Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="../skydash/vendors/feather/feather.css">
  <link rel="stylesheet" href="../skydash/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../skydash/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../skydash/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../skydash/vendors/select2/select2.min.css">
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
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="pengawas.php">
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
                  <h3 class="font-weight-bold">Jadwal Pengawas</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="row">
                  <div class="col-md-6">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Jadwal Pengawas</h4>
                      
                        <div class="template-demo">
                            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-primary btn-fw" id="btnCekToken">Tambah Jadwal Pengawas</button>
                      </div>
                      <?php 
                            if (isset($_POST['tambah'])) {
                                $nama = $_POST['nama'];
                                $nip = $_POST['nip'];
                                $mapel = $_POST['mapel'];
                                $ruang = $_POST['ruang'];
                                $sesi = $_POST['sesi'];
                                $tanggal = $_POST['tanggal'];
                                $jam = $_POST['jam'];
                                
                                $sql = "INSERT INTO pengawas (nama, nip, mapel, ruang, sesi, tanggal, jam) VALUES ('$nama', '$nip', '$mapel', '$ruang', '$sesi', '$tanggal', '$jam')";
                                if (mysqli_query($conn, $sql)) {
                                    echo '<span style="color: green;">Data Berhasil Ditambahkan</span>';
                                } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                }
                            }

                            if (isset($_GET['hapus'])) {
                              $id = $_GET['hapus'];
                              $sql = "DELETE FROM pengawas WHERE id=$id";
                              if (mysqli_query($conn, $sql)) {
                                  echo '<span style="color: red;">Data Berhasil Dihapus</span>';
                              } else {
                                  
                              }
                          }
                            mysqli_close($conn);?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive pt-3">
            <table class="table table" id="pages">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th data-priority="1">
                            Nama
                        </th>
                        <th>
                            NIP
                        </th>
                        <th data-priority="2">
                            Mapel
                        </th>
                        <th data-priority="3">
                            Ruang
                        </th>
                        <th>
                            Sesi
                        </th>
                        <th>
                            Tanggal
                        </th>
                        <th>
                            Jam
                        </th>
                        <th>Aksi</th>
                    
                    </tr>
                </thead>
                <tbody>
                <?php
include '../koneksi.php';
$conn = mysqli_connect($servername, $username, $password, $database);
$result = mysqli_query($conn, "SELECT * FROM pengawas");
$counter = 1;

 while ($row = mysqli_fetch_assoc($result)) {
  
        $id = $row['id'];
        $nama = $row['nama'];
        $nip = $row['nip'];
        $mapel = $row['mapel'];
        $ruang = $row['ruang'];
        $sesi = $row['sesi'];
        $tanggal = $row['tanggal'];
        $jam = $row['jam'];
        ?>
        <tr>
            <td><?php echo $counter;
            $counter++; ?></td>
            <td><?php echo $nama; ?></td>
            <td><?php echo $nip; ?></td>
            <td><?php echo $mapel; ?></td>
            <td><?php echo $ruang; ?></td>
            <td><?php echo $sesi; ?></td>
            <td><?php echo $tanggal; ?></td>
            <td><?php echo $jam; ?></td>
            <td>
            <a href="?hapus=<?php echo $row['id']; ?>" class="btn btn-outline-danger btn-fw">Hapus</a>
        </tr>
        
    <?php }
    
   ?>

                </tbody>
            </table>

                </div>
              </div>
              
            </div>
        </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Pengawas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ">
                    <form action="" method="post" id="addForm">
                    <label for="addUsername">Nama</label>
                        <div class="form-group" >
                            <select name="nama" class="md-12 js-example-basic-single w-100">
                                <option value="Drs. Rudy Wiyanto">Drs. Rudy Wiyanto</option>
                                <option value="Hj. Almaratul Churotin K, M.Pd">Hj. Almaratul Churotin K, M.Pd</option>
                                <option value="Hj.Masudah, S.Pd">Hj. Mas'udah, S.Pd.</option>
                                <option value="Drs. Ikhsan">Drs. Ikhsan</option>
                                <option value="Juliati, SPd.">Juliati, SPd.</option>
                                <option value="Syayidil Anwar">Syayidil Anwar</option>
                                <option value="Mudji Irianti, S.Pd.">Mudji Irianti, S.Pd.</option>
                                <option value="Hj. Lailatus Zuhroh, S.Pd.">Hj. Lailatus Zuhroh, S.Pd.</option>
                                <option value="Imam Sujarwo, S.Pd.">Imam Sujarwo, S.Pd.</option>
                                <option value="Yunaini Nafsah, S.Pd">Yunaini Nafsah, S.Pd</option>
                                <option value="H. Basori Alwi, S.Pd.">H. Basori Alwi, S.Pd.</option>
                                <option value="Umi Fauziah, S.Pd">Umi Fauziah, S.Pd</option>
                                <option value="Dra. Sri Sulistyawati, M.Pd">Dra. Sri Sulistyawati, M.Pd</option>
                                <option value="Dra. Sri Rahayu, M.Pd">Dra. Sri Rahayu, M.Pd</option>
                                <option value="Ratna Wulan Sari, S.Si.">Ratna Wulan Sari, S.Si.</option>
                                <option value="Anis Sulalah, S.Pd.">Anis Sulalah, S.Pd.</option>
                                <option value="Hj. Suhermi, S.Pd. M.Pd">Hj. Suhermi, S.Pd. M.Pd</option>
                                <option value="Endang Sri Utami, S.Pd">Endang Sri Utami, S.Pd</option>
                                <option value="Deny Indra Kusmirawati, S.Pd.">Deny Indra Kusmirawati, S.Pd.</option>
                                <option value="Dyah  Nurina Dita Lestari, S.Pd">Dyah  Nurina Dita Lestari, S.Pd</option>
                                <option value="Istikomah, S.Pd. M.Pd">Istikomah, S.Pd. M.Pd</option>
                                <option value="Lilik Fauziah, S.Pd">Lilik Fauziah, S.Pd</option>
                                <option value="Yuniar Poerbandini,S.Pd.,M.Pd">Yuniar Poerbandini,S.Pd.,M.Pd</option>
                                <option value="H. Moh. Supriyanto, S.Pd.">H. Moh. Supriyanto, S.Pd.</option>
                                <option value="Muhamad Wisnuwardana, S.Pd.">Muhamad Wisnuwardana, S.Pd.</option>
                                <option value="Novie Hendrawatie, ST.">Novie Hendrawatie, ST.</option>
                                <option value="Sutri Winurati, SS.">Sutri Winurati, SS.</option>
                                <option value="Suci Rahma Sari, S.Pd">Suci Rahma Sari, S.Pd</option>
                                <option value="Hasan Irsyad, S.Pd">Hasan Irsyad, S.Pd</option>
                                <option value="Ira Purwaningsih, S.Pd">Ira Purwaningsih, S.Pd</option>
                                <option value="Muhammad Ibnu Mukorobin, SH">Muhammad Ibnu Mukorobin, SH</option>
                                <option value="Lusiana Chandra Dewi, S.Pd">Lusiana Chandra Dewi, S.Pd</option>
                                <option value="Rosyidah Ariani, S.Pd">Rosyidah Ariani, S.Pd</option>
                                <option value="Abdi Chamdhani,S.Pd.I, M.Pd.I">Abdi Chamdhani,S.Pd.I, M.Pd.I</option>
                                <option value="Muhammad Fauzi, S.Pd.I., M.Pd.I">Muhammad Fauzi, S.Pd.I., M.Pd.I</option>
                                <option value="Dita Ika Andrianto, S.Pd">Dita Ika Andrianto, S.Pd</option>
                                <option value="Ika Fauziah, S.Pd.">Ika Fauziah, S.Pd.</option>
                                <option value="Silvia  Haryanti, S.Pd">Silvia  Haryanti, S.Pd</option>
                                <option value="Robby Tio Wijaya, S.Pd.">Robby Tio Wijaya, S.Pd.</option>
                                <option value="Endang Setia Wati, S.Pd.K">Endang Setia Wati, S.Pd.K</option>
                                <option value="Rendra Ginanjar Septiyan,  S.Pd">Rendra Ginanjar Septiyan,  S.Pd</option>
                                <option value="Nafilatur Rahmah Qadarisman, S.Pd.I">Nafilatur Rahmah Qadarisman, S.Pd.I</option>
                                <option value="Septy Nofi Amalia, S.Pd">Septy Nofi Amalia, S.Pd</option>
                                <option value="Dian Eka Chorik Laili, S.Pd.">Dian Eka Chorik Laili, S.Pd.</option>
                                <option value="Deny Amarta, S.Pd.">Deny Amarta, S.Pd.</option>
                                <option value="Dwi Haki Pratiwi,  S.Psi">Dwi Haki Pratiwi,  S.Psi</option>
                                <option value="Andika Beta Permana, S.Pd.">Andika Beta Permana, S.Pd.</option>
                                <option value="Farokhatul Fuaddiyah, S.Pd.">Farokhatul Fuaddiyah, S.Pd.</option>
                                <option value="Lailatul Fitriyah, S.Pd.">Lailatul Fitriyah, S.Pd.</option>
                                <option value="Qiflainy Ichida Sefrina Muttaqin, S.Pd.">Qiflainy Ichida Sefrina Muttaqin, S.Pd.</option>
                                <option value="Aviv Pujiyanto, S.Pd.">Aviv Pujiyanto, S.Pd.</option>
                                <option value="Gilang Pralaya">Gilang Pralaya</option>
                                <option value="Khairina Aqilah Rilend Putri, S.Pd. ">Khairina Aqilah Rilend Putri, S.Pd. </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="addNip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip">
                        </div>
                        <label for="addMapel">Mata Pelajaran</label>
                        <div class="form-group">
                            <select name="mapel" class="md-12 js-example-basic-single w-100">
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
                        <label for="addMapel">Ruang</label>
                        <div class="form-group">
                            <select name="ruang" class="md-12 js-example-basic-single w-100">
                                <option value="RUANG 1">RUANG 1</option>
                                <option value="RUANG 2">RUANG 2</option>
                                <option value="RUANG 3">RUANG 3</option>
                                <option value="RUANG 4">RUANG 4</option>
                                <option value="RUANG 5">RUANG 5</option>
                                <option value="RUANG 6">RUANG 6</option>
                                <option value="RUANG 7">RUANG 7</option>
                                <option value="RUANG 8">RUANG 8</option>
                                <option value="RUANG 9">RUANG 9</option>
                                <option value="RUANG 10">RUANG 10</option>
                                <option value="RUANG 11">RUANG 11</option>
                                <option value="RUANG 12">RUANG 12</option>
                                <option value="RUANG 13">RUANG 13</option>
                                <option value="RUANG 14">RUANG 14</option>
                                <option value="RUANG 15">RUANG 15</option>
                                <option value="RUANG 16">RUANG 16</option>
                                <option value="RUANG 17">RUANG 17</option>
                                <option value="RUANG 18">RUANG 18</option>
                                <option value="RUANG 19">RUANG 19</option>
                                <option value="RUANG 20">RUANG 20</option>
                            </select>
                        </div>
                        <label for="addsesi">Sesi</label>
                        <div class="form-group">
                            <select name="sesi" class="md-12 js-example-basic-single w-100">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <label for="addtanggal">Tanggal</label>
                        <div class="form-group">
                          <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <label for="addjam">Jam</label>
                        <div class="form-group">
                          <input type="time" class="form-control" id="jam" name="jam">
                        </div>
                        

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                    </form>
                    
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
  <script src="../skydash/vendors/js/vendor.bundle.base.js"></script>
  
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../skydash/vendors/chart.js/Chart.min.js"></script>
  <script src="../skydash/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../skydash/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="../skydash/js/dataTables.select.min.js"></script>
  <script src="../skydash/vendors/select2/select2.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../skydash/js/off-canvas.js"></script>
  <script src="../skydash/js/hoverable-collapse.js"></script>
  <script src="../skydash/js/template.js"></script>
  <script src="../skydash/js/settings.js"></script>
  <script src="../skydash/js/todolist.js"></script>
  <script src="../skydash/js/select2.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../skydash/js/dashboard.js"></script>
  <script src="../skydash/js/Chart.roundedBarCharts.js"></script>

  <script>
    function editData(id, nama, nip, mapel, ruang, sesi) {
            document.getElementById('edit_id').value = id;
            document.getElementById('edit_nama').value = nama;
            document.getElementById('edit_nip').value = nip;
            document.getElementById('edit_mapel').value = mapel;
            document.getElementById('edit_ruang').value = ruang;
            document.getElementById('edit_sesi').value = sesi;
            document.getElementById('editModal').style.display='block';
        }
</script>

  <script>

    $( function() {
    $( "#datepicker" ).datepicker();
  } );
    $(document).ready(function() {
    // Inisialisasi Select2 pada dropdown
    $('#mySelect').select2({
        placeholder: 'Pilih opsi', // Pesan placeholder
        ajax: {
            url: 'get_data.php', // URL ke file PHP untuk mengambil data
            dataType: 'json',
            processResults: function(data) {
                return {
                    results: $.map(data, function(item) {
                        return {
                            id: item.id,
                            text: item.text
                        }
                    })
                };
            }
        }
    });
});
  </script>

  <script>


    function saveChanges() {
        // Tambahkan ini untuk merefresh halaman
        location.reload();
    }

    $(document).ready(function () {
        generateToken();
        
        // Tambahkan ini untuk membuka modal lagi setelah merefresh
        $('#exampleModal').on('hidden.bs.modal', function () {
            $('#exampleModal').modal('show');
        });
    });

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

