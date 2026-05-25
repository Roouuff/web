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
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">

    <!-- Logo -->
    <a class="navbar-brand" href="#">
      <img src="https://unhasy.ac.id/wp-content/uploads/2024/05/Group-6.png" 
           alt="UNHASY" height="50">
    </a>

    <!-- Toggle (Mobile) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link active" href="#">Profil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="https://pmb.unhasy.ac.id/">Daftar Kuliah</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="https://unhasy.ac.id/category/berita/">Berita</a>
        </li>

        <!-- Dropdown Fakultas -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Fakultas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://fai.unhasy.ac.id/">Fakultas Agama Islam</a></li>
            <li><a class="dropdown-item" href="https://fti.unhasy.ac.id">Fakultas Teknologi Informasi</a></li>
            <li><a class="dropdown-item" href="https://fip.unhasy.ac.id">Fakultas Ilmu Pendidikan</a></li>
            <li><a class="dropdown-item" href="https://fe.unhasy.ac.id">Fakultas Ekonomi</a></li>
            <li><a class="dropdown-item" href="https://ft.unhasy.ac.id">Fakultas Teknik</a></li>
          </ul>
        </li>

      </ul>
    </div>

  </div>
</nav>



<!-- Hero -->
<section class="bg-light text-center p-5">
  <div class="container">
    <h1 class="fw-bold">UNIVERSITAS HASYIM ASY'ARI</h1>
    <p class="lead">Membangun Generasi Unggul dan Berakhlak</p>
    <!-- <a href="#about" class="btn btn-success">Selengkapnya</a> -->
  </div>
</section>

<!-- Tentang -->
<section id="about" class="p-5">
  <div class="container">
    <div class="row">
       <div class="col-md-3">
        <img src="{{ asset('images/logo1.png') }}" class="img-fluid rounded">
      </div>
      <div class="col-md-9">
        <h2 class="text-center">UNIVERSITAS HASYIM ASY'ARI</h2>
        <hr>
        <p>
          Universitas Hasyim Asy’ari (UNHASY) adalah perguruan tinggi yang berfokus pada pengembangan ilmu pengetahuan dan nilai-nilai keislaman.
          perguruan tinggi berbasis pesantren yang didirikan oleh KH. Muhammad Yusuf Hasyim, berlokasi di area Pondok Pesantren Tebuireng, Jombang, Jawa Timur. Resmi menjadi universitas sejak Juli 2013, UNHASY mengintegrasikan ilmu agama dan umum dengan semboyan "The Real University of Pesantren and Entrepreneurship".
        </p>
      </div>
    </div>
  </div>
</section>


<!-- Prodi -->
<section id="prodi" class="bg-light p-5">
  <div class="container">
    <h2 class="text-center mb-4">Visi & Misi</h2>
    <div class="row">

      <!-- Visi -->
      <div class="col-md-6">
        <div class="card shadow h-100">
          <div class="card-body">
            <h5 class="text-success">Visi</h5>
            <p>
              Menjadi universitas unggul dalam pengembangan ilmu pengetahuan, 
              teknologi, dan seni berbasis nilai-nilai keislaman.
            </p>
          </div>
        </div>
      </div>

      <!-- Misi -->
      <div class="col-md-6">
        <div class="card shadow h-100">
          <div class="card-body">
            <h5 class="text-success">Misi</h5>
            <ul>
              <li>Menyelenggarakan pendidikan berkualitas</li>
              <li>Mengembangkan penelitian inovatif</li>
              <li>Pengabdian kepada masyarakat</li>
              <li>Membentuk karakter islami</li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Tentang UNHASY -->
