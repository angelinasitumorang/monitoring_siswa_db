<?php
session_start();

if (isset($_POST['update'])) {
    $id_siswa         = $_POST['id_siswa']; // Contoh: "S001"
    $nama_lengkap     = $_POST['nama_lengkap'];
    $alamat           = $_POST['alamat'];
    $jk               = $_POST['jk'];
    $status_kehadiran = $_POST['status_kehadiran']; // Pilihan baru (Hadir, Izin, Sakit, Alpa)

    // Mengonversi ID Siswa "S001" menjadi angka indeks array (S001 -> index 0)
    $index = intval(substr($id_siswa, 1)) - 1;

    // Jika data pada indeks tersebut ada di session, update nilainya
    if (isset($_SESSION['daftar_siswa'][$index])) {
        $_SESSION['daftar_siswa'][$index]['nama']   = $nama_lengkap;
        $_SESSION['daftar_siswa'][$index]['alamat'] = $alamat;
        $_SESSION['daftar_siswa'][$index]['jk']     = $jk;
        $_SESSION['daftar_siswa'][$index]['status'] = $status_kehadiran;
    }

    // Alihkan kembali ke halaman dashboard agar perubahan langsung terlihat
    header("Location: dashboard.php");
    exit();
}
?>