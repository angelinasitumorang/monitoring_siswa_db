<?php
include 'connect.php';
$query = "SELECT * FROM mapel";
$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Mata Pelajaran - Monitoring Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>body { background-color: #f8f9fa; } .card-custom { border: none; border-radius: 12px; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); }</style>
</head>
<body>
  <?php include 'navbar.php'; ?>

  <div class="container my-5">
    <h3 class="fw-bold mb-4">Mata Pelajaran</h3>
    <div class="card card-custom p-4 bg-white">
      <table class="table table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th>No</th>
            <th>ID Mapel</th>
            <th>Nama Mata Pelajaran</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><code><?= $row['id_mapel']; ?></code></td>
            <td class="fw-semibold"><?= $row['nama_mapel']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>