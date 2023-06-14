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
        <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>id materi</th>
                    <th>id user</th>
                    <th>Judul</th>
                    <th>id matkul</th>
                    <th>kategori</th>
                    <th>kategori</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($alpha as $trans): ?>
                        <tr>
                            <td><?php echo $trans->id_materi ?></td>
                            <td><?php echo $trans->id_admin ?></td>
                            <td><?php echo $trans->judul ?></td>
                            <td><?php echo $trans->id_matkul ?></td>
                            <td><?php echo $trans->kategori ?></td>
                            <td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            <a href="<?=base_url()?>dashboard_admin/editmateri" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></i></a></td>
                    <?php endforeach?>
                </tbody>
                </table>
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