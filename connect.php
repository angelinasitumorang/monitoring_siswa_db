<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "monitoring_siswa_db";

$koneksi = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>