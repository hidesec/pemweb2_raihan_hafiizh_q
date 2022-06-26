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
            <h1 class="m-0">Body Mass Index</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Body Mass Index</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Input Form Pasien</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="index.php" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Kode</label>
                <input name="kode" type="text" maxlength="6" class="form-control" id="kode" placeholder="Enter Kode">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="text" maxlength="40" class="form-control" id="nama" placeholder="Enter Nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tempat Lahir</label>
                <input name="tmp_lahir" type="text" maxlength="30" class="form-control" id="tempat_lahir" placeholder="Enter Tempat Lahir">
              </div>
              <!-- Date -->
              <div class="form-group">
                <label>Tanggal Lahir</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                      <input name="tgl_lahir" type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
              </div>
              <!-- Date and time -->
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" maxlength="40" class="form-control" id="email" placeholder="Enter Email">
              </div>
              <!-- radio -->
              <label for="exampleInputEmail1">Gender</label>
              <div class="form-group clearfix">
                <div class="icheck-primary d-inline">
                  <input type="radio" id="radioPrimary3" name="gender" value="L">
                  <label for="radioPrimary3">
                    Laki-Laki
                  </label>
                </div>
                <div class="icheck-primary d-inline">
                  <input type="radio" id="radioPrimary3" name="gender" value="P">
                  <label for="radioPrimary3">
                    Perempuan
                  </label>
                </div>
              </div>
              <div class="form-group">
                <label>Berat Badan</label>

                <div class="input-group">
                  <input name="berat" type="number" class="form-control">

                  <div class="input-group-append">
                      <span class="input-group-text">kg</span>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Tinggi Badan</label>

                <div class="input-group">
                  <input name="tinggi" type="number" class="form-control">

                  <div class="input-group-append">
                      <span class="input-group-text">cm</span>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button name="aksi" value="true" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
        <!-- /.card-header -->
        <div class="card card-primary">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Tanggal Periksa</th>
                <th>Kode Pasien</th>
                <th>Nama Pasien</th>
                <th>Gender</th>
                <th>Berat (kg)</th>
                <th>Tinggi (cm)</th>
                <th>Nilai BMI</th>
                <th>Status BMI</th>
              </tr>
            </thead>
            <tbody>
              <?php
                require_once('class_pasien.php');

                $pasien1 = new Pasien('P001', 'Ahmad', 'Jakarta', '01-04-1999', 'ahmad@email.com', 'L', '2022-01-10');
                $bmi1 = $pasien1->bmi->nilaiBMI(69.8, 169);

                $pasien2 = new Pasien('P002', 'Rina', 'Jakarta', '01-04-1999', 'rina@email.com', 'P', '2022-01-10');
                $bmi2 = $pasien2->bmi->nilaiBMI(55.3, 165);

                $pasien3 = new Pasien('P003', 'Lutfi', 'Jakarta', '01-04-1999', 'lutfi@email.com', 'L', '2022-01-11');
                $bmi3 = $pasien3->bmi->nilaiBMI(45.2, 171);

                $pasiens = array($pasien1, $pasien2, $pasien3);
                $bmis = array($bmi1, $bmi2, $bmi3);

                $no = 1;
                if(!empty($_POST['aksi'])) {
                    $kode = $_POST['kode'];
                    $nama = $_POST['nama'];
                    $tmp_lahir = $_POST['tmp_lahir'];
                    $tgl_lahir = $_POST['tgl_lahir'];
                    $email = $_POST['email'];
                    $gender = $_POST['gender'];
                    $berat = $_POST['berat'];
                    $tinggi = $_POST['tinggi'];

                    $pasien = new Pasien($kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, date("Y-m-d"));
                    $bmi = $pasien->bmi->nilaiBMI($berat, $tinggi);

                    array_push($pasiens, $pasien);
                    array_push($bmis, $bmi);
                }

                foreach($pasiens as $key => $value){
                    echo '<tr>';
                    echo '<td>'.$no++.'</td>';
                    echo '<td>'.$value->tanggal.'</td>';
                    echo '<td>'.$value->kode.'</td>';
                    echo '<td>'.$value->nama.'</td>';
                    echo '<td>'.$value->gender.'</td>';
                    echo '<td>'.$value->bmi->berat.'</td>';
                    echo '<td>'.$value->bmi->tinggi.'</td>';
                    echo '<td>'.$bmis[$key].'</td>';
                    echo '<td>'.$value->bmi->statusBMI($bmis[$key]).'</td>';
                    echo '</tr>';
                }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
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