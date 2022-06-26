<div class="col-md-12">
	<h3>
		Edit Mahasiswa
	</h3>
	<br>
	<?php echo form_open('mahasiswa/mahasiswa_edit/'.$list_mhs[0]["NIM"]); ?>
<!--	  <div class="form-group row">-->
<!--		<label for="nim" class="col-4 col-form-label">NIM</label>-->
<!--		<div class="col-8">-->
<!--		  <div class="input-group">-->
<!--			<div class="input-group-prepend">-->
<!--			  <div class="input-group-text">-->
<!--				<i class="fa fa-500px"></i>-->
<!--			  </div>-->
<!--			</div>-->
<!--			<input id="nim" name="nim" type="text" class="form-control" value="--><?//=$list_mhs[0]["NIM"]?><!--">-->
<!--		  </div>-->
<!--		</div>-->
<!--	  </div>-->
	  <div class="form-group row">
		<label for="nama_mahasiswa" class="col-4 col-form-label">Nama Mahasiswa</label>
		<div class="col-8">
		  <div class="input-group">
			<div class="input-group-prepend">
			  <div class="input-group-text">
				<i class="fa fa-address-book"></i>
			  </div>
			</div>
			<input id="nama_mahasiswa" name="nama_mahasiswa" type="text" class="form-control" value="<?=$list_mhs[0]['NAMA_MHS']?>">
		  </div>
		</div>
	  </div>
	  <div class="form-group row">
		<label class="col-4">Jenis Kelamin</label>
		<div class="col-8">
		  <div class="custom-control custom-radio custom-control-inline">
			<input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="L" <?=$list_mhs[0]["GENDER"] === 'L' ? 'checked' : ''?>>
			<label for="jenis_kelamin_0" class="custom-control-label">L</label>
		  </div>
		  <div class="custom-control custom-radio custom-control-inline">
			<input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="P" <?=$list_mhs[0]["GENDER"] === 'P' ? 'checked' : ''?>>
			<label for="jenis_kelamin_1" class="custom-control-label">P</label>
		  </div>
		</div>
	  </div>
	  <div class="form-group row">
		<label for="tanggal_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
		<div class="col-8">
		  <div class="input-group">
			<div class="input-group-prepend">
			  <div class="input-group-text">
				<i class="fa fa-adjust"></i>
			  </div>
			</div>
			<input id="tanggal_lahir" name="tanggal_lahir" type="text" class="form-control" value="<?=$list_mhs[0]['TGL_LAHIR']?>">
		  </div>
		</div>
	  </div>
	  <div class="form-group row">
		<label for="tempat_lahir" class="col-4 col-form-label">Tempat Lahir</label>
		<div class="col-8">
		  <div class="input-group">
			<div class="input-group-prepend">
			  <div class="input-group-text">
				<i class="fa fa-anchor"></i>
			  </div>
			</div>
			<input id="tempat_lahir" name="tempat_lahir" type="text" class="form-control" value="<?=$list_mhs[0]['TMP_LAHIR']?>">
		  </div>
		</div>
	  </div>
	  <div class="form-group row">
		<label for="program_studi" class="col-4 col-form-label">Program Studi</label>
		<div class="col-8">
		  <select id="program_studi" name="program_studi" class="custom-select">
			<?php
				foreach($list_prodi as $prodi){
			?>
				<option value="<?=$prodi['kode']?>" <?=$list_mhs[0]["NAMA_PRODI"] === $prodi['nama'] ? 'selected' : ''?>><?=$prodi['nama']?></option>
			<?php
				}
			?>
		  </select>
		</div>
	  </div>
	  <div class="form-group row">
		<label for="ipk" class="col-4 col-form-label">IPK</label>
		<div class="col-8">
		  <div class="input-group">
			<div class="input-group-prepend">
			  <div class="input-group-text">
				<i class="fa fa-telegram"></i>
			  </div>
			</div>
			<input id="ipk" name="ipk" type="text" class="form-control" value="<?=$list_mhs[0]['IPK']?>">
		  </div>
		</div>
	  </div>
	  <div class="form-group row">
		<div class="offset-4 col-8">
		  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
		  <a href="<?=site_url('mahasiswa')?>" class="btn btn-danger">Cancel</a>
		</div>
	  </div>
	</form>
</div>
