<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container py-4">
      <h2>Kategori Mata Kuliah</h2>
      <p>Semua keperluan belajar kamu akan ditampilkan di sini,<br>kamu bisa melakukan pencarian dengan menekan tombol search di bawah </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features mt-5">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Kategori Mata Kuliah</h2>
        <p>Mata Kuliah</p>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <?php foreach ($matkul as $key => $mk) { ?>
          <div class="col-lg-3 col-md-4 mb-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #5578ff;"></i>
              <h3><a href="detail_kategori"><?= $mk->nama_matkul; ?></a></h3>
            </div>
          </div>
        <?php } ?>

      </div>

    </div>
  </section><!-- End Features Section -->

</main><!-- End #main -->