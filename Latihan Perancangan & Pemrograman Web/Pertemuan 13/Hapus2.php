<?php

require 'Function.php';

$id =$_GET["id"];

if( hapus($id) > 0) {
  echo "
        <script>
            alert ('Data Berhasil Dihapus!') ;
            document.location.href = 'Latihan2.php';
        </script>
    ";
} else {
  echo "
        <script>
            alert ('Data gagal Dihapus!') ;
            document.location.href = 'Latihan2.php';
        </script>
    ";
}
