<?php
// memanggil koneksi database
include 'connect.php';

// proses simpan data jika tombol SIMPAN ditekan
if (isset($_POST['simpan'])) {
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $id_kelas = $_POST['id_kelas'];

    $query = "INSERT INTO siswa (id_siswa, nama, jenis_kelamin, alamat, id_kelas) VALUES ('$id_kelas', $nama_siswa', $jenis_kelamin', $alamat', $id_kelas')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data siswa berhasil disimpan!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data: " . mysqli_error($conn) . " ');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Kualitas Pembelajaran dan Prestasi Siswa</title>
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel ="stylesheet" href="style.css">
</head>
<body>
   <!-- NAVBAR-->
     <header class="header">
        <a href="index.php" class="logo">
            <i></i>Portal Akademik
        </a>

        <nav class="container-nav">
        <h1>Data Masster Mahasiswa</h1>
        <p>Kelola data mahasiswa dan informasi jurusan dengan mudah.</p>
       </nav>
     </header>

     <!-- KONTEN SAMPING-->
      <section class="card-sidebar">
      <sidebar>
        <h2>Tambah Data Siswa</h2>
        <form>
        <label for="id_siswa">ID Siswa</label> <br>
        <input type="text" name="id_siswa" id="id_siswa"> <br>

        <label for="nama">Nama Siswa</label> <br>
        <input type="text" name="nama" id="nama"> <br>

        <label for="jns_kelamin">Jenis Kelamin</label> <br>
        <input type="text" name="jns_kelamin" id="jns_kelamin"> <br>

        <label for="alamat">Alamat</label> <br>
        <input type="text" name="alamat" id="alamat"> <br>

        <label for="id_kelas">ID Kelas</label> <br>
        <input type="text" name="id_kelas" id="id_kelas"> <br><br>
        <button type="submit">Simpan Data</button>
        </form>
      </sidebar>
      </section>
      <br>

      <!-- KONTEN UTAMA -->
       <main>
        <h2>Daftar Mahasiswa Terdaftar</h2>
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama Siswa</th>
                    <th>Id Jurusan</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td align="center">Angel</td>
                </tr>
            </tbody>

        </table>
       </main>
</body>
</html>