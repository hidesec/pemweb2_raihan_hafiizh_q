<!DOCTYPE html>
<html lang="en">
<?php
    include_once('head.php');
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php
        include_once('preloader.php');
  ?>

  <?php
      include_once ('navbar.php');
  ?>

  <?php
      include_once ('sidebar.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Nilai Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Nilai Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form class="form-horizontal" method="POST" action="nilai_siswa.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-8">
                <select id="select" name="matkul" class="custom-select">
                    <option value="DDP">Dasar Dasar Pemrograman</option>
                    <option value="BDI">Basis Data I</option>
                    <option value="WEB1">Pemrograman Web</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-8">
                <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-8">
                <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                <div class="col-8">
                <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                </div>
            </div>
        </form>
        <?php
            require_once ('libfungsi.php');

            $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
            $nama_siswa = isset($_POST['nama']) ? $_POST['nama'] : '';
            $mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
            $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
            $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
            $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

            if(!empty($proses)){
                echo 'Proses: '.$proses;
                echo '<br/>Nama: '.$nama_siswa;
                echo '<br/>Mata Kuliah: '.$mata_kuliah;
                echo '<br/>Nilai UTS: '.$nilai_uts;
                echo '<br/>Nilai UAS: '.$nilai_uas;
                echo '<br/>Nilai Tugas Praktikum: '.$nilai_tugas;

                $persen_uts = (30 / 100) * $nilai_uts;
                $persen_uas = (35 / 100) * $nilai_uas;
                $persen_tugas = (35 / 100) * $nilai_tugas;
                $total_persen_kelulusan = $persen_uts + $persen_uas + $persen_tugas;

                $hasil_ujian = kelulusan($total_persen_kelulusan);
                echo '<br/>Kelulusan: <b>'.$hasil_ujian.'</b>';

                $grade = grade($total_persen_kelulusan);
                echo '<br/>Grade: <b>'.$grade.'</b>';

                $predikat = predikat($grade);
                echo '<br/>Predikat: <b>'.$predikat.'</b>';
            }
        ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include_once('footer.php')
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php
    include_once('javascript.php');
?>
</body>
</html>