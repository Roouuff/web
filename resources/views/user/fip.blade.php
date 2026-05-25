<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil UNHASY</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="#">UNHASY</a>
    <!-- <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="{{ url('beranda') }}">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('fip') }}">FIP</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="bg-light text-center p-5">
  <div class="container">
    <h1 class="fw-bold">Universitas Hasyim Asy’ari</h1>
    <p class="lead">Membangun Generasi Unggul dan Berakhlak</p>
    <!-- <a href="#about" class="btn btn-success">Selengkapnya</a> -->
  </div>
</section>

<!-- Tentang
<section id="about" class="p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Tentang Fakultas Ilmu Pendidikan</h2>
        <p>
          Fakultas Ilmu Pendidikan Universitas Hasyim Asy’ari (UNHASY) adalah fakultas yang berfokus pada pengembangan ilmu pendidikan dengan mengintegrasikan nilai-nilai keislaman.
        </p>
      </div>
      <div class="col-md-6">
        <img src="https://via.placeholder.com/500" class="img-fluid rounded">
      </div>
    </div>
  </div>
</section> -->

<!-- Tentang -->
<section id="about" class="p-5">
  <div class="container">
    <div class="row">
       <div class="col-md-3">
        <img src="{{ asset('images/logo1.png') }}" class="img-fluid rounded">
      </div>
      <div class="col-md-9">
        <h2 class="text-center">Fakultas Ilmu Pendidikan</h2>
        <hr>
        <p>
          Fakultas Ilmu Pendidikan Universitas Hasyim Asy’ari (UNHASY) adalah fakultas yang berfokus pada pengembangan ilmu pendidikan dengan mengintegrasikan nilai-nilai keislaman.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Prodi -->
<section id="prodi" class="bg-light p-5">
  <div class="container">
    <h2 class="text-center mb-4">Ilmu Pendidikan</h2>
    <div class="row">

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5>Pendidikan Dasar</h5>
            <p>Belajar tentang pendidikan dasar dan metode pengajaran.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5>Pendidikan Menengah</h5>
            <p>Belajar tentang pendidikan menengah dan metode pengajaran.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5>Pendidikan Agama Islam</h5>
            <p>Membentuk pendidik yang profesional dan religius.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Kontak -->
<section id="kontak" class="p-5">
  <div class="container">
    <h2 class="text-center mb-4">Kontak</h2>
    <form>
      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Nama">
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" placeholder="Email">
      </div>
      <div class="mb-3">
        <textarea class="form-control" rows="4" placeholder="Pesan"></textarea>
      </div>
      <button class="btn btn-success">Kirim</button>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="bg-success text-white text-center p-3">
  <p>&copy; 2026 UNHASY. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>