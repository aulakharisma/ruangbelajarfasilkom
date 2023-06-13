  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Unggah Tugas dan Materimu<br>di Ruang Belajar Sekarang !</h1>
      <a href="upload" class="btn-get-started">Unggah Sekarang <i class="bi bi-arrow-right-short"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Materi</h2>
          <p>Materi Terbaru</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <?php
          foreach ($materi as $key => $mtr) {
          ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <img src="<?= base_url('asset/user-template') ?>/assets/img/course-1.jpg" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4><?= $mtr->nama_matkul ?></h4>
                  </div>

                  <h3><a href="<?= base_url() ?>home/detailmateri"><?= $mtr->kategori ?> - <?= $mtr->judul ?></a></h3>
                  <p><?= $mtr->deskripsi ?></p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="<?= base_url('asset/user-template') ?>/assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                      <span>Aula Kharismah</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bi bi-calendar-check"></i>&nbsp;<small><?= $mtr->CREATED_AT ?></small>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item-->
          <?Php } ?>

          <a href="http://localhost/ruangbelajarfasilkom/home/materi" style="margin-top:2rem; font-weight:600 ;">
            <p>Lihat Semua Materi >></p>
          </a>
        </div>


      </div>
    </section><!-- End Popular Courses Section -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features mt-5">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kategori Mata Kuliah</h2>
          <p>Mata Kuliah</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a href="<?= base_url() ?>home/detailkategori">UI UX</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="<?= base_url() ?>home/detailkategori">Data Analis</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="<?= base_url() ?>home/detailkategori">Data Scientist</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="<?= base_url() ?>home/detailkategori">Metode Penelitian</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="<?= base_url() ?>home/detailkategori">Basis Data</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="<?= base_url() ?>home/detailkategori">Etika dan Kompetensi Informatika</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="<?= base_url() ?>home/detailkategori">Kalkulus</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="<?= base_url() ?>home/detailkategori">Metode Numerik</a></h3>
            </div>
          </div>
          <a href="<?= base_url() ?>home/kategori" style="margin-top:2rem; font-weight:600 ;">
            <p>Lihat Semua Kategori >></p>
          </a>

        </div>

      </div>
    </section><!-- End Features Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg mt-5 pt-5">
      <div class="container">

        <div class="row counters">
          <h2 class="text-center"><b>Statistik</b></h2>

          <div class="col-lg-4 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pengguna</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1034" data-purecounter-duration="1" class="purecounter"></span>
            <p>Materi</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="107" data-purecounter-duration="1" class="purecounter"></span>
            <p>Katgori Mata Kuliah</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


  </main><!-- End #main -->