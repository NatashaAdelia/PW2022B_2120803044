<?php

require 'Function.php';

if (isset($_POST["submit"])) {

  //var_dump($_POST);
  //var_dump($_FILES);
  //die;

  if (tambahsalin($_POST) > 0) {
    echo "
        <script>
            alert ('Data Berhasil Ditambahkan!');
            document.location.href = 'Latihan5.php';
        </script>";
  } else {
    echo "
      <script>
          alert ('Data Gagal Ditambahkan!');
          document.location.href = 'Latihan5.php';
      </script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h1>Tambah Data Mahasiswa</h1>

  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" required>
      </li>
      <br>
      <li>
        <label for="nim">NIM : </label>
        <input type="text" name="nim" id="nim" required>
      </li>
      <br>
      <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email" required>
      </li>
      <br>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan">
      </li>
      <br>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="file" name="gambar" id="gambar">
      </li>
      <br>
      <li>
        <button type="submit" name="submit">Tambah Data!</button>
      </li>
    </ul>
  </form>

</body>

</html>