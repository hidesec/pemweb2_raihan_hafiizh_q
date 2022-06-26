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
            <h1 class="m-0">Menghitung Persegi Panjang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menghitung Persegi Panjang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php
            require_once "class_PersegiPanjang.php";
            $PersegiPanjang1 = new PersegiPanjang( 10,5 );
            $PersegiPanjang2 = new PersegiPanjang( 8, 5 );
            echo "<br/>Luas Persegi Panjang I ".$PersegiPanjang1->getLuas();
            echo "<br>Luas Persegi Panjang II ".$PersegiPanjang2->getLuas();
            echo "<br>Keliling Persegi Panjang I ".$PersegiPanjang1->getKeliling();
            echo "<br>Keliling Persegi Panjang II ".$PersegiPanjang2->getKeliling();
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
