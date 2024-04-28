<?php
session_start();

// Konfigurasi koneksi ke database
require 'koneksi.php';

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mendapatkan data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Melakukan query untuk memeriksa apakah username dan password cocok
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}

// Memeriksa apakah ada hasil dari query
if (mysqli_num_rows($result) > 0) {
    // Jika cocok, simpan username ke dalam session
    $_SESSION['username'] = $username;
    // Redirect ke halaman dashboard atau halaman lain yang diinginkan setelah login berhasil
    header("Location: admin");
} else if ($_SESSION['login_error']) {
    // Jika tidak cocok, set pesan error ke dalam variabel untuk ditampilkan di halaman login
    $_SESSION['login_error_message'] = $_SESSION['login_error'];
    header("Location: index.php");
}


// Menutup koneksi
mysqli_close($conn);
?>
