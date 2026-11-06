<?php
// Panggil file koneksi database
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring & Akademik - Monitoring Siswa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- NAVBAR UTAMA -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
      <div class="container">
        <a class="navbar-brand fw-bold" href="dashboard.php">🎓 Monitoring Siswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="data_kelas.php">Data Kelas dan Siswa</a></li>
            <li class="nav-item"><a class="nav-link active" href="monitoring_akademik.php">Monitoring dan Akademik</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="fw-bold mb-3">📊 Monitoring & Akademik Kelas</h2>
                <p class="text-muted">Kelola data kehadiran, nilai mata pelajaran, dan perkembangan bulanan siswa.</p>
                <hr>
            </div>
        </div>

        <!-- NAV TABS UNTUK FITUR DI DALAM MENU 3 -->
        <ul class="nav nav-tabs mb-3" id="academicTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="kehadiran-tab" data-bs-toggle="tab" data-bs-target="#kehadiran" type="button" role="tab">Kehadiran Siswa</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="nilai-tab" data-bs-toggle="tab" data-bs-target="#nilai" type="button" role="tab">Nilai Akademik</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="perkembangan-tab" data-bs-toggle="tab" data-bs-target="#perkembangan" type="button" role="tab">Perkembangan Siswa</button>
            </li>
        </ul>

        <!-- KONTEN TAB -->
        <div class="tab-content" id="academicTabContent">

            <!-- TAB 1: KEHADIRAN -->
            <div class="tab-pane fade show active" id="kehadiran" role="tabpanel">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">Rekap Kehadiran Harian</h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Kelas</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Guru Pengajar</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $sql_kehadiran = mysqli_query($koneksi, "
                                        SELECT k.*, s.nama_siswa, kl.nama_kelas, m.nama_mapel, g.nama_guru 
                                        FROM kehadiran k
                                        JOIN siswa s ON k.id_siswa = s.id_siswa
                                        JOIN kelas kl ON s.id_kelas = kl.id_kelas
                                        JOIN mapel m ON k.id_mapel = m.id_mapel
                                        JOIN guru g ON k.id_guru = g.id_guru
                                        ORDER BY k.tanggal DESC
                                    ");
                                    while ($data = mysqli_fetch_assoc($sql_kehadiran)) {
                                        // Warna badge status kehadiran
                                        $badge = 'bg-secondary';
                                        if ($data['status'] == 'Hadir') $badge = 'bg-success';
                                        elseif ($data['status'] == 'Izin') $badge = 'bg-primary';
                                        elseif ($data['status'] == 'Sakit') $badge = 'bg-warning text-dark';
                                        elseif ($data['status'] == 'Alpa') $badge = 'bg-danger';
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data['nama_siswa']; ?></td>
                                        <td><?= $data['nama_kelas']; ?></td>
                                        <td><?= $data['nama_mapel']; ?></td>
                                        <td><?= $data['nama_guru']; ?></td>
                                        <td><?= $data['tanggal']; ?></td>
                                        <td><span class="badge <?= $badge; ?>"><?= $data['status']; ?></span></td>
                                        <td><?= $data['keterangan']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 2: NILAI AKADEMIK -->
            <div class="tab-pane fade" id="nilai" role="tabpanel">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">Daftar Nilai Mata Pelajaran</h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Guru Pengajar</th>
                                        <th>Jenis Penilaian</th>
                                        <th>Nilai Angka</th>
                                        <th>Semester</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $sql_nilai = mysqli_query($koneksi, "
                                        SELECT n.*, s.nama_siswa, m.nama_mapel, g.nama_guru 
                                        FROM nilai n
                                        JOIN siswa s ON n.id_siswa = s.id_siswa
                                        JOIN mapel m ON n.id_mapel = m.id_mapel
                                        JOIN guru g ON n.id_guru = g.id_guru
                                        ORDER BY s.nama_siswa ASC
                                    ");
                                    while ($data = mysqli_fetch_assoc($sql_nilai)) {
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $data['nama_siswa']; ?></td>
                                        <td><?= $data['nama_mapel']; ?></td>
                                        <td><?= $data['nama_guru']; ?></td>
                                        <td><?= $data['jenis_penilaian']; ?></td>
                                        <td class="fw-bold text-primary"><?= $data['nilai_angka']; ?></td>
                                        <td><?= $data['semester']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 3: PERKEMBANGAN SISWA -->
            <div class="tab-pane fade" id="perkembangan" role="tabpanel">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold mb-3">Laporan Perkembangan Bulanan Siswa</h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered align-middle text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Periode</th>
                                        <th>Kehadiran (%)</th>
                                        <th>Hadir</th>
                                        <th>Izin</th>
                                        <th>Sakit</th>
                                        <th>Alpa</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $sql_perkembangan = mysqli_query($koneksi, "
                                        SELECT p.*, s.nama_siswa 
                                        FROM perkembangan_siswa p
                                        JOIN siswa s ON p.id_siswa = s.id_siswa
                                        ORDER BY p.periode DESC
                                    ");
                                    while ($data = mysqli_fetch_assoc($sql_perkembangan)) {
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td class="text-start"><?= $data['nama_siswa']; ?></td>
                                        <td><?= $data['periode']; ?></td>
                                        <td class="fw-bold"><?= $data['persentase_kehadiran']; ?></td>
                                        <td><?= $data['jumlah_hadir']; ?></td>
                                        <td><?= $data['jumlah_izin']; ?></td>
                                        <td><?= $data['jumlah_sakit']; ?></td>
                                        <td><?= $data['jumlah_alpa']; ?></td>
                                        <td><span class="badge bg-success"><?= $data['status_perkembangan']; ?></span></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>