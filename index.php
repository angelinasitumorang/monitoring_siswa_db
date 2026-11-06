<?php
// Panggil file koneksi database
include 'connect.php';

// Mengambil total jumlah siswa dari database untuk ditampilkan di ringkasan
$query_siswa = "SELECT COUNT(*) AS total_siswa FROM siswa";
$result_siswa = mysqli_query($koneksi, $query_siswa);
$data_siswa = mysqli_fetch_assoc($result_siswa);
$total_siswa = $data_siswa['total_siswa'] ?? 34; // Default 34 jika data kosong
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Monitoring Siswa</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body { background-color: #f8f9fa; }
    .card-custom { border: none; border-radius: 12px; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); transition: 0.3s; }
    .card-custom:hover { transform: translateY(-3px); }
  </style>
</head>
<body>

  <!-- PANGGIL NAVBAR TERPUSAT (Hanya 1 baris ini saja agar tidak dobel) -->
  <?php include 'data-sekolah/navbar.php'; ?>

  <!-- KONTEN UTAMA DASHBOARD -->
  <div class="container my-5">
    
    <!-- Banner Sambutan -->
    <div class="p-5 mb-4 bg-white rounded-4 card-custom border-start border-primary border-5">
      <div class="container-fluid py-2">
        <h1 class="display-6 fw-bold text-dark">Selamat Datang di Sistem Monitoring Siswa</h1>
        <p class="col-md-8 fs-6 text-muted mt-2">
          Platform terintegrasi untuk memantau kehadiran, perkembangan akademik, serta pengelolaan data kelas secara kolaboratif.
        </p>
        <hr class="my-4">
        <div class="row">
          <div class="col-md-4">
            <p class="mb-1 text-muted small">Kelas Aktif</p>
            <h5 class="fw-bold text-primary">X IPA 1 (2026/2027)</h5>
          </div>
          <div class="col-md-4">
            <p class="mb-1 text-muted small">Tingkat</p>
            <h5 class="fw-bold text-dark">Kelas X</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Kotak Ringkasan Statistik (Cards) -->
    <div class="row g-4">
      <!-- Total Siswa -->
      <div class="col-md-4">
        <div class="card card-custom p-4 bg-white border-start border-success border-4">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0 bg-success bg-opacity-15 p-3 rounded-3 text-success me-3">
              <i class="fa-solid fa-users fa-2x"></i>
            </div>
            <div>
              <span class="text-muted small">Total Siswa</span>
              <h3 class="fw-bold mb-0"><?= $total_siswa; ?> Siswa</h3>
            </div>
          </div>
        </div>
      </div>

      <!-- Kehadiran Hari Ini (Simulasi) -->
      <div class="col-md-4">
        <div class="card card-custom p-4 bg-white border-start border-info border-4">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0 bg-info bg-opacity-15 p-3 rounded-3 text-info me-3">
              <i class="fa-solid fa-clipboard-user fa-2x"></i>
            </div>
            <div>
              <span class="text-muted small">Kehadiran Rata-rata</span>
              <h3 class="fw-bold mb-0">95.0%</h3>
            </div>
          </div>
        </div>
      </div>

      <!-- Mata Pelajaran -->
      <div class="col-md-4">
        <div class="card card-custom p-4 bg-white border-start border-warning border-4">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0 bg-warning bg-opacity-15 p-3 rounded-3 text-warning me-3">
              <i class="fa-solid fa-book-open fa-2x"></i>
            </div>
            <div>
              <span class="text-muted small">Mata Pelajaran</span>
              <h3 class="fw-bold mb-0">Matematika</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap JS Bundle (Wajib untuk Dropdown) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>