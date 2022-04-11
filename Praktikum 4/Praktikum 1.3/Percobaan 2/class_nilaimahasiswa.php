<?php
    class NilaiMahasiswa{
        var $matakuliah;
        var $nilai;
        var $nim;

        function __construct($matkul, $nilai, $nim)
        {
            $this->matakuliah = $matkul;
            $this->nilai = $nilai;
            $this->nim = $nim;
        }

        function grade()
        {
            return $this->nilai >= 0 && $this->nilai <= 35 ? "E" : ($this->nilai > 35 && $this->nilai <= 55 ? "D" : ($this->nilai > 55 && $this->nilai <= 69 ? "C" : ($this->nilai > 69 && $this->nilai <= 84 ? "B" : "A")));
        }

        function hasil()
        {
            return $this->nilai < 56 ? "TIDAK LULUS" : "LULUS";
        }
    }
?>