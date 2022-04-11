<?php
    function kelulusan($_nilai){
        if($_nilai){
            return 'LULUS';
        }else{
            return 'TIDAK LULUS';
        }
    }

    function grade($_nilai){
        if($_nilai <= 35){
            return 'E';
        }else if($_nilai <= 55){
            return 'D';
        }else if($_nilai <= 69){
            return 'C';
        }else if($_nilai <= 84){
            return 'B';
        }else if($_nilai <= 100){
            return 'A';
        }else{
            return 'I';
        }
    }

    function predikat($_grade){
        switch ($_grade){
            case 'E':
                return 'Sangat Kurang';
                break;
            case 'D':
                return 'Kurang';
                break;
            case 'C':
                return 'Cukup';
                break;
            case 'B':
                return 'Memuaskan';
                break;
            case 'A':
                return 'Sangat Memuaskan';
                break;
            case 'I':
                return 'Tidak Ada';
                break;
        }
    }
?>