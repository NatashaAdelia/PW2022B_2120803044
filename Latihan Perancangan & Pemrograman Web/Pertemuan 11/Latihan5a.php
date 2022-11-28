<?php

$jB = $_GET["baris"];
for ($i = $jB; $i >= 1; $i--) {
  for ($j = 1; $j <= $i; $j++) {
    echo "$j";
  }
  echo "<br>";
}
