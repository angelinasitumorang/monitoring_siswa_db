<?php
$nama_kelas   = "XI IPA 1";
$tingkat      = "XI";
$tahun_ajaran = "2026/2027";

// Array berisi daftar nama, jenis kelamin, dan alamat yang berbeda-beda
$daftar_siswa = [
    ["nama" => "Andi Pratama", "jk" => "Laki-laki", "alamat" => "Jl. HR. Soebrantas"],
    ["nama" => "Budi Santoso", "jk" => "Laki-laki", "alamat" => "Jl. Garuda Sakti"],
    ["nama" => "Citra Lestari", "jk" => "Perempuan", "alamat" => "Jl. Arifin Achmad"],
    ["nama" => "Dedi Kurniawan", "jk" => "Laki-laki", "alamat" => "Jl. Soekarno-Hatta"],
    ["nama" => "Eka Putri", "jk" => "Perempuan", "alamat" => "Jl. Sudirman"],
    ["nama" => "Fajar Ramadhan", "jk" => "Laki-laki", "alamat" => "Jl. Riau"],
    ["nama" => "Gita Gutawa", "jk" => "Perempuan", "alamat" => "Jl. Patimura"],
    ["nama" => "Hadi Wijaya", "jk" => "Laki-laki", "alamat" => "Jl. Paus"],
    ["nama" => "Indah Permata", "jk" => "Perempuan", "alamat" => "Jl. Tuanku Tambusai"],
    ["nama" => "Joko Susilo", "jk" => "Laki-laki", "alamat" => "Jl. Nangka"],
    ["nama" => "Kartika Sari", "jk" => "Perempuan", "alamat" => "Jl. Subrantas"],
    ["nama" => "Lestari", "jk" => "Perempuan", "alamat" => "Jl. Lily"],
    ["nama" => "Maya Anggraini", "jk" => "Perempuan", "alamat" => "Jl. Delima"],
    ["nama" => "Nanda Pratama", "jk" => "Laki-laki", "alamat" => "Jl. Cipta Karya"],
    ["nama" => "Putri Utami", "jk" => "Perempuan", "alamat" => "Jl. Kamboja"],
    ["nama" => "Qori Sandioriva", "jk" => "Perempuan", "alamat" => "Jl. Melati"],
    ["nama" => "Rian Mahendra", "jk" => "Laki-laki", "alamat" => "Jl. Mawar"],
    ["nama" => "Siti Nurhaliza", "jk" => "Perempuan", "alamat" => "Jl. Kenanga"],
    ["nama" => "Tono Sudiono", "jk" => "Laki-laki", "alamat" => "Jl. Lobak"],
    ["nama" => "Utami Dewi", "jk" => "Perempuan", "alamat" => "Jl. Rajawali"],
    ["nama" => "Vira Amelia", "jk" => "Perempuan", "alamat" => "Jl. Garuda"],
    ["nama" => "Wahyu Hidayat", "jk" => "Laki-laki", "alamat" => "Jl. Durian"],
    ["nama" => "Xaverius", "jk" => "Laki-laki", "alamat" => "Jl. Mangga"],
    ["nama" => "Yanti Susanti", "jk" => "Perempuan", "alamat" => "Jl. Rambutan"],
    ["nama" => "Zainal Abidin", "jk" => "Laki-laki", "alamat" => "Jl. Jati"],
    ["nama" => "Ahmad Fauzi", "jk" => "Laki-laki", "alamat" => "Jl. Cendana"],
    ["nama" => "Bella Safitri", "jk" => "Perempuan", "alamat" => "Jl. Dahlia"],
    ["nama" => "Candra Kirana", "jk" => "Perempuan", "alamat" => "Jl. Anggrek"],
    ["nama" => "Dewi Lestari", "jk" => "Perempuan", "alamat" => "Jl. Srikandi"],
    ["nama" => "Eko Prasetyo", "jk" => "Laki-laki", "alamat" => "Jl. Bangka"],
    ["nama" => "Fitri Handayani", "jk" => "Perempuan", "alamat" => "Jl. Sumatera"],
    ["nama" => "Gilang Dirga", "jk" => "Laki-laki", "alamat" => "Jl. Kalimantan"],
    ["nama" => "Hesti Purwadinata", "jk" => "Perempuan", "alamat" => "Jl. Jawa"],
    ["nama" => "Irfan Hakim", "jk" => "Laki-laki", "alamat" => "Jl. Sulawesi"]
];

