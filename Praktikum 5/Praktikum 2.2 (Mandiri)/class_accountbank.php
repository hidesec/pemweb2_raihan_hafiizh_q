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

    public function cetak_tabungan($customer, $cetak_tabungan_customer, $only_cetak = true, $is_tf = false, $tf = 0, $is_depo = false, $depo = 0, $tf_from = '', $tf_to = '', $is_wd = false, $wd = 0)
    {
        if($is_tf){
            echo "<b>".$tf_from." transfer Rp. ".number_format($tf,0,',','.')." ke ".$tf_to."</b>";
            echo "<hr>";
        }else if($is_depo){
            echo "<b>".$customer." Nabung sebesar Rp. ".number_format($depo,0,',','.').",-</b>";
            echo "<hr>";
            echo "<b>Nama Customer:</b> ".$customer;
            $cetak_tabungan_customer->cetak();
        }else if($only_cetak){
            echo "<b>Nama Customer:</b> ".$customer;
            $cetak_tabungan_customer->cetak();
        }else if($is_wd){
            echo "<b>".$customer." tarik uang Rp. ".number_format($wd,0,',','.')."</b>";
            echo "<hr>";
            echo "<b>Nama Customer:</b> ".$customer;
            $cetak_tabungan_customer->cetak();
        }
    }
}
echo "<b>Daftar Account</b>";
echo "<hr>";
$customer1 = new AccountBank("C001", 6000000, "Budi");
$customer1->cetak_tabungan($customer1->customer, $customer1);
$customer2 = new AccountBank("C002", 5350000, "Ahmad");
echo "<br><br>";
$customer2->cetak_tabungan($customer2->customer, $customer2);
$customer3 = new AccountBank("C003", 2500000, "Kurniawan");
echo "<br><br>";
$customer3->cetak_tabungan($customer3->customer, $customer3);
echo "<br><br><br>";

$customer2->deposit(1000000);
$customer2->cetak_tabungan($customer2->customer, $customer2, false, false, 0, true, 1000000);
echo "<br><br><br>";

$customer2->cetak_tabungan("","",false,true,1500000,false,0, $customer2->customer, $customer3->customer);
$customer2->customer_transfer($customer3, 1500000);
$customer2->cetak_tabungan($customer2->customer, $customer2);
echo "<br><br>";
$customer3->cetak_tabungan($customer3->customer, $customer3);
echo "<br><br><br>";

$customer2->cetak_tabungan("","",false,true,500000,false,0, $customer2->customer, $customer1->customer);
$customer2->customer_transfer($customer1, 500000);
$customer2->cetak_tabungan($customer2->customer, $customer2);
echo "<br><br>";
$customer1->cetak_tabungan($customer1->customer, $customer1);
echo "<br><br><br>";

$customer1->withdraw(2500000);
$customer1->cetak_tabungan($customer1->customer,$customer1,false,false,0,false,0, "", "", true, 2500000);
echo "<br><br><br>";
?>