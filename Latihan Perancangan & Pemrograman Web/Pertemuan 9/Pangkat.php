<?php

function pangkat($angka, $pangkat)
{
  $hasil = $angka * $angka * $angka * $angka;
  return $hasil;
}

echo "5 Pangkat 4 adalah =";
echo pangkat(5, 4);

