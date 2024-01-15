<?php
require 'function.php';

if (isset($_POST["submit"])) {
    if (tambahProduk($_POST) > 0) {
        echo "
        <script type='text/javascript'>
            alert('Data berhasil ditambahkan');
            window.location = 'index.php'
        </script>
       ";
    } else {
        echo "
        <script type='text/javascript'>
            alert('Data gagal ditambahkan');
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
            <h1>tambah data</h1>

            <label for="">nama produk</label><br>
            <input type="text" name = "nama_produk"><br><br>

            <label for="">harga</label><br>
            <input type="number" name = "harga"><br><br>

            <label for="">foto</label><br>
            <input type="file" name= "foto"><br><br>
            
            <label for="">deskripsi</label><br>
            <input type="text" name= "deskripsi"><br><br>

            <button type="submit" name="submit">submit</button>
        </form>
    </div>
</body>
</html>