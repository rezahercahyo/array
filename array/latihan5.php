<?php
// array multidimensi
$mahasiswa = [
    ["Reza Hercahyo", 202157014, "Manajemen Informatika", "rezahercahyo80@gmail.com"],
    ["Akhmad Ikhsan Nizhami", 202157011, "Manajemen Informatika", "akhmadikhsannizhami@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM :<?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>