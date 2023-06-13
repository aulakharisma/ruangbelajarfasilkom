<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container py-4">
        <h2>Halo Aula Kharismah !</h2>
        <p>Yuk, unggah sumber belajarmu! <br> Bantu warga Fasilkom yang lain dalam belajar supaya bisa jago kayak kamu</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <div class="container my-5">
        <h4 class="my-3"><b>Unggah Materi/Tugas</b></h4>
        <div class="row">
                <form>
                <div class="col-md-7 col-12">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul Materi/Tugas/Sumber Belajar</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul Materi/Tugas/Sumber Belajar</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>

                    <div class="form-group">
                        <label for="id_matkul">Nama Matkul</label>
                        <select name="id_matkul" class="form-control">
                            <option value="">----- PILIH MATKUL -----</option>
                            <?php foreach ($matkul as $mk => $value) { ?>
                                <option value="<?= $value->id ?>"> <?= $value->nama_matkul ?> </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Pilih File</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Pilih Sampull</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <a href="#" class="btn btn-success">Submit</a>
                </form>
                </div>
            </div>
        </div>

  </main><!-- End #main -->