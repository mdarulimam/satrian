<?php 
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "monitoringair");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Update nilai sensor pH meter jika parameter ada
$nilai_sensorphmeter = isset($_GET['sensorphmeter']) ? $_GET['sensorphmeter'] : null;
if ($nilai_sensorphmeter !== null) {
    $query = "UPDATE tb_sensorphmeter SET sensorphmeter = ?";
    if ($stmt = mysqli_prepare($koneksi, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $nilai_sensorphmeter);
        if (mysqli_stmt_execute($stmt)) {
            echo "Nilai pH meter berhasil diperbarui.<br>";
        } else {
            echo "Error pH meter: " . mysqli_error($koneksi) . "<br>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error pH meter: " . mysqli_error($koneksi) . "<br>";
    }
}

// Update nilai sensor suhu jika parameter ada
$nilai_sensorsuhu = isset($_GET['sensorsuhu']) ? $_GET['sensorsuhu'] : null;
if ($nilai_sensorsuhu !== null) {
    $query = "UPDATE tb_sensorsuhu SET sensorsuhu = ?";
    if ($stmt = mysqli_prepare($koneksi, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $nilai_sensorsuhu);
        if (mysqli_stmt_execute($stmt)) {
            echo "Nilai suhu berhasil diperbarui.<br>";
        } else {
            echo "Error suhu: " . mysqli_error($koneksi) . "<br>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error suhu: " . mysqli_error($koneksi) . "<br>";
    }
}

// Update nilai sensor TDS jika parameter ada
$nilai_sensortds = isset($_GET['sensortds']) ? $_GET['sensortds'] : null;
if ($nilai_sensortds !== null) {
    $query = "UPDATE tb_sensortds SET sensortds = ?";
    if ($stmt = mysqli_prepare($koneksi, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $nilai_sensortds);
        if (mysqli_stmt_execute($stmt)) {
            echo "Nilai TDS berhasil diperbarui.<br>";
        } else {
            echo "Error TDS: " . mysqli_error($koneksi) . "<br>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error TDS: " . mysqli_error($koneksi) . "<br>";
    }
}

// Tutup koneksi
mysqli_close($koneksi);
?>
