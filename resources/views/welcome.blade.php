<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sport Center</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
  <!-- Navbar -->
  <div class="container">
      <nav class="navbar fixed-top bg-body-secondary navbar-expand-lg">
          <div class="container">
              <a class="navbar-brand" href="#">
                  <img src="kon1.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                      <li class="nav-item ">
                          <a class="nav-link active" aria-current="page" href="#home">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#about">About</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="/olahraga">Booking olahraga</a>
                      </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/kategori">kategorilapangan
                            </a>
                        </li>
                      <?php
                      if (isset($_SESSION['id_user'])) {
                          echo '
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="user/lapangan.php">Lapangan</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="user/bayar.php">Pembayaran</a>
                          </li>
                          ';
                      }
                      ?>
                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#contact">Kontak</a>
                      </li>
                  </ul>
                  <?php
                  if (isset($_SESSION['id_user'])) {
                      // jika user telah login, tampilkan tombol profil dan sembunyikan tombol login
                      echo '<a href="user/profil.php" data-bs-toggle="modal" data-bs-target="#profilModal" class="btn btn-inti"><i data-feather="user"></i></a>';
                  } else {
                      // jika user belum login, tampilkan tombol login dan sembunyikan tombol profil
                      echo '<a href="login.php" class="btn btn-inti" type="submit">Login</a>';
                  }
                  ?>
              </div>
          </div>
      </nav>
  </div>
  <!-- End Navbar -->

  <!-- Content -->
  <div class="container mt-5 pt-5">
      <div class="row justify-content-center">
          <div class="col-md-8 text-center">
              <h1>Selamat Datang di Website Booking Lapangan</h1>
              <p class="lead">Temukan berbagai lapangan olahraga yang sesuai dengan kebutuhan Anda dan segera booking sekarang!</p>
          </div>
      </div>
  </div>
  <!-- End Content -->

  <!-- Your Additional Content Goes Here -->

</body>
