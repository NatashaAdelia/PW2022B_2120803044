<?php

$mahasiswa = [
  ["Joni", "2183A", "Sistem Informasi", "joni@gmail.com"],
  ["Budi", "2183B", "Teknik Informatika", "budi@gmail.com"],
  ["Angga", "2183C", "Ilmu Komputer", "angga@gmail.com"],
  ["Rio", "2183D", "Sistem Komputer", "rio@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Latihan 3</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li><?= $mhs[0]; ?></li>
      <li><?= $mhs[1]; ?></li>
      <li><?= $mhs[2]; ?></li>
      <li><?= $mhs[3]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>