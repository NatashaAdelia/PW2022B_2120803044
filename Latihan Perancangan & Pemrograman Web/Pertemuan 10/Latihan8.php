<!DOCTYPE html>
<html lang="en">

<head>
  <title>Latihan 8</title>
  <style>
    .kotak {
      width: 40px;
      height: 40px;
      background-color: #BADA55;
      text-align: center;
      line-height: 40px;
      margin: 3px;
      float: left;
      transition: 1px;
    }

    .kotak1hover {
      transform: rotate(360deg);
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <?php
  $angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
  ?>
  <?php foreach ($angka as $a) : ?>
    <?php foreach ($a as $b) : ?>
      <div class="kotak"><?= $b; ?></div>
    <?php endforeach; ?>
  <?php endforeach; ?>
</body>

</html>