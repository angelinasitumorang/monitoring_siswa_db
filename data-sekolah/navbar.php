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
          <a class="nav-link" href="dashboard.php"><i class="fa-solid fa-chart-line me-1"></i> Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">
            <i class="fa-solid fa-school me-1"></i> Data Sekolah
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="data_siswa.php">Data Siswa</a></li>
            <li><a class="dropdown-item" href="data_kelas.php">Data Kelas</a></li>
            <li><a class="dropdown-item" href="data_guru.php">Data Guru</a></li>
            <li><a class="dropdown-item" href="data_mapel.php">Data Mata Pelajaran</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="monitoring_akademik.php"><i class="fa-solid fa-clipboard-user me-1"></i> Monitoring & Akademik</a>
        </li>
      </ul>
    </div>
  </div>
</nav>