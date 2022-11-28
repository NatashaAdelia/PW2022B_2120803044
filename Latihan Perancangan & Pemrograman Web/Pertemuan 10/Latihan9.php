<?php

$mahasiswa =
  [
    [
      "Nama" => "Joni",
      "NIM" => "2183A",
      "Jurusan" => "Sistem Informasi",
      "Email" => "joni@gmail.com"
    ],
    [
      "Nama" => "Budi",
      "NIM" => "2183B",
      "Jurusan" => "Teknik Informatika",
      "Email" => "budi@gmail.com"
    ]
  ];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Latihan 9</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>Nama :<?= $mhs["Nama"]; ?></li>
      <li>NIM :<?= $mhs["NIM"]; ?></li>
      <li>Jurusan :<?= $mhs["Jurusan"]; ?></li>
      <li>Email :<?= $mhs["Email"]; ?></li>
    </ul>
  <?php endforeach; ?>

</body>

</html>