<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container py-4">
            <h2>Halo Aula Kharismah !</h2>
            <p>Yuk, unggah sumber belajarmu! <br> Bantu warga Fasilkom yang lain dalam belajar supaya bisa jago kayak kamu</p>
        </div>
    </div><!-- End Breadcrumbs -->

    <div class="container my-5">
        <h4 class="my-3"><b>Edit Materi/Tugas</b></h4>
        <div class="row">
            <form action="<?php echo base_url() ?>Materi/update" method="POST" enctype="multipart/form-data">
                <?php foreach ($materi as $mtr) : ?>
                    <div class="col-md-7 col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Judul Materi/Tugas/Sumber Belajar</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="<?= $mtr->judul; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mata Kuliah</label>
                            <select class="form-select" aria-label="Default select example" name="id_matkul">
                                <?php foreach ($matkul as $key => $mk) : ?>
                                    <option value="<?= $mk->id_matkul ?>"> <?= $mk->nama_matkul ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                            <select class="form-select" aria-label="Default select example" name="kategori">
                                <?php foreach ($enum_values as $enum) : ?>
                                    <option value="<?php echo $enum; ?>"><?php echo $enum; ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="desk_materi" value="<?= $mtr->desk_materi; ?>">
                        </div>

                        <!-- <div class="mb-3">
                            <label for="formFile" class="form-label">Pilih File</label>
                            <input class="form-control" type="file" id="formFile">
                        </div> -->

                        <div class="text-center d-grid gap-2">
                            <button class="btn btn-success rounded-0" type="submit">Add Data</button>
                        </div>
                    <?php endforeach; ?>
            </form>
        </div>
    </div>
    </div>

</main><!-- End #main -->