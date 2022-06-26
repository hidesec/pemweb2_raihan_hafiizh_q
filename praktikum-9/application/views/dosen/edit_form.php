<div class="col-md-12">
	<h3>
		Daftar Dosen
	</h3>
	<br>
	<?php echo form_open('dosen/dosen_edit/'.$list_dsn[0]["NIDN"]); ?>
<!--	  <div class="form-group row">-->
<!--		<label for="nidn" class="col-4 col-form-label">NIDN</label>-->
<!--		<div class="col-8">-->
<!--		  <div class="input-group">-->
<!--			<div class="input-group-prepend">-->
<!--			  <div class="input-group-text">-->
<!--				<i class="fa fa-500px"></i>-->
<!--			  </div>-->
<!--			</div>-->
<!--			<input id="nidn" name="nidn" type="text" class="form-control">-->
<!--		  </div>-->
<!--		</div>-->
<!--	  </div>-->
	  <div class="form-group row">
		<label for="nama_dosen" class="col-4 col-form-label">Nama Dosen</label>
		<div class="col-8">
		  <div class="input-group">
			<div class="input-group-prepend">
			  <div class="input-group-text">
				<i class="fa fa-address-book"></i>
			  </div>
			</div>
			<input id="nama_dosen" name="nama_dosen" type="text" class="form-control" value="<?=$list_dsn[0]["NAMA_DSN"]?>">
		  </div>
		</div>
	  </div>
	  <div class="form-group row">
		<label class="col-4">Jenis Kelamin</label>
		<div class="col-8">
		  <div class="custom-control custom-radio custom-control-inline">
			<input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="L" <?=$list_dsn[0]["GENDER"] === 'L' ? 'checked' : ''?>>
			<label for="jenis_kelamin_0" class="custom-control-label">L</label>
		  </div>
		  <div class="custom-control custom-radio custom-control-inline">
			<input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="P" <?=$list_dsn[0]["GENDER"] === 'P' ? 'checked' : ''?>>
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
			<input id="tanggal_lahir" name="tanggal_lahir" type="text" class="form-control" value="<?=$list_dsn[0]["TGL_LAHIR"]?>">
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
			<input id="tempat_lahir" name="tempat_lahir" type="text" class="form-control" value="<?=$list_dsn[0]["TMP_LAHIR"]?>">
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
				<option value="<?=$prodi['kode']?>" <?=$list_dsn[0]["NAMA_PRODI"] === $prodi['nama'] ? 'selected' : ''?>><?=$prodi['nama']?></option>
			<?php
				}
			?>
		  </select>
		</div>
	  </div>
	  <div class="form-group row">
		<label for="pendidikan_terakhir" class="col-4 col-form-label">Pendidikan Terakhir</label>
		<div class="col-8">
		  <div class="input-group">
			<div class="input-group-prepend">
			  <div class="input-group-text">
				<i class="fa fa-telegram"></i>
			  </div>
			</div>
			<input id="pendidikan_akhir" name="pendidikan_akhir" type="text" class="form-control" value="<?=$list_dsn[0]["PENDIDIKAN_AKHIR"]?>">
		  </div>
		</div>
	  </div>
	  <div class="form-group row">
		<div class="offset-4 col-8">
		  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
		  <a href="<?=site_url('dosen')?>" class="btn btn-danger">Cancel</a>
		</div>
	  </div>
	</form>
</div>
