<?php
session_start();

$nama_kelas   = "XI IPA 1";
$tingkat      = "XI";
$tahun_ajaran = "2026/2027";

// Jika session daftar_siswa belum ada, buat data awalnya beserta status kehadiran & perkembangan
if (!isset($_SESSION['daftar_siswa'])) {
    $_SESSION['daftar_siswa'] = [
        ["nama" => "Andi Pratama", "jk" => "Laki-laki", "alamat" => "Jl. HR. Soebrantas", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Budi Santoso", "jk" => "Laki-laki", "alamat" => "Jl. Garuda Sakti", "status" => "Hadir", "perkembangan" => "Sangat Baik"],
        ["nama" => "Citra Lestari", "jk" => "Perempuan", "alamat" => "Jl. Arifin Achmad", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Dedi Kurniawan", "jk" => "Laki-laki", "alamat" => "Jl. Soekarno-Hatta", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Eka Putri", "jk" => "Perempuan", "alamat" => "Jl. Sudirman", "status" => "Izin", "perkembangan" => "Cukup"],
        ["nama" => "Fajar Ramadhan", "jk" => "Laki-laki", "alamat" => "Jl. Riau", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Gita Gutawa", "jk" => "Perempuan", "alamat" => "Jl. Patimura", "status" => "Hadir", "perkembangan" => "Sangat Baik"],
        ["nama" => "Hadi Wijaya", "jk" => "Laki-laki", "alamat" => "Jl. Paus", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Indah Permata", "jk" => "Perempuan", "alamat" => "Jl. Tuanku Tambusai", "status" => "Hadir", "perkembangan" => "Sangat Baik"],
        ["nama" => "Joko Susilo", "jk" => "Laki-laki", "alamat" => "Jl. Nangka", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Kartika Sari", "jk" => "Perempuan", "alamat" => "Jl. Subrantas", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Lestari", "jk" => "Perempuan", "alamat" => "Jl. Lily", "status" => "Izin", "perkembangan" => "Cukup"],
        ["nama" => "Maya Anggraini", "jk" => "Perempuan", "alamat" => "Jl. Delima", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Nanda Pratama", "jk" => "Laki-laki", "alamat" => "Jl. Cipta Karya", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Putri Utami", "jk" => "Perempuan", "alamat" => "Jl. Kamboja", "status" => "Hadir", "perkembangan" => "Sangat Baik"],
        ["nama" => "Qori Sandioriva", "jk" => "Perempuan", "alamat" => "Jl. Melati", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Rian Mahendra", "jk" => "Laki-laki", "alamat" => "Jl. Mawar", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Siti Nurhaliza", "jk" => "Perempuan", "alamat" => "Jl. Kenanga", "status" => "Sakit", "perkembangan" => "Cukup"],
        ["nama" => "Tono Sudiono", "jk" => "Laki-laki", "alamat" => "Jl. Lobak", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Utami Dewi", "jk" => "Perempuan", "alamat" => "Jl. Rajawali", "status" => "Hadir", "perkembangan" => "Sangat Baik"],
        ["nama" => "Vira Amelia", "jk" => "Perempuan", "alamat" => "Jl. Garuda", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Wahyu Hidayat", "jk" => "Laki-laki", "alamat" => "Jl. Durian", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Xaverius", "jk" => "Laki-laki", "alamat" => "Jl. Mangga", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Yanti Susanti", "jk" => "Perempuan", "alamat" => "Jl. Rambutan", "status" => "Hadir", "perkembangan" => "Sangat Baik"],
        ["nama" => "Zainal Abidin", "jk" => "Laki-laki", "alamat" => "Jl. Jati", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Ahmad Fauzi", "jk" => "Laki-laki", "alamat" => "Jl. Cendana", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Bella Safitri", "jk" => "Perempuan", "alamat" => "Jl. Dahlia", "status" => "Hadir", "perkembangan" => "Sangat Baik"],
        ["nama" => "Candra Kirana", "jk" => "Perempuan", "alamat" => "Jl. Anggrek", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Dewi Lestari", "jk" => "Perempuan", "alamat" => "Jl. Srikandi", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Eko Prasetyo", "jk" => "Laki-laki", "alamat" => "Jl. Bangka", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Fitri Handayani", "jk" => "Perempuan", "alamat" => "Jl. Sumatera", "status" => "Hadir", "perkembangan" => "Sangat Baik"],
        ["nama" => "Gilang Dirga", "jk" => "Laki-laki", "alamat" => "Jl. Kalimantan", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Hesti Purwadinata", "jk" => "Perempuan", "alamat" => "Jl. Jawa", "status" => "Hadir", "perkembangan" => "Baik"],
        ["nama" => "Irfan Hakim", "jk" => "Laki-laki", "alamat" => "Jl. Sulawesi", "status" => "Hadir", "perkembangan" => "Baik"]
    ];
}

$daftar_siswa = $_SESSION['daftar_siswa'];
$total_siswa = count($daftar_siswa);

// Hitung ringkasan status kehadiran secara dinamis
$hadir = 0;
$izin = 0;
$sakit = 0;
$alfa = 0;

foreach ($daftar_siswa as $s) {
    $st = isset($s['status']) ? $s['status'] : 'Hadir';
    if ($st == 'Hadir') $hadir++;
    elseif ($st == 'Izin') $izin++;
    elseif ($st == 'Sakit') $sakit++;
    elseif ($st == 'Alpa') $alfa++;
}
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
  <!-- Hubungkan ke file style.css -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- NAVBAR CUSTOM -->
  <header class="haeder">
    <a href="dashboard.php" class="logo">
      <i class="fa-solid fa-graduation-cap me-2"></i>Monitoring Siswa
    </a>
    <nav class="custom-nav">
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="data_sekolah.php">Data Sekolah</a></li>
        <li><a href="monitoring_akademik.php">Monitoring & Akademik</a></li>
      </ul>
    </nav>
  </header>

  <!-- KONTEN DASHBOARD -->
  <div class="container my-4">
    
    <!-- HEADER WELCOME -->
    <div class="welcome-header">
      <div>
        <h4 class="fw-bold mb-1">Dashboard Monitoring Kelas</h4>
        <p class="text-muted mb-0">Kelas: <span class="badge bg-primary fs-6"><?= $nama_kelas; ?></span> | Tahun Ajaran: <?= $tahun_ajaran; ?></p>
      </div>
      <div class="mt-2 mt-md-0">
        <button class="btn btn-outline-primary btn-sm shadow-sm" onclick="window.print()"><i class="fa-solid fa-print me-1"></i> Cetak Ringkasan</button>
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
                <small><?= ($total_siswa > 0) ? round(($hadir/$total_siswa)*100, 1) : 0; ?>% Kehadiran</small>
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
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
      <div class="card-header bg-white py-3 px-4 d-flex justify-content-between align-items-center border-bottom">
        <h5 class="fw-bold mb-0 text-dark"><i class="fa-solid fa-table-list me-2 text-primary"></i>Daftar Siswa Kelas <?= $nama_kelas; ?> <span class="text-muted fs-6 fw-normal">(<?= $total_siswa; ?> Siswa)</span></h5>
        
        <!-- Tombol Tambah Data -->
        <button class="btn btn-sm btn-primary-custom px-3 py-2 shadow-sm rounded-pill fw-semibold" type="button" data-bs-toggle="modal" data-bs-target="#modalTambahSiswa">
          <i class="fa-solid fa-user-plus me-1"></i> Tambah Data
        </button>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover align-middle mb-0">
            <thead class="table-light text-uppercase fs-7">
              <tr>
                <th class="text-center py-3 px-3" style="width: 70px;">No</th>
                <th class="text-center py-3">ID Siswa</th>
                <th class="text-start py-3">Nama Siswa</th>
                <th class="text-center py-3">Kelas</th> <!-- Kolom Relasi id_kelas -->
                <th class="text-start py-3">Jenis Kelamin</th>
                <th class="text-start py-3">Alamat</th>
                <th class="text-center py-3">Status Kehadiran</th>
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
                  $status_teks = isset($siswa['status']) ? $siswa['status'] : 'Hadir';
                  
                  if ($status_teks == 'Izin') {
                      $status_badge = '<span class="badge bg-warning text-dark px-3 py-2 rounded-pill shadow-sm"><i class="fa-solid fa-clock me-1"></i> Izin</span>';
                  } elseif ($status_teks == 'Sakit') {
                      $status_badge = '<span class="badge bg-info text-dark px-3 py-2 rounded-pill shadow-sm"><i class="fa-solid fa-notes-medical me-1"></i> Sakit</span>';
                  } elseif ($status_teks == 'Alpa') {
                      $status_badge = '<span class="badge bg-danger px-3 py-2 rounded-pill shadow-sm"><i class="fa-solid fa-xmark me-1"></i> Alpa</span>';
                  } else {
                      $status_badge = '<span class="badge bg-success px-3 py-2 rounded-pill shadow-sm"><i class="fa-solid fa-check me-1"></i> Hadir</span>';
                  }

                  if ($filter == 'Hadir' && $status_teks != 'Hadir') continue;
                  if ($filter == 'IzinSakit' && ($status_teks != 'Izin' && $status_teks != 'Sakit')) continue;
                  if ($filter == 'Alpa' && $status_teks != 'Alpa') continue;
              ?>
              <tr>
                <td class="text-center px-3 fw-bold text-secondary"><?= $no_urut++; ?></td>
                <td class="text-center"><span class="badge-id font-monospace"><?= $id_siswa; ?></span></td>
                <td class="text-start fw-semibold text-dark"><?= $nama_siswa; ?></td>
                <td class="text-center"><span class="badge bg-secondary bg-opacity-10 text-dark px-2 py-1"><?= $nama_kelas; ?></span></td>
                <td class="text-start text-muted"><?= $jk; ?></td>
                <td class="text-start text-muted"><?= $alamat; ?></td>
                <td class="text-center py-3">
                  <div class="d-flex align-items-center justify-content-center gap-2">
                    <!-- Tombol Edit -->
                    <button class="btn btn-sm btn-warning text-dark px-2.5 py-1.5 btn-action shadow-sm" title="Edit Data" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $id_siswa; ?>">
                      <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    
                    <!-- Badge Status Kehadiran -->
                    <div><?= $status_badge; ?></div>
                    
                    <!-- Tombol Hapus -->
                    <a href="hapus.php?id=<?= $id_siswa; ?>" class="btn btn-sm btn-danger px-2.5 py-1.5 btn-action shadow-sm" title="Hapus Data" onclick="return confirm('Yakin ingin menghapus data <?= $nama_siswa; ?>?')">
                      <i class="fa-solid fa-trash"></i>
                    </a>
                  </div>
                </td>
              </tr>

              <!-- MODAL EDIT DATA PER SISWA -->
              <div class="modal fade" id="modalEdit<?= $id_siswa; ?>" tabindex="-1" aria-labelledby="modalEditLabel<?= $id_siswa; ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content p-3">
                    <div class="modal-header border-0 pb-0">
                      <h5 class="modal-title fw-bold text-primary" id="modalEditLabel<?= $id_siswa; ?>">
                        <i class="fa-solid fa-user-pen me-2"></i> Edit Data Siswa
                      </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-2">
                      <form action="edit.php" method="POST">
                        <div class="mb-3">
                          <label class="form-label fw-semibold text-secondary small">ID Siswa</label>
                          <input type="text" class="form-control rounded-3 py-2 bg-light" name="id_siswa" value="<?= $id_siswa; ?>" readonly>
                        </div>

                        <div class="mb-3">
                          <label class="form-label fw-semibold text-secondary small">Nama Lengkap</label>
                          <input type="text" class="form-control rounded-3 py-2" name="nama_lengkap" value="<?= $nama_siswa; ?>" required>
                        </div>

                        <div class="mb-3">
                          <label class="form-label fw-semibold text-secondary small">Jenis Kelamin</label>
                          <select class="form-select rounded-3 py-2" name="jk" required>
                            <option value="Laki-laki" <?= ($jk == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                            <option value="Perempuan" <?= ($jk == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                          </select>
                        </div>

                        <div class="mb-3">
                          <label class="form-label fw-semibold text-secondary small">Alamat</label>
                          <input type="text" class="form-control rounded-3 py-2" name="alamat" value="<?= $alamat; ?>" required>
                        </div>

                        <div class="mb-3">
                          <label class="form-label fw-semibold text-secondary small">Status Kehadiran</label>
                          <select class="form-select rounded-3 py-2" name="status_kehadiran" required>
                            <option value="Hadir" <?= ($status_teks == 'Hadir') ? 'selected' : ''; ?>>Hadir</option>
                            <option value="Izin" <?= ($status_teks == 'Izin') ? 'selected' : ''; ?>>Izin</option>
                            <option value="Sakit" <?= ($status_teks == 'Sakit') ? 'selected' : ''; ?>>Sakit</option>
                            <option value="Alpa" <?= ($status_teks == 'Alpa') ? 'selected' : ''; ?>>Alpa</option>
                          </select>
                        </div>

                        <div class="d-grid mt-4">
                          <button type="submit" name="update" class="btn btn-primary-custom py-2 rounded-3 fw-semibold shadow-sm">
                            <i class="fa-solid fa-floppy-disk me-1"></i> Simpan Perubahan
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div> <!-- Penutup container -->

  <!-- MODAL POPUP TAMBAH DATA -->
  <div class="modal fade" id="modalTambahSiswa" tabindex="-1" aria-labelledby="modalTambahSiswaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header border-0 pb-0">
          <h5 class="modal-title fw-bold text-primary" id="modalTambahSiswaLabel">
            <i class="fa-solid fa-user-plus me-2"></i> Tambah Data
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pt-2">
          <form action="tambah.php" method="POST">
            <div class="mb-3">
              <label class="form-label fw-semibold text-secondary small">ID Siswa</label>
              <input type="text" class="form-control rounded-3 py-2" name="id_mahasiswa" placeholder="Contoh: S035" required>
            </div>

            <div class="ns-3 mb-3">
              <label class="form-label fw-semibold text-secondary small">Nama Lengkap</label>
              <input type="text" class="form-control rounded-3 py-2" name="nama_lengkap" placeholder="Masukkan nama" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold text-secondary small">Jenis Kelamin</label>
              <select class="form-select rounded-3 py-2" name="jk" required>
                <option value="" selected disabled>Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold text-secondary small">Alamat</label>
              <input type="text" class="form-control rounded-3 py-2" name="alamat" placeholder="Masukkan alamat" required>
            </div>

            <div class="d-grid mt-4">
              <button type="submit" name="simpan" class="btn btn-primary-custom py-2 rounded-3 fw-semibold shadow-sm">
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