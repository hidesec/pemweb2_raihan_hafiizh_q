<!DOCTYPE html>
<html lang="en">
<?php
    include_once('head.php');
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


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
            require_once "class_account.php";

            class AccountBank extends Account{
                public $customer;

                function __construct($nomor, $saldo, $customer)
                {
                    parent::__construct($nomor, $saldo);
                    $this->customer = $customer;
                }

                public function customer_transfer($acc_tujuan, $saldo)
                {
                    $acc_tujuan->deposit($saldo);
                    $this->withdraw($saldo);
                }
            }
            echo "<b>Daftar Account</b>";
            echo "<hr>";
            $customer1 = new AccountBank("C001", 6000000, "Budi");
            echo "<b>Nama Customer:</b> ".$customer1->customer;
            $customer1->cetak();
            $customer2 = new AccountBank("C002", 5350000, "Ahmad");
            echo "<br><br>";
            echo "<b>Nama Customer:</b> ".$customer2->customer;
            $customer2->cetak();
            $customer3 = new AccountBank("C003", 2500000, "Kurniawan");
            echo "<br><br>";
            echo "<b>Nama Customer:</b> ".$customer3->customer;
            $customer3->cetak();
            echo "<br><br><br>";

            echo "<b>Ahmad Nabung sebesar Rp. 1.000.000,-</b>";
            echo "<hr>";
            $customer2->deposit(1000000);
            echo "<b>Nama Customer:</b> ".$customer2->customer;
            $customer2->cetak();
            echo "<br><br><br>";

            echo "<b>Ahmad transfer Rp. 1.500.000 ke kurniawan dan Rp. 500.000 ke Budi</b>";
            echo "<hr>";
            $customer2->customer_transfer($customer3, 1500000);
            echo "<b>Nama Customer:</b> ".$customer2->customer;
            $customer2->cetak();
            echo "<br><br>";
            echo "<b>Nama Customer:</b> ".$customer3->customer;
            $customer3->cetak();
            echo "<br><br>";
            $customer2->customer_transfer($customer1, 500000);
            echo "<b>Nama Customer:</b> ".$customer2->customer;
            $customer2->cetak();
            echo "<br><br>";
            echo "<b>Nama Customer:</b> ".$customer1->customer;
            $customer1->cetak();
            echo "<br><br><br>";

            echo "<b>Budi tarik uang 2.500.000</b>";
            echo "<hr>";
            $customer1->withdraw(2500000);
            echo "<b>Nama Customer:</b> ".$customer1->customer;
            $customer1->cetak();
            echo "<br><br><br>";
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