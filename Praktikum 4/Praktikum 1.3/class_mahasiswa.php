<?php
    class Mahasiswa{
        var $nama;
        var $nim;
        var $thn_angkatan;
        var $prodi;
        var $ipk;

        function __construct($nim, $nama)
        {
            $this->nama = $nama;
            $this->nim = $nim;
        }

        function predikat_ipk()
        {
            if($this->ipk < 2.0){
                return "Cukup";
            }else if($this->ipk >= 2.0 && $this->ipk < 3.0){
                return "Baik";
            }else if($this->ipk >= 3.0 && $this->ipk < 3.75){
                return "Memuaskan";
            }else if($this->ipk >= 3.75 && $this->ipk <= 4){
                return "Cum Laude";
            }else{
                return "Tidak Lulus";
            }
        }
    }
?>