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
            <h1 class="m-0">Form Belanja</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Belanja</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv">
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                            <label for="produk_1" class="custom-control-label">KULKAS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci">
                            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </form>
                <?php
                    $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                    $nama_customer = isset($_POST['customer']) ? $_POST['customer'] : '';
                    $produk = isset($_POST['produk']) ? $_POST['produk'] : '';
                    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
                    if($produk === 'tv'){
                        $total_belanja = number_format((int)$jumlah * 4200000,0,',','.');
                    }else if($produk === 'kulkas'){
                        $total_belanja = number_format((int)$jumlah * 3100000,0,',','.');
                    }else{
                        $total_belanja = number_format((int)$jumlah * 3800000,0,',','.');
                    }
                         echo 'Proses: '.$proses;
                    echo '<br/>Nama Customer: '.$nama_customer;
                    echo '<br/>Produk Pilihan: '.$produk;
                    echo '<br/>Jumlah Beli: '.$jumlah;
                    echo '<br/>Total Belanja: Rp. '.$total_belanja.',-';
                ?>
            </div>
            <div class="col-sm">
                <table class="table">
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">Daftar Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">TV: 4.200.000</th>
                        </tr>
                        <tr>
                            <th scope="row">Kulkas: 3.100.000</th>
                        </tr>
                        <tr>
                            <th scope="row">Mesin Cuci: 3.800.000</th>
                        </tr>
                        <tr class="table-primary">
                            <th scope="row">Harga Dapat Berubah Setiap Saat</th>
                        </tr>
                    </tbody>
                </table>
            </div>
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