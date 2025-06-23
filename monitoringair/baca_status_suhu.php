<?php 
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "monitoringair");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Baca tabel tb_sensorphmeter
$sql = mysqli_query($koneksi, "SELECT * FROM tb_sensorsuhu ORDER BY id DESC LIMIT 1");

// Ambil nilai dari hasil query
$data = mysqli_fetch_array($sql);

// Ambil nilai field sensor
$nilai_sensorsuhu = $data['sensorsuhu'];

// Uji nilai sensor
if ($nilai_sensorsuhu > 30) {
    $keterangan = "Panas";
} elseif ($nilai_sensorsuhu < -5) {
    $keterangan = "Dingin";
} else {
    $keterangan = "Normal";
}
?>

<h1 style="font-size: 40px;"><?php echo $keterangan; ?></h1>