<section class="p-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- Video -->
      <div class="col-md-6 mb-4">
        <div class="ratio ratio-16x9">
          <iframe 
            src="https://www.youtube.com/embed/Xmx715Re7p4" 
            title="Profil UNHASY"
            allowfullscreen>
          </iframe>
        </div>
      </div>

      <!-- Text -->
      <div class="col-md-6">
        <h1 class="fw-bold mb-3">Tentang UNHASY</h1>
        <p style="text-align: justify;">
          Universitas Hasyim Asy’ari (Unhasy) adalah perguruan tinggi yang didirikan oleh 
          pengasuh pondok pesantren Tebuireng Jombang, KH. Muhammad Yusuf Hasyim. 
          Sebelum menjadi universitas, kampus ini bernama Institut Keislaman Hasyim Asy’ari.
        </p>
        <p style="text-align: justify;">
          Unhasy mengintegrasikan kurikulum agama dengan kurikulum umum sehingga menghasilkan 
          lulusan yang memiliki keseimbangan antara ilmu pengetahuan dan nilai-nilai keislaman, 
          berakhlakul karimah, serta memiliki jiwa kewirausahaan.
        </p>
      </div>

    </div>
  </div>
</section>




<!-- Logo / Banner -->
<section class="p-4 text-center">
  <div class="container">

    <a href="https://unhasy.ac.id/wp-content/uploads/2024/05/logopddikti.png" target="_blank">
      <img 
        src="https://unhasy.ac.id/wp-content/uploads/2024/05/logopddikti.png" 
        class="img-fluid rounded shadow"
        alt="Logo PDDIKTI">
    </a>

  </div>
</section>


<!-- Kerja Sama -->
<section class="py-5">
  <div class="container text-center">

    <!-- Judul -->
    <h1 class="fw-bold mb-4">Kerja Sama</h1>

    <!-- Gambar -->
    <img 
      src="https://unhasy.ac.id/wp-content/uploads/2025/02/image_24-1.png" 
      class="img-fluid rounded shadow"
      alt="Kerja Sama UNHASY">

  </div>
</section>



<footer class="bg-dark text-white pt-5 pb-3">
  <div class="container">
    <div class="row">

      <!-- Kolom 1: Logo & Kontak -->
      <div class="col-md-4 mb-4">
        <img src="https://unhasy.ac.id/wp-content/uploads/2025/08/unhasy-tag.png" 
             class="img-fluid mb-3" alt="Logo UNHASY">

        <h5>Universitas Hasyim Asy’ari</h5>
        <p>
          Tebuireng, Jl. Irian Jaya No.55, Cukir, Diwek, Jombang, Jawa Timur 61471
        </p>
        <p>Email: humas@unhasy.ac.id</p>
        <p>Telp: (0321) 861719</p>

        <!-- Sosial Media -->
        <div>
          <a href="#" class="text-white me-3">Facebook</a>
          <a href="#" class="text-white me-3">Twitter</a>
          <a href="#" class="text-white">Instagram</a>
        </div>
      </div>

      <!-- Kolom 2: Fakultas -->
      <div class="col-md-4 mb-4">
        <h5>Fakultas</h5>
        <ul class="list-unstyled">
          <li><a href="https://fai.unhasy.ac.id/" class="text-white text-decoration-none">Fakultas Agama Islam</a></li>
          <li><a href="https://ft.unhasy.ac.id/" class="text-white text-decoration-none">Fakultas Teknik</a></li>
          <li><a href="https://fti.unhasy.ac.id/" class="text-white text-decoration-none">Fakultas Teknologi Informasi</a></li>
          <li><a href="https://fe.unhasy.ac.id/" class="text-white text-decoration-none">Fakultas Ekonomi</a></li>
          <li><a href="https://fip.unhasy.ac.id/" class="text-white text-decoration-none">Fakultas Ilmu Pendidikan</a></li>
        </ul>
      </div>

      <!-- Kolom 3: Google Maps -->
      <div class="col-md-4 mb-4">
        <h5>Lokasi</h5>
        <div class="ratio ratio-4x3">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.6774150605333!2d112.23219097943172!3d-7.610037872822221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7841fda253d311%3A0x89d35ef52202df7!2sUniversitas%20Hasyim%20Asy%27ari!5e0!3m2!1sid!2sid!4v1740446548954!5m2!1sid!2sid" 
            style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>

    </div>

    <!-- Copyright -->
    <div class="text-center pt-3 border-top mt-3">
      <p class="mb-0">&copy; 2026 UNHASY. All Rights Reserved.</p>
    </div>

  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>