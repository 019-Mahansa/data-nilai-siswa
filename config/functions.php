<?php
require_once __DIR__ . "/data.php";


function  hitungRataRata($siswa){
    $size = 0;
    $temp = 0;  
    $sum = 0;

    $arr = [];

    foreach($siswa as $bagan1){

        $size = count($bagan1['nilai']);
        // echo "( size = ".$size.")" . " ";

        foreach($bagan1["nilai"] as $bagan2){

            $temp++;

            // echo $bagan2 . " ";

            $sum += $bagan2;

            if($temp >= $size){

                $average = $sum/$size;

                // echo "Average = ".$average;
                array_push($arr, $average);

                $sum *= 0;
                $temp *= 0;
                $average *= 0;

                break;

            }
        }
    };

    

    return($arr); 


}

function cekKelulusan($rataRata){
    if ($rataRata >= 80) {
        return "Lulus Sangat Baik";
    } elseif ($rataRata >= 75) {
        return "Lulus";
    }

    return "Tidak Lulus";
}


