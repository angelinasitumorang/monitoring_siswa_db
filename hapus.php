<?php
session_start();

if (isset($_GET['id'])) {
    $id_siswa = $_GET['id']; // Contoh: "S001"

    // Mengonversi ID Siswa "S001" menjadi angka indeks array (S001 -> index 0)
    $index = intval(substr($id_siswa, 1)) - 1;

    // Jika data pada indeks tersebut ada di session, hapus dari array
    if (isset($_SESSION['daftar_siswa'][$index])) {
        unset($_SESSION['daftar_siswa'][$index]);
        
        // Merapikan ulang index array agar urutannya tidak loncat
        $_SESSION['daftar_siswa'] = array_values($_SESSION['daftar_siswa']);
    }
}

// Alihkan kembali ke halaman dashboard setelah data dihapus
header("Location: dashboard.php");
exit();
?>