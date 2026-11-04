<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id_siswa = $_GET['id'];

    $query = "DELETE FROM siswa WHERE id_siswa = '$id_siswa";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data siswa berhasil dihapus!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data: " . mysqli_eror($koneksi) . "'); window.location='index.php';</script>";
    }
} else {
    header("Location: index.php");
}
?>