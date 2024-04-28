<?php
// Koneksi ke database (ganti dengan informasi koneksi yang sesuai)
include '../../koneksi_db.php';

$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah data yang dikirimkan melalui Ajax ada
if (isset($_POST['finish'])) {
    // Ambil nilai finish dari data yang dikirimkan
    $finish = $_POST['finish'];

    // Query untuk mengubah nilai kolom finish menjadi 1
    $sql = "UPDATE wp_bsfsm_siswa SET finish = $finish WHERE (sesuai dengan kondisi yang sesuai)";

    if ($conn->query($sql) === TRUE) {
        // Jika query berhasil dijalankan, kirim respons ke klien
        echo "Status berhasil diubah";
    } else {
        // Jika terjadi kesalahan saat menjalankan query, kirim pesan kesalahan
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Jika tidak ada data yang dikirimkan melalui Ajax, kirim pesan kesalahan
    echo "Data tidak diterima";
}

// Tutup koneksi ke database
$conn->close();
?>
