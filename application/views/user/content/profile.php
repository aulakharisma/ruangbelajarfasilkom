<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= echo $row->column_name;-->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container py-4">
        <h2>Halo <?= $session_user->nama ?> !</h2>
        <p>Yuk, unggah sumber belajarmu! <br> Bantu warga Fasilkom yang lain dalam belajar supaya bisa jago kayak kamu</p>
        <a href="<?= base_url() ?>home/upload" class="btn btn-light mt-3">Unggah Sekarang</a>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Materi yang sudah kamu unggah</h2>
          <p>Materi</p>
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <?php foreach ($alpha as $trans): ?>
          <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?= base_url('./upload/cover/' . $trans->cover) ?>" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?= $trans->id_matkul ?></h4>
                </div>

                <h3><a href="<?= base_url('detail_materi/index/' . $trans->id_materi) ?>"><?= $trans->kategori ?> - ><?php echo $trans->judul ?></a></h3>
                <p><?= $trans->desk_materi ?></p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="<?= base_url('asset/user-template') ?>/assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span><?= $session_user->nama ?></span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-calendar-check"></i>&nbsp;<small><?= $trans->CREATED_MTR ?></small>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
          <?php endforeach?>

      </div>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus materi <b>UI UX - Prototyping Design di Figma</b></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
            </div>
        </div>
        </div>


      </div>
    </section><!-- End Popular Courses Section -->

        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->