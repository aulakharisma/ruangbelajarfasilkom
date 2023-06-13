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
            <form Action="<?php echo base_url() ?>Materi/add" method="POST">
                <div class="col-md-7 col-12">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul Materi/Tugas/Sumber Belajar</label>
                        <input type="text" class="form-control" name="judul" id="exampleFormControlInput1">
                    </div>
                    <!-- <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pilih Mata Kuliah</label>
                        <select class="form-select" aria-label="Default select example" name="id_matkul">
                            <?php foreach ($matkul as $key => $mk) : ?>
                                <option><?php $mk->id_matkul ?></option>
                            <?php endforeach ?>
                        </select>
                    </div> -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul Materi/Tugas/Sumber Belajar</label>
                        <input type="text" class="form-control" name="kategori" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="formFile" class="form-label">Pilih File</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Pilih Sampull</label>
                        <input class="form-control" type="file" id="formFile">
                    </div> -->
                    <div class="text-center d-grid gap-2">
                        <button class="btn btn-success rounded-0" type="submit">Add Data</button>
                    </div>
            </form>
        </div>
    </div>
    </div>

</main><!-- End #main -->