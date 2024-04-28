<?php
include '../../koneksi_db.php';
$s_ruang = "RUANG 14";

// Ambil nilai mata pelajaran dari permintaan POST
$selectedMapel = $_POST['mapel'];
$search_ruang = '%' . $s_ruang . '%';

// Query untuk mengambil data dari database berdasarkan mata pelajaran yang dipilih
$query = "SELECT * FROM wp_bsfsm_siswa WHERE mapel LIKE ? AND nik2 LIKE ? ORDER BY id DESC";
$dewan1 = $conn->prepare($query);
$search_mapel = '%' . $selectedMapel . '%';
$dewan1->bind_param('ss', $search_mapel, $search_ruang);
$dewan1->execute();
$res1 = $dewan1->get_result();

// Buat variabel untuk menyimpan baris-baris HTML tabel
$htmlRows = '';

if ($res1->num_rows > 0) {
    while ($row = $res1->fetch_assoc()) {
        // Tambahkan baris-baris HTML ke variabel
        $htmlRows .= '<tr>';
        $htmlRows .= '<td>' . $row['id'] . '</td>';
        $htmlRows .= '<td>' . $row['kode'] . '</td>';
        $htmlRows .= '<td>' . $row['nama'] . '</td>';
        $htmlRows .= '<td>' . $row['nik'] . '</td>';
        $htmlRows .= '<td>' . $row['mapel'] . '</td>';
        $htmlRows .= '<td>' . $row['nik2'] . '</td>';
        $htmlRows .= '<td>';
        if ($row["finish"] === null) {
            $htmlRows .= '<span class="badge badge-danger">Belum login</span>';
        } elseif ($row["finish"] == 1) {
            $htmlRows .= '<span class="badge badge-success">Selesai</span>';
        } elseif ($row["finish"] == 2) {
            $htmlRows .= '<span class="badge badge-warning">Mengerjakan</span>';
        }
        $htmlRows .= '</td>';

        // Tambahkan logika untuk menampilkan status sesuai dengan kebutuhan Anda
        $htmlRows .= '</td>';
        $htmlRows .= '</tr>';
    }
} else {
    // Jika tidak ada data yang ditemukan, tambahkan pesan yang sesuai
    $htmlRows = '<tr><td colspan="7">Tidak ada data ditemukan</td></tr>';
}

// Kembalikan baris-baris HTML tabel sebagai respons
echo $htmlRows;
?>
