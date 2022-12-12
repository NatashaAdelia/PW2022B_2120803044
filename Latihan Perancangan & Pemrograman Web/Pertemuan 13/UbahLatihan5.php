<?php

require 'Function.php';

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if (isset($_POST["submit"])) {


  if (ubah($_POST) > 0) {
    echo "
        <script>
            alert ('Data Berhasil Diubah!') ;
            document.location.href = 'Latihan5.php';
        </script>
    ";
  } else {
    echo "
      <script>
          alert ('Data Gagal Diubah!') ;
          document.location.href = 'Latihan5.php';
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

  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
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
        <label for="gambar">Gambar : </label> <br>
        <img src="img/<?= $mhs['gambar']; ?>" width="50"> <br>
        <input type="file" name="gambar" id="gambar">
      </li>
      <br>
      <li>
        <button type="submit" name="submit">Ubah Data!</button>
      </li>
    </ul>
  </form>

</body>

</html>