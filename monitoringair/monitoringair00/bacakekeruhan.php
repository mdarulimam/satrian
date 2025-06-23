<?php
	//koneksi ke database
	$koneksi = mysqli_connect("localhost", "root", "", "monitoringair");

	//baca tabel tb_sensor
	$sql = mysqli_query($koneksi, "SELECT * FROM tb_sensor");
	//ambil nilai dari tb_sensor (sensor)
	$data = mysqli_fetch_array($sql);
	//ambil nilai field sensor
	$nilai_sensor = $data['sensor'];
?>

<h1 style="font-size: 100px"><?php echo $nilai_sensor; ?></h1>