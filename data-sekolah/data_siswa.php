<?php
include '../connect.php';

// 1. Cek dan buat data kelas terlebih dahulu agar relasi Foreign Key terpenuhi
$cek_kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
if (mysqli_num_rows($cek_kelas) == 0) {
    mysqli_query($koneksi, "INSERT INTO kelas (id_kelas, nama_kelas, tingkat, tahun_ajaran) VALUES (1, 'X IPA 1', 'X', '2026/2027')");
}

// 2. Cek apakah tabel siswa masih kosong, jika kosong masukkan seluruh data dummy
$cek_data = mysqli_query($koneksi, "SELECT * FROM siswa");
if (mysqli_num_rows($cek_data) == 0) {
    $data_dummy = [
        ["Andi Pratama", "Laki-laki", "Jl. HR. Soebrantas", 1],
        ["Budi Santoso", "Laki-laki", "Jl. Garuda Sakti", 1],
        ["Citra Lestari", "Perempuan", "Jl. Arifin Achmad", 1],
        ["Dedi Kurniawan", "Laki-laki", "Jl. Soekarno-Hatta", 1],
        ["Eka Putri", "Perempuan", "Jl. Sudirman", 1],
        ["Fajar Ramadhan", "Laki-laki", "Jl. Riau", 1],
        ["Gita Gutawa", "Perempuan", "Jl. Patimura", 1],
        ["Hadi Wijaya", "Laki-laki", "Jl. Paus", 1],
        ["Indah Permata", "Perempuan", "Jl. Tuanku Tambusai", 1],
        ["Joko Susilo", "Laki-laki", "Jl. Nangka", 1],
        ["Kartika Sari", "Perempuan", "Jl. Subrantas", 1],
        ["Lestari", "Perempuan", "Jl. Lily", 1],
        ["Maya Anggraini", "Perempuan", "Jl. Delima", 1],
        ["Nanda Pratama", "Laki-laki", "Jl. Cipta Karya", 1],
        ["Putri Utami", "Perempuan", "Jl. Kamboja", 1],
        ["Qori Sandioriva", "Perempuan", "Jl. Melati", 1],
        ["Rian Mahendra", "Laki-laki", "Jl. Mawar", 1],
        ["Siti Nurhaliza", "Perempuan", "Jl. Kenanga", 1],
        ["Tono Sudiono", "Laki-laki", "Jl. Lobak", 1],
        ["Utami Dewi", "Perempuan", "Jl. Rajawali", 1],
        ["Vira Amelia", "Perempuan", "Jl. Garuda", 1],
        ["Wahyu Hidayat", "Laki-laki", "Jl. Durian", 1],
        ["Xaverius", "Laki-laki", "Jl. Mangga", 1],
        ["Yanti Susanti", "Perempuan", "Jl. Rambutan", 1],
        ["Zainal Abidin", "Laki-laki", "Jl. Jati", 1],
        ["Ahmad Fauzi", "Laki-laki", "Jl. Cendana", 1],
        ["Bella Safitri", "Perempuan", "Jl. Dahlia", 1],
        ["Candra Kirana", "Perempuan", "Jl. Anggrek", 1],
        ["Dewi Lestari", "Perempuan", "Jl. Srikandi", 1],
        ["Eko Prasetyo", "Laki-laki", "Jl. Bangka", 1],
        ["Fitri Handayani", "Perempuan", "Jl. Sumatera", 1],
        ["Gilang Dirga", "Laki-laki", "Jl. Kalimantan", 1],
        ["Hesti Purwadinata", "Perempuan", "Jl. Jawa", 1],
        ["Irfan Hakim", "Laki-laki", "Jl. Sulawesi", 1]
    ];

    foreach ($data_dummy as $d) {
        $exec = mysqli_query($koneksi, "INSERT INTO siswa (nama_siswa, jenis_kelamin, alamat, id_kelas) VALUES ('$d[0]', '$d[1]', '$d[2]', '$d[3]')");
        if (!$exec) {
            echo "<div class='alert alert-danger m-3'>Error MySQL: " . mysqli_error($koneksi) . "</div>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa - Monitoring Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>body { background-color: #f8f9fa; } .card { border: none; border-radius: 12px; box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075); }</style>
</head>
<body>

  <?php include 'navbar.php'; ?>

  <div class="container my-4">
    <div class="mb-4 p-4 bg-white rounded-3 shadow-sm d-flex justify-content-between align-items-center">
      <div>
        <h4 class="fw-bold mb-1">Data Siswa</h4>
        <p class="text-muted mb-0">Menampilkan daftar seluruh siswa berdasarkan ERD sistem.</p>
      </div>
      <a href="tambah.php?modul=siswa" class="btn btn-primary"><i class="fa-solid fa-plus me-1"></i> Tambah Siswa</a>
    </div>

    <div class="card">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th class="ps-3">ID Siswa</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th class="pe-3">ID Kelas (FK)</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysqli_query($koneksi, "SELECT siswa.*, kelas.nama_kelas FROM siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas");
              if ($query && mysqli_num_rows($query) > 0) {
                  while ($row = mysqli_fetch_assoc($query)) {
              ?>
              <tr>
                <td class="ps-3"><code><?= $row['id_siswa']; ?></code></td>
                <td class="fw-semibold"><?= $row['nama_siswa']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td class="pe-3"><span class="badge bg-secondary"><?= $row['id_kelas']; ?> - <?= $row['nama_kelas']; ?></span></td>
              </tr>
              <?php 
                  }
              } else {
                  echo '<tr><td colspan="5" class="text-center py-4 text-muted">Belum ada data siswa.</td></tr>';
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>