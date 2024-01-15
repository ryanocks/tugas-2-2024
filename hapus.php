<?php
require 'function.php';
$id_produk = $_GET["id_produk"];

if (hapusData($id_produk) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data berhasil dihapus');
        window.location = 'index.php'
    </script>
   ";
} else {
    echo "
    <script type='text/javascript'>
        alert('Data gagal dihapus');
        window.location = 'index.php'
    </script>
   ";
}

?>