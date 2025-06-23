<?php
	//koneksi ke database
	$koneksi = mysqli_connect("localhost", "root", "", "monitoringairkeruh");

	//baca tabel tb_sensor
	$sql = mysqli_query($koneksi, "SELECT * FROM tb_sensor");
	//ambil nilai dari tb_sensor (sensor)
	$data = mysqli_fetch_array($sql);
	//ambil nilai field sensor
	$nilai_sensor = $data['sensor'];

	//uji nilai sensor
	if($nilai_sensor > 50)
		$keterangan = "BERSIH";
	else if($nilai_sensor > 40)
		$keterangan = "KERUH";
	else
		$keterangan = "KOTOR";
?>

<h1 style="font-size: 100px"><?php echo $keterangan; ?></h1>