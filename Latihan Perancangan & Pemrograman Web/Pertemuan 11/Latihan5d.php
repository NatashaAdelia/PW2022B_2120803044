<!DOCTYPE html>
<html lang="en">

<head>
  <title>Perulangan Angka</title>
</head>

<body>
  <h1>PERULANGAN ANGKA DI PHP</h1>
  <form action="" method="POST">
    Masukkan Angka <input type="text" name="angka"><input type="submit" name="submit" value="submit">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $bin = $_POST['angka'];
    for ($i = $bin; $i >= 1; $i--) {
      for ($j = 1; $j <= $i; $j++) {
        echo "$j";
      }
      echo "<br>";
    }
  }
  ?>

</body>

</html>