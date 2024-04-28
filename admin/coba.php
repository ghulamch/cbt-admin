<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cbtadmin_new";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data jadwal berdasarkan ruang tertentu
$ruang = "RUANG 1"; // Ganti dengan ruang yang diinginkan
$sql = "SELECT mapel, nama FROM pengawas WHERE ruang='$ruang'";
$result = $conn->query($sql);

// Tampilkan hasil query dalam bentuk HTML
if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while($row = $result->fetch_assoc()) {
        echo "<div class='alert alert-danger mirage-bg-gradient'>";
        echo "<div class='d-flex justify-content-around'>" . $row["mapel"] . "</div>";
        echo "<div class='d-flex justify-content-around'>PENGAWAS : " . $row["nama"] . "</div>";
        echo "</div>";
    }
} else {
    echo "<div class='alert alert-warning'>Tidak ada jadwal untuk ruang ini</div>";
}
$conn->close();
?>
