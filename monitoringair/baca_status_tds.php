<?php 
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "monitoringair");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Baca tabel tb_sensorphmeter
$sql = mysqli_query($koneksi, "SELECT * FROM tb_sensortds ORDER BY id DESC LIMIT 1");

// Ambil nilai dari hasil query
$data = mysqli_fetch_array($sql);

// Ambil nilai field sensor
$nilai_sensortds = $data['sensortds'];

// Uji nilai sensor
if ($nilai_sensortds > 100) {
    $keterangan = "kotor";
} elseif ($nilai_sensortds < 50) {
    $keterangan = "bersih";
} else {
    $keterangan = "keruh";
}
?>

<h1 style="font-size: 40px;"><?php echo $keterangan; ?></h1>
