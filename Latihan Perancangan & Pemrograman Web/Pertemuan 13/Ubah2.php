<?php

require 'Function.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if (isset($_POST["submit"])) {


  if (ubah($_POST) > 0) {
    echo "
        <script>
            alert ('Data Berhasil Diubah!') ;
            document.location.href = 'Latihan3.php';
        </script>
    ";
  } else {
    echo "
      <script>
          alert ('Data Gagal Diubah!') ;
          document.location.href = 'Latihan3.php';
      </script>
    ";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h1>Ubah Data Mahasiswa</h1>

  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <ul>
      <li>
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
      </li>
      <br>
      <li>
        <label for="nim">NIM : </label>
        <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
      </li>
      <br>
      <li>
        <label for="email">Email : </label>
        <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
      </li>
      <br>
      <li>
        <label for="jurusan">Jurusan : </label>
        <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
      </li>
      <br>
      <li>
        <label for="gambar">Gambar : </label>
        <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
      </li>
      <br>
      <li>
        <button type="submit" name="submit">Ubah Data!</button>
      </li>
    </ul>
  </form>

</body>

</html>