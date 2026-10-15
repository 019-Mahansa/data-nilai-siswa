<?php

function  hitungRataRata($siswa){
    // $size = 0;
    // $temp = 0;  
    // $sum = 0;

    $arr = [];

    foreach($siswa as $bagan1){

        $size = count($bagan1['nilai']);
        $sum = array_sum($bagan1['nilai']);
        $arr[] = $sum/$size;

    };
    return $arr;

    




}

function cekKelulusan($rataRata){
    if ($rataRata >= 80) {
        return "Lulus Sangat Baik";
    } elseif ($rataRata >= 75) {
        return "Lulus";
    }

    return "Tidak Lulus";
}


