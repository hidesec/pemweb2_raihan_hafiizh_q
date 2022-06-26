<?php
    require_once('class_bmi.php');
    class BMIPasien{
        public $id;
        public $bmi;
        public $tanggal;
        public $pasien;

        public function __construct($tanggal){
            $this->tanggal = $tanggal;
            $this->bmi = new BMI();
        }
    }
?>