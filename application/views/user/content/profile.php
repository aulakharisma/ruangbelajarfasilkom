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

          <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="<?= base_url('asset/user-template') ?>/assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Data Analis</h4>
                  <div>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-trash"></i></button>
                    <a href="<?= base_url()?>home/edit" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                  </div>
                </div>

                <h3><a href="<?= base_url() ?>home/detailmateri">Tugas - Cleaning Data menggunakan tensorflow</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="<?= base_url('asset/user-template') ?>/assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                    <span>Lana</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-calendar-check"></i>&nbsp;23 Juli 2023
                    &nbsp;&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="<?= base_url('asset/user-template') ?>/assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Artficial Intelligent</h4>
                  <div>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-trash"></i></button>
                    <a href="<?= base_url()?>home/edit" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                  </div>
                </div>

                <h3><a href="<?= base_url() ?>home/detailmateri">Tugas - Perkiraan cuaca di Surabaya</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="<?= base_url('asset/user-template') ?>/assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                    <span>Brandon</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?= base_url('asset/user-template') ?>/assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>UI UX</h4>
                  <div>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal"><i class="bi bi-trash"></i></button>
                    <a href="<?= base_url()?>home/edit" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                  </div>
                </div>

                <h3><a href="<?= base_url() ?>home/detailmateri">Materi - Prototyping Design di Figma</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="<?= base_url('asset/user-template') ?>/assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bi bi-calendar-check"></i>&nbsp;<small>24 Juli 2023</small>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

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