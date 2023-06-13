<h3>Edit Data Matkul</h3>

<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

<form action="<?= base_url('matkul/saveDataMatkul') ?>" method="POST">
  
    <div class="form-group">
		<label for="plat">Nama Matkul</label>
		<input class="form-control <?php echo form_error('plat') ? 'is-invalid':'' ?>"
			type="text" name="nama_matkul" placeholder="Nama Matkul" />
		<div class="invalid-feedback">
			<?php echo form_error('nama_matkul') ?>
		</div>
	</div>

    <div class="form-group">
		<label for="plat">Prodi</label>
		<input class="form-control <?php echo form_error('prodi') ? 'is-invalid':'' ?>"
			type="text" name="prodi" placeholder="Nama Prodi" />
		<div class="invalid-feedback">
			<?php echo form_error('prodi') ?>
		</div>
	</div>

    <div class="form-group">
		<label for="status">Deskripsi</label>
		<input class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>"
			type="text" name="deskripsi" placeholder="Deskripsi" />
		<div class="invalid-feedback">
			<?php echo form_error('deskripsi') ?>
		</div>
	</div>

  
  <input class="btn btn-success" type="submit" name="btn" value="Save"/>
</form>