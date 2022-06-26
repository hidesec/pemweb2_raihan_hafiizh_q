<?php
class BMI{
    public $berat;
    public $tinggi;

    public function nilaiBMI($berat, $tinggi){
        $this->berat = $berat;
        $this->tinggi = $tinggi;

        $convertToMeter = ($this->tinggi / 100);

        return round($this->berat/pow($convertToMeter, 2), 1);
    }

    public function statusBMI($bmi){
        if($bmi < 18.5){
            return "Kekurangan berat badan";
        }else if($bmi >= 18.5 && $bmi <= 24.9){
            return "Normal (ideal)";
        }else if($bmi >= 25.0 && $bmi <= 29.9){
            return "Kelebihan berat badan";
        }else{
            return "Kegemukan (Obesitas)";
        }
    }
}
?>