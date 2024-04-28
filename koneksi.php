<?php
// Konfigurasi koneksi ke database
$servername = "172.16.16.10";
$username = "ujian";
$password = "ujian";
$database = "cbtadmin"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mendapatkan tanggal hari ini dalam format MySQL
$currentDate = date("Y-m-d");
?>