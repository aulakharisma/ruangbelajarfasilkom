<!-- TABLE MATERI -->
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3><b>Materi yang Terunggah</b></h3>
                <a href="<?=base_url()?>dashboard_admin/addmateri" class="btn btn-primary">Tambah Materi</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="responsive-table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>id materi</th>
                    <th>id admin</th>
                    <th>id user</th>
                    <th>judul</th>
                    <th>id matkul</th>
                    <th>Dokumen</th>
                    <th>kategori</th>
                    <th>deskripsi</th>
                    <th>cover</th>
                    <th>created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($alpha as $trans): ?>
                        <tr>
                            <td><?php echo $trans->id_materi ?></td>
                            <td><?php echo $trans->id_admin ?></td>
                            <td><?php echo $trans->id_user ?></td>
                            <td><?php echo $trans->judul ?></td>
                            <td><?php echo $trans->id_matkul ?></td>
                            <td><?php echo $trans->dok_materi ?></td>
                            <td><?php echo $trans->kategori ?></td>
                            <td><?php echo $trans->desk_materi ?></td>
                            <td><?php echo $trans->cover ?></td>
                            <td><?php echo $trans->CREATED_MTR ?></td>
                            <td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            <a href="<?=base_url()?>dashboard_admin/editmateri" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></i></a></td>
                        </tr>
                    <?php endforeach?>
                </tbody>
                  </tbody>
                </table>
              </div>



              <!-- MODAL -->
              <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>`






              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->