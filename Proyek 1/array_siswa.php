<?php
    $ns1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78];
    $ns2 = ["id" => 2, "nim" => "01121", "uts" => 70, "uas" => 50, "tugas" => 68];
    $ns3 = ["id" => 3, "nim" => "01130", "uts" => 60, "uas" => 86, "tugas" => 70];
    $ns4 = ["id" => 4, "nim" => "01134", "uts" => 90, "uas" => 91, "tugas" => 82];
    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

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
            <h1 class="m-0">Daftar Nilai Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Nilai Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="table-responsive" id="sailorTableArea">
            <table id="sailorTable" class="table table-striped table-bordered" width="100%">
                <thead>
                    <tr>
                        <th>No</th><th>NIM</th><th>UTS</th>
                        <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
                    </tr>
                </thead>
            <tbody>
            <?php
            $nomor = 1;
            foreach ($ar_nilai as $ns) {
                echo "<tr><td>" . $nomor . "</td>";
                echo "<td>" . $ns["nim"] . "</td>";
                echo "<td>" . $ns["uts"] . "</td>";
                echo "<td>" . $ns["uas"] . "</td>";
                echo "<td>" . $ns["tugas"] . "</td>";
                $nilai_akhir = ($ns["uts"] + $ns["uas"] + $ns["tugas"]) / 3;
                echo "<td>" . number_format($nilai_akhir, 2, ",", ".") . "</td>";
                echo "<tr/>";
                $nomor++;
            }
            ?>
            </tbody>
            </table>
        </div>
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
