<?php
class Account{
    private $nomor;
    private $saldo;

    function __construct($no, $saldo)
    {
        $this->nomor = $no;
        $this->saldo = $saldo;
    }

    function deposit($deposit)
    {
        $this->saldo = $this->saldo + $deposit;
    }

    function withdraw($withdraw)
    {
        $this->saldo = $this->saldo - $withdraw;
    }

    function cetak()
    {
        echo "<br>Nomor: ".$this->nomor;
        echo "<br>Saldo: Rp.".$this->saldo.',-';
    }
}
?>