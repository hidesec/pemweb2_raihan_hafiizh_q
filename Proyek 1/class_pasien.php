<?php
    require_once('class_bmipasien.php');
    class Pasien extends Bmipasien{
        public $id;
        public $kode;
        public $nama;
        public $tmp_lahir;
        public $tgl_lahir;
        public $email;
        public $gender;

        public function __construct($kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $tanggal){
            parent::__construct($tanggal);
            $this->kode = $kode;
            $this->nama = $nama;
            $this->tmp_lahir = $tmp_lahir;
            $this->tgl_lahir = $tgl_lahir;
            $this->email = $email;
            $this->gender = $gender;
        }
    }
?>