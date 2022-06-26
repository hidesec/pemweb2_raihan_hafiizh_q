<div class="col-md-12">
	<h3>
		Daftar Mahasiswa
	</h3>
	<br>
	<?php echo form_open('mahasiswa/mahasiswa_kirim'); ?>
	  <div class="form-group row">
		<label for="nim" class="col-4 col-form-label">NIM</label>
		<div class="col-8">
		  <div class="input-group">
			<div class="input-group-prepend">
			  <div class="input-group-text">
				<i class="fa fa-500px"></i>
			  </div>
			</div>
			<input id="nim" name="nim" type="text" class="form-control">
		  </div>
		</div>
	  </div>
	  <div class="form-group row">
		<label for="nama_mahasiswa" class="col-4 col-form-label">Nama Mahasiswa</label>
		<div class="col-8">
		  <div class="input-group">
			<div class="input-group-prepend">
			  <div class="input-group-text">
				<i class="fa fa-address-book"></i>
			  </div>
			</div>
			<input id="nama_mahasiswa" name="nama_mahasiswa" type="text" class="form-control">
		  </div>
		</div>
	  </div>
	  <div class="form-group row">
		<label class="col-4">Jenis Kelamin</label>
		<div class="col-8">
		  <div class="custom-control custom-radio custom-control-inline">
			<input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="L">
			<label for="jenis_kelamin_0" class="custom-control-label">L</label>
		  </div>
		  <div class="custom-control custom-radio custom-control-inline">
			<input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="P">
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
			<input id="tanggal_lahir" name="tanggal_lahir" type="text" class="form-control">
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
			<input id="tempat_lahir" name="tempat_lahir" type="text" class="form-control">
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
				<option value="<?=$prodi['kode']?>"><?=$prodi['nama']?></option>
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
			<input id="ipk" name="ipk" type="text" class="form-control">
		  </div>
		</div>
	  </div>
	  <div class="form-group row">
		<div class="offset-4 col-8">
		  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
		</div>
	  </div>
	</form>
	<br>
	<table class="table">
		<thead>
			<tr>
				<th>#</th><th>NIM</th><th>Nama</th><th>Gender</th>
				<th>IPK</th>
				<th>Predikat</th>
				<th>Prodi</th><th>Kaprodi</th><th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$nomor=1;
				foreach($list_mhs as $mhs){
			?>
				<tr>
				<td><?=$nomor?></td>
				<td><?=$mhs['NIM']?></td>
				<td><?=$mhs['NAMA_MHS']?></td>
				<td><?=$mhs['GENDER']?></td>
				<td><?=$mhs['IPK']?></td>
				<td><?=($mhs['IPK'] >= 3.75) ? "Cumlaude" : "Baik"?></td>
				<td><?=$mhs['NAMA_PRODI']?></td>
				<td><?=$mhs['KAPRODI']?></td>
				<td><a href="<?=site_url('mahasiswa/'.$mhs["NIM"])?>">edit</a>  |  <a href="<?=site_url('mahasiswa/hapus/'.$mhs["NIM"])?>">hapus</a></td>
				</tr>
			<?php
					$nomor++;
				}
			?>
		</tbody>
	</table>
</div>
