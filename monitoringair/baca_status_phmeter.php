<?php 
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "monitoringair");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Baca tabel tb_sensorphmeter
$sql = mysqli_query($koneksi, "SELECT * FROM tb_sensorphmeter ORDER BY id DESC LIMIT 1");

// Ambil nilai dari hasil query
$data = mysqli_fetch_array($sql);

// Ambil nilai field sensor
$nilai_sensorphmeter = $data['sensorphmeter'];

// Uji nilai sensor
if ($nilai_sensorphmeter > 8) {
    $keterangan = "Basa";
} elseif ($nilai_sensorphmeter < 3) {
    $keterangan = "Asam";
} else {
    $keterangan = "Netral";
}
?>

<h1 style="font-size: 40px;"><?php echo $keterangan; ?></h1>
