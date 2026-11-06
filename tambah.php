<?php
session_start();

if (isset($_POST['simpan'])) {
    $id_siswa     = $_POST['id_mahasiswa'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jk           = $_POST['jk'];
    $alamat       = $_POST['alamat'];

    // Buat array data baru untuk siswa yang ditambahkan
    $data_baru = [
        "nama"   => $nama_lengkap,
        "jk"     => $jk,
        "alamat" => $alamat,
        "status" => "Hadir" // Default status kehadiran saat pertama kali ditambah adalah Hadir
    ];

    // Masukkan data baru ke dalam session daftar_siswa
    $_SESSION['daftar_siswa'][] = $data_baru;

    // Alihkan kembali ke halaman dashboard
    header("Location: dashboard.php");
    exit();
}
?>