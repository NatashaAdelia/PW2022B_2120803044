<?php

$mahasiswa = ["Natasha", "2183B", "Sistem Informasi", "natashaadelia10@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Latihan 1b</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li><?= $mhs; ?></li>
    <?php endforeach; ?>
  </ul>

</body>

</html>