<?php
    require "function.php";
    $connect = queryProduk("SELECT * FROM produk");
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <a href="tambah.php">tambah data</a>
    <table border = 1 cellpadding = 9>
            <tr>
                <th>id</th>
                <th>Nama laptop</th>
                <th>Harga</th>
                <th>Foto </th>
                <th>deskripsi</th>
                <th>aksi</th>
            </tr>
            <?php $id_produk = 1;?>
            <?php foreach ($connect as $c): ?>
            <tr>

                <td><?=$id_produk;?></td>
                <td><?=$c ["nama_produk"]; ?></td>
                <td><?=$c ["harga"]; ?></td>
                <td><img src="image/<?= $c["foto"];  ?>" alt="" width="100px"></td>
                <td><?=$c ["deskripsi"]; ?></td>
                <td>
                <a href="hapus.php?id_produk=<?= $c ["id_produk"];?>" onClick="return confirm ('apakah anda yakin ingin menghapus data ini?')">hapus</a>
                <a href="edit.php?id_produk=<?= $c ["id_produk"];?>">edit</a>
            </td>
            </tr>
            <?php $id_produk++; ?>
            <?php endforeach; ?>
        </table>
    </body>
    </html>