<?php
include 'connect.php';

if (isset($_POST['simpan'])) {
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $id_kelas = $_POST['id_kelas'];

    $query = "INSERT INTO siswa (id_siswa, nama_siswa, jenis_kelamin, alamat, id_kelas VALUES ('$id_siswa, $nama_siswa, $jenis_kelamin, $alamat, $id_kelas')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data siswa berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data: " . mysqli_error($konkesi) . "'); window.location='index.php';</script>";
    }
} else {
        header("Location: index.php");
}
?>