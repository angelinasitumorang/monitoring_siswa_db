<?php
include '../connect.php';
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
        <p class="text-muted mb-0">Menampilkan daftar seluruh siswa yang terdaftar dalam kelas.</p>
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
                <th class="pe-3">Kelas (Relasi)</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysqli_query($koneksi, "SELECT siswa.*, kelas.nama_kelas FROM siswa JOIN kelas ON siswa.id_kelas = kelas.id_kelas");
              if (mysqli_num_rows($query) > 0) {
                  while ($row = mysqli_fetch_assoc($query)) {
              ?>
              <tr>
                <td class="ps-3"><code><?= $row['id_siswa']; ?></code></td>
                <td class="fw-semibold"><?= $row['nama_siswa']; ?></td>
                <td><?= $row['jenis_kelamin']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td class="pe-3"><span class="badge bg-info text-dark"><?= $row['nama_kelas']; ?></span></td>
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