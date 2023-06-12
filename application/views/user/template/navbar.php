<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?= base_url() ?>home">ruangbelajar.</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="<?= base_url('asset/user-template') ?>/assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <!-- <a href="index.html" class="logo me-auto"><img src="asset/img/logo-horizontal-b-g-k.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="<?= base_url() ?>home">Beranda</a></li>
          <li><a href="<?= base_url() ?>materi">Materi</a></li>
          <li><a href="<?= base_url() ?>kategori">Kategori</a></li>
          <li class="dropdown"><a href="#"><span><i class="bi bi-person-circle ps-5" style="font-size : 2rem"></i></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url() ?>profile">Profile</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="courses.html" class="get-started-btn"><i class="bi bi-person-circle"></i></a> -->

    </div>
  </header><!-- End Header -->