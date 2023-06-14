<!-- TABLE USERS -->
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3><b>Kategori Mata Kuliah</b></h3>
                <a href="<?=base_url()?>dashboard_admin/addmatkul" class="btn btn-primary">Tambah Matkul</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama Matkul</th>
                    <th>Deskripsi</th>
                    <th>Program Studi</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($alpha as $trans): ?>
                        <tr>
                            <td><?php echo $trans->nama_matkul ?></td>
                            <td><?php echo $trans->desk_matkul ?></td>
                            <td><?php echo $trans->prodi ?></td>
                            <td><a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            <a href="<?=base_url()?>dashboard_admin/editmateri" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></i></a></td>
                        </tr>                            
                    <?php endforeach?>
                  </tbody>
                </table>
                
              </div>
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