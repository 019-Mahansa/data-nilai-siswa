<?php
require_once("./config/data.php");
require_once("./config/functions.php");

$rataRata = hitungRataRata($data_siswa);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Siswa</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <?php include './templates/header.php' ?>
    <?php include './templates/navbar.php' ?>
    <h1>Data Nilai Siswa</h1>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Rata-rata</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_siswa as $index => $value): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $value['nama'] ?></td>
                <td>
                    <?= implode(', ', $value['nilai']) ?>
                </td>
                <td><?= $rataRata[$index] == (int)$rataRata[$index] ? $rataRata[$index] : number_format($rataRata[$index], 2) ?></td>
                <td>
                    <?= cekKelulusan($rataRata[$index]) ?>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <?php include './templates/footer.php' ?>
    
</body>
</html>