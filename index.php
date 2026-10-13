<?php

$data_siswa = [
    ["nama" => "Mahansa", "nilai" => [89,90,83]],
    ["nama" => "Aldien", "nilai" => [88,99,20]],
    ["nama" => "Dimas", "nilai" => [97,95,88]],
];

foreach ($data_siswa as $value) {
    echo "Nama : ". $value["nama"] . "<br>";
    echo "Nilai: ";

    foreach($value["nilai"] as $score){
        echo $score . " ";
    }
    echo "<br></br>";
};

function hitungRataRata($siswa){
    $poll = 0;
    $isi_array = count($siswa);

    foreach ($siswa as $value){
        $poll += $value["nilai"];
    }

    $average = $poll / $isi_array;
    
    return $average;
    
};

function cekKelulusan($average){
    $predikat = "";

    if($average >= 80){
        $predikat = "Lulus Sangat Baik";
    }elseif($average >= 75){
        $predikat = "Lulus";
    }else{
        $predikat = "Tidak Lulus";
    }

    return $predikat;
};

$hasil_average = hitungRataRata($data_siswa);

cekKelulusan($hasil_average)

?>