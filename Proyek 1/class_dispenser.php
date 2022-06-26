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
            class Dispenser{
                protected $volume;
                protected $hargaSegelas;
                private $volumeGelas;
                public $namaMinuman;

                public function isi($vol)
                {
                    $this->volume = $vol;
                }

                public function isi_ulang($vol)
                {
                    $this->volume = $this->volume + $vol;
                }

                public function harga($harga)
                {
                    $this->hargaSegelas = $harga;

                    echo "<br>Harga Segelas Rp.".$this->hargaSegelas.",-";
                }

                public function beli($nama, $vol)
                {
                    $this->namaMinuman = $nama;
                    $this->volumeGelas = $vol;
                    $this->volume = $this->volume - $this->volumeGelas;
                    echo "<br>Nama Minuman: ".$this->namaMinuman;
                    echo "<br>Volume Minuman: ".$this->volumeGelas;
                }

                public function isi_dispenser(){
                    echo "Isi Dispenser ".$this->volume."ml";
                }
            }

            $dispenser = new Dispenser();
            echo "<br><b>ISI AWAL DISPENSER 250ML</b><br>";
            $dispenser->isi(250);
            $dispenser->isi_dispenser();
            echo "<br><br><b>BELI MINUMAN</b>";
            $dispenser->beli("AQUA", 100);
            $dispenser->harga(5000);
            echo "<br><br><b>ISI DISPENSER SETELAH DIBELI</b><br>";
            $dispenser->isi_dispenser();
            echo "<br><br><b>DISPENSER DIISI ULANG 200ML</b><br>";
            $dispenser->isi_ulang(200);
            $dispenser->isi_dispenser();
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