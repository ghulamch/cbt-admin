<?php
// URL untuk melakukan permintaan ke server
$site = "http://172.16.16.15/wp-content/themes/unbk/api-18575621/cektoken.php";

// Melakukan permintaan GET ke URL
$response = file_get_contents($site);

// Menampilkan respons
echo $response;
?>