$total_siswa = count($daftar_siswa);

// Ringkasan Kehadiran Hari Ini
$hadir = 31;
$izin  = 2;
$sakit = 1;
$alfa  = 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Monitoring Siswa</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body { background-color: #f8f9fa; }
    .card-stat { border: none; border-radius: 12px; transition: transform 0.2s; }
    .card-stat:hover { transform: translateY(-3px); }
    /* Styling tambahan agar sudut modal semakin tumpul dan estetik */
    .modal-content {
      border-radius: 20px;
      border: none;
      box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
    }
  </style>
</head>
<body>

  <!-- NAVBAR UTAMA -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="dashboard.php">
        <i class="fa-solid fa-graduation-cap me-2"></i>Monitoring Siswa
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fw-semibold">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php"><i class="fa-solid fa-chart-line me-1"></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_sekolah.php"><i class="fa-solid fa-school me-1"></i> Data Sekolah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="monitoring_akademik.php"><i class="fa-solid fa-clipboard-user me-1"></i> Monitoring & Akademik</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- KONTEN DASHBOARD -->
  <div class="container my-4">
    
    <!-- HEADER WELCOME -->
    <div class="d-flex justify-content-between align-items-center mb-4 p-3 bg-white rounded-3 shadow-sm">
      <div>
        <h4 class="fw-bold mb-1">Dashboard Monitoring Kelas</h4>
        <p class="text-muted mb-0">Kelas: <span class="badge bg-primary fs-6"><?= $nama_kelas; ?></span> | Tahun Ajaran: <?= $tahun_ajaran; ?></p>
      </div>
      <div>
        <button class="btn btn-outline-primary btn-sm" onclick="window.print()"><i class="fa-solid fa-print me-1"></i> Cetak Ringkasan</button>
      </div>
    </div>

   <!-- CARDS STATISTIK KELAS & ABSENSI -->
    <div class="row g-3 mb-4">
      <div class="col-md-3">
        <a href="dashboard.php" class="text-decoration-none">
          <div class="card card-stat bg-primary text-white shadow-sm p-3">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <small class="text-white-50 fw-semibold">TOTAL SISWA</small>
                <h2 class="fw-bold mb-0"><?= $total_siswa; ?></h2>
                <small>Siswa terdaftar</small>
              </div>
              <i class="fa-solid fa-users fa-3x text-white-50"></i>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="dashboard.php?filter=Hadir" class="text-decoration-none">
          <div class="card card-stat bg-success text-white shadow-sm p-3">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <small class="text-white-50 fw-semibold">HADIR HARI INI</small>
                <h2 class="fw-bold mb-0"><?= $hadir; ?></h2>
                <small><?= round(($hadir/$total_siswa)*100, 1); ?>% Kehadiran</small>
              </div>
              <i class="fa-solid fa-user-check fa-3x text-white-50"></i>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="dashboard.php?filter=IzinSakit" class="text-decoration-none">
          <div class="card card-stat bg-warning text-dark shadow-sm p-3">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <small class="text-dark-50 fw-semibold">IZIN / SAKIT</small>
                <h2 class="fw-bold mb-0"><?= $izin + $sakit; ?></h2>
                <small><?= $izin; ?> Izin, <?= $sakit; ?> Sakit</small>
              </div>
              <i class="fa-solid fa-user-clock fa-3x text-black-50"></i>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3">
        <a href="dashboard.php?filter=Alpa" class="text-decoration-none">
          <div class="card card-stat bg-danger text-white shadow-sm p-3">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <small class="text-white-50 fw-semibold">ALFA / TANPA KET</small>
                <h2 class="fw-bold mb-0"><?= $alfa; ?></h2>
                <small>Siswa Alpa</small>
              </div>
              <i class="fa-solid fa-user-xmark fa-3x text-white-50"></i>
            </div>
          </div>
        </a>
      </div>
    </div>

    <!-- TABEL DAFTAR SISWA KELAS -->
    <div class="card border-0 shadow-sm rounded-3">
      <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="fw-bold mb-0 text-dark">Daftar Siswa Kelas <?= $nama_kelas; ?> (<?= $total_siswa; ?> Siswa)</h5>
        
        <!-- Tombol pemicu Modal Popup di Tengah -->
        <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalTambahSiswa">
          <i class="fa-solid fa-user-plus me-1"></i> Tambah Mahasiswa
        </button>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
              <tr>
                <th class="text-center px-3" style="width: 70px;">No</th>
                <th class="text-center">ID Siswa</th>
                <th class="text-start">Nama Siswa</th>
                <th class="text-start">Jenis Kelamin</th>
                <th class="text-start">Alamat</th>
                <th class="text-center">Status Kehadiran Hari Ini</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';
              
              $no_urut = 1; 
              foreach ($daftar_siswa as $index => $siswa) {
                  $original_no = $index + 1;
                  $id_siswa = "S" . str_pad($original_no, 3, "0", STR_PAD_LEFT);
                  
                  $nama_siswa = $siswa['nama'];
                  $jk = $siswa['jk'];
                  $alamat = $siswa['alamat'];
                  
                  if ($original_no == 5 || $original_no == 12) {
                      $status_teks = 'Izin';
                      $status_badge = '<span class="badge bg-warning text-dark"><i class="fa-solid fa-clock"></i> Izin</span>';
                  } elseif ($original_no == 18) {
                      $status_teks = 'Sakit';
                      $status_badge = '<span class="badge bg-info text-dark"><i class="fa-solid fa-notes-medical"></i> Sakit</span>';
                  } else {
                      $status_teks = 'Hadir';
                      $status_badge = '<span class="badge bg-success"><i class="fa-solid fa-check"></i> Hadir</span>';
                  }

                  if ($filter == 'Hadir' && $status_teks != 'Hadir') continue;
                  if ($filter == 'IzinSakit' && ($status_teks != 'Izin' && $status_teks != 'Sakit')) continue;
                  if ($filter == 'Alpa' && $status_teks != 'Alpa') continue;
              ?>
              <tr>
                <td class="text-center px-3 fw-bold"><?= $no_urut++; ?></td>
                <td class="text-center"><code><?= $id_siswa; ?></code></td>
                <td class="text-start fw-semibold"><?= $nama_siswa; ?></td>
                <td class="text-start"><?= $jk; ?></td>
                <td class="text-start"><?= $alamat; ?></td>
                <td class="text-center"><?= $status_badge; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div> <!-- Penutup container -->

  <!-- MODAL POPUP TAMBAH MAHASISWA (DI TENGAH & SUDUT TUMPUL) -->
  <div class="modal fade" id="modalTambahSiswa" tabindex="-1" aria-labelledby="modalTambahSiswaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header border-0 pb-0">
          <h5 class="modal-title fw-bold text-primary" id="modalTambahSiswaLabel">
            <i class="fa-solid fa-user-plus me-2"></i> Tambah Mahasiswa
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pt-2">
          <!-- Form Input Data -->
          <form action="" method="POST">
            <div class="mb-3">
              <label for="id_mahasiswa" class="form-label fw-semibold text-secondary small">ID Mahasiswa</label>
              <input type="text" class="form-control rounded-3 py-2" id="id_mahasiswa" name="id_mahasiswa" placeholder="Contoh: M001" required>
            </div>

            <div class="mb-3">
              <label for="nama_lengkap" class="form-label fw-semibold text-secondary small">Nama Lengkap</label>
              <input type="text" class="form-control rounded-3 py-2" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama" required>
            </div>

            <div class="mb-3">
              <label for="id_jurusan" class="form-label fw-semibold text-secondary small">ID Jurusan (id_j)</label>
              <input type="text" class="form-control rounded-3 py-2" id="id_jurusan" name="id_jurusan" placeholder="Contoh: J01" required>
            </div>

            <div class="mb-3">
              <label for="alamat" class="form-label fw-semibold text-secondary small">Alamat</label>
              <input type="text" class="form-control rounded-3 py-2" id="alamat" name="alamat" placeholder="Masukkan alamat" required>
            </div>

            <div class="mb-3">
              <label for="jk" class="form-label fw-semibold text-secondary small">Jenis Kelamin</label>
              <select class="form-select rounded-3 py-2" id="jk" name="jk" required>
                <option value="" selected disabled>Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>

            <div class="d-grid mt-4">
              <button type="submit" name="simpan" class="btn btn-primary py-2 rounded-3 fw-semibold">
                <i class="fa-solid fa-floppy-disk me-1"></i> Simpan Data
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>