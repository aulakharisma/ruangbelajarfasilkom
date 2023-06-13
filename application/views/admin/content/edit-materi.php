<h3>Edit Materi</h3>

<form action="<?= base_url('matkul/saveDataMatkul') ?>" method="POST">
  
    <div class="container mb-5">
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
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pilih Mata Kuliah</label><br>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">UI UX</option>
                            <option value="2">Metode Penelitian</option>
                            <option value="3">Metode Numerik</option>
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


                    <input class="btn btn-primary" type="submit" name="btn" value="Update Materi"/>
                </form>
                </div>
            </div>
        </div>
        
</form>