<!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registrasi User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="http://localhost/ruangbelajarfasilkom/dashboard_admin/registrasi">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama_r">Nama</label>
                    <input type="text" class="form-control" id="nama_r" name="nama_r" placeholder="Masukkan Nama Panggilan">
                  </div>
                  <div class="form-group">
                    <label for="username_r">Username</label>
                    <input type="text" class="form-control" id="username_r" name="username_r" placeholder="Masukkan Username">
                  </div>
                  <div class="form-group">
                    <label for="password_r">Password</label>
                    <input type="password" class="form-control" id="password_r" name="password_r" placeholder="Masukkan Password">
                  </div>
                  <div class="form-group">
                    <label for="prodi_r">Prodi</label>
                    <div class="form-group">
                        <select type="int" class="form-control" id="prodi_r" name="prodi_r">
                          <option value="1">Informatika</option>
                          <option value="2">Sains Data</option>
                          <option value="3">Sistem Informasi</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="tipe_r">Tipe</label>
                    <div class="form-group">
                        <select type="int" class="form-control" id="tipe_r" name="tipe_r">
                          <option value="1">Admin</option>
                          <option value="2">User</option>
                        </select>
                      </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrasi</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->