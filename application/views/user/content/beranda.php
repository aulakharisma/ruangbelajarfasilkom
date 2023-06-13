  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Unggah Tugas dan Materimu<br>di Ruang Belajar Sekarang !</h1>
      <a href="Materi/add" class="btn-get-started">Unggah Sekarang <i class="bi bi-arrow-right-short"></i></a>
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
                  <p><?= $mtr->desk_materi ?></p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="<?= base_url('asset/user-template') ?>/assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                      <span>Antonio</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class="bi bi-calendar-check"></i>&nbsp;<small><?= $mtr->CREATED_AT ?></small>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item-->
          <?Php } ?>

          <a href="<?= base_url() ?>materi" style="margin-top:2rem; font-weight:600 ;">
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

          <?php foreach ($matkul as $key => $mk) { ?>
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
                <h3><a href="<?= base_url() ?>detail_kategori"><?= $mk->nama_matkul; ?></a></h3>
              </div>
            </div>
          <?php } ?>

          <a href="<?= base_url() ?>kategori" style="margin-top:2rem; font-weight:600 ;">
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
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $total1; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pengguna</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $total2; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Materi</p>
          </div>

          <div class="col-lg-4 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $total3; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Kategori Mata Kuliah</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


  </main><!-- End #main -->