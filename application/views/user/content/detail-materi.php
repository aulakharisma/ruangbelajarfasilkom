<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container py-4">
      <h2><?php echo $materi->judul; ?></h2>
      <p><?php echo $materi->kategori; ?> / <?php echo $materi->nama_matkul; ?></p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Cource Details Section ======= -->
  <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-8">
          <!-- <img src="<?= base_url('asset/user-template') ?>/assets/img/course-details.jpg" class="img-fluid" alt=""> -->
          <!-- <img src="asset/user-template/assets/img/hero-bg.jpg" class="img-fluid" alt=""> -->
          <!-- <img src="asset/img/hero-bg.JPG" alt="img"> -->
          <h3>Deskrispsi / Link</h3>
          <p>
            <?php echo $materi->desk_materi; ?>
          </p>
          <a href="<?php echo base_url('./upload/dokumen/' . $materi->dok_materi); ?>" class="btn btn-success">Unduh Dokumen</a>
        </div>
        <div class="col-lg-4">

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Penulis</h5>
            <p>Aula Kharismah</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Mata Kuliah</h5>
            <p><?php echo $materi->nama_matkul; ?></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Kategori</h5>
            <p><?php echo $materi->kategori; ?></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Diunggah pada</h5>
            <p><?php echo $materi->CREATED_MTR; ?></p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Cource Details Section -->

</main><!-- End #main -->