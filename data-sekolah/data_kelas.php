<?php
include '../connect.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Kelas - Monitoring Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>body { background-color: #f8f9fa; } .card { border: none; border-radius: 12px; box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075); }</style>
</head>
<body>

  <?php include 'navbar.php'; ?>

  <div class="container my-4">
    <div class="mb-4 p-4 bg-white rounded-3 shadow-sm d-flex justify-content-between align-items-center">
      <div>
        <h4 class="fw-bold mb-1">Data Kelas</h4>
        <p class="text-muted mb-0">Menampilkan informasi tingkat, nama kelas, dan tahun ajaran.</p>
      </div>
      <a href="tambah.php?modul=kelas" class="btn btn-primary"><i class="fa-solid fa-plus me-1"></i> Tambah Kelas</a>
    </div>

    <div class="card">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th class="ps-3">ID Kelas</th>
                <th>Nama Kelas</th>
                <th>Tingkat</th>
                <th class="pe-3">Tahun Ajaran</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $query = mysqli_query($koneksi, "SELECT * FROM kelas");
              if (mysqli_num_rows($query) > 0) {
                  while ($row = mysqli_fetch_assoc($query)) {
              ?>
              <tr>
                <td class="ps-3"><code><?= $row['id_kelas']; ?></code></td>
                <td class="fw-semibold"><?= $row['nama_kelas']; ?></td>
                <td><?= $row['tingkat']; ?></td>
                <td class="pe-3"><?= $row['tahun_ajaran']; ?></td>
              </tr>
              <?php 
                  }
              } else {
                  echo '<tr><td colspan="4" class="text-center py-4 text-muted">Belum ada data kelas.</td></tr>';
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