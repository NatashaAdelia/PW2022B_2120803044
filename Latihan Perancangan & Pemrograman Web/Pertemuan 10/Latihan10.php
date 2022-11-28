<?php

$kota = [
  "Indonesia" => "Jakarta",
  "Singapura" => "Singapura",
  "Malaysia" => "Kuala Lumpur",
  "Brunei Darussalam" => "Seri Begawan",
  "Thailand" => "Bangkok",
  "Laos" => "Vientiane",
  "Filipina" => "Manila",
  "Myanmar" => "Naypyidaw"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Array Associative</title>
</head>

<body>
  <h1>Daftar Negara ASEAN dan Ibukota</h1>
  <?php foreach ($kota as $nrp => $nama) : ?>
    <li><?php echo "$nrp : $nama" ?></li>
  <?php endforeach ?>


</body>

</html>