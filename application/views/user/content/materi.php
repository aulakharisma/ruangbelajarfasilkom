<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container py-4">
      <h2>Bahan Pembelajaran</h2>
      <p>Semua keperluan belajar kamu akan ditampilkan di sini,<br>kamu bisa melakukan pencarian dengan menekan tombol search di bawah </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Popular Courses Section ======= -->
  <section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Materi</h2>
        <p>Semua Materi</p>
      </div>
      <form action="" method="post" class="mb-4">
        <input type="text" class="py-2 rounded" style="border :1px solid #cfcfcf; width:50%;" name="text">
        <input type="submit" value="Search" class="py-2 px-3 rounded" style="border:none; background-color:#3ac162; color:#fff; font-weight: 500;">
      </form>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <?php
        foreach ($materi as $key => $mtr) {
        ?>
          <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?= base_url('asset/user-template') ?>/assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?= $mtr->nama_matkul ?></h4>
                </div>

                <h3><a href="<?= base_url() ?>detail_materi"><?= $mtr->kategori ?> - <?= $mtr->judul ?></a></h3>
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

      </div>


    </div>
  </section><!-- End Popular Courses Section -->

  </div>

  </div>
  </section><!-- End Courses Section -->

</main><!-- End #main -->