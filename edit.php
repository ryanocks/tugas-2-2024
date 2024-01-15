<?php
require 'function.php';

$id_produk = $_GET["id_produk"];
$produk = queryProduk("SELECT * FROM produk WHERE id_produk = '$id_produk'")[0];

if (isset($_POST["submit"])) {
    if (editData($_POST) > 0) {
        echo "
        <script type='text/javascript'>
            alert('Data berhasil diupdate');
            window.location = 'index.php'
        </script>
       ";
    } else {
        echo "                                                                          
        <script type='text/javascript'>
            alert('Data gagal diupdate');
            window.location = 'index.php'
        </script>
       ";
    }
}
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="tambahdata" >
        <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_produk" value="<?=$produk ["id_produk"] ?>">

        <label for="">nama produk</label><br>
            <input type="text" name = "nama_produk" value="<?=$produk ["nama_produk"] ?>"><br><br>

            <label for="">harga</label><br>
            <input type="number" name = "harga" value="<?=$produk ["harga"] ?>"><br><br>

            <label for="">foto</label><br>
            <input type="file" name= "foto" value="<?=$produk ["foto"] ?>"><br><br>
            
            <label for="">deskripsi</label><br>
            <input type="text" name= "deskripsi" value="<?=$produk ["deskripsi"] ?>"><br><br>

            <button type="submit" name="submit">submit</button>
        </form>
    </div>
</body>
</html>