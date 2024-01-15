<?php

$connect = mysqli_connect("localhost", "root", "", "toko_laptop");

function queryProduk($query)
{
    global $connect;

    $result = mysqli_query($connect, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    } 
    return $rows;
}
function tambahProduk($data){
    global $connect;

    $nama_produk = $data ["nama_produk"];
    $harga = $data ["harga"];
    $foto = $_FILES ["foto"]["name"];
    $file = $_FILES ["foto"]["tmp_name"];
    $deskripsi = $data ["deskripsi"];
   
    $query = "INSERT INTO produk VALUES ('','$nama_produk','$harga','$foto','$deskripsi')";
    mysqli_query($connect, $query);
move_uploaded_file($file, "image/".$foto);
    return mysqli_affected_rows($connect);
}

function hapusData($id_produk){
    global $connect;

    mysqli_query($connect, "DELETE FROM produk WHERE id_produk = '$id_produk'");
    return mysqli_affected_rows($connect);
}

function editData($data) {
    global $connect;

    $id = $data["id_produk"];
    $nama_produk = $data["nama_produk"];
    $harga = $data["harga"];
    $foto = $_FILES["foto"]["name"];
    $file = $_FILES["foto"]["tmp_name"];
    $deskripsi = $data["deskripsi"];

    if (empty($foto)) {
        $query = "UPDATE produk SET
            nama_produk = '$nama_produk',
            harga = '$harga',     
            deskripsi = '$deskripsi' WHERE id_produk = '$id'";
    } else {
        $query = "UPDATE produk SET
            nama_produk = '$nama_produk',
            harga = '$harga',
            foto = '$foto',
            deskripsi = '$deskripsi' WHERE id_produk = '$id'";
        move_uploaded_file($file, "./image/".$foto);
    }

    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}


// function editProduk($data){


//     global $connect;

//     $id_produk = $data ["id_produk"];
//     $nama_produk = $data ["nama_produk"];
//     $harga = $data ["harga"];
//     $foto = $_FILES ["foto"]["name"];
//     $file = $_FILES ["foto"]["tmp_name"];
//     $deskripsi = $data ["deskripsi"];
  
// if(empty($foto)){
//     $query = "UPDATE produk SET
//     nama_produk = '$nama_produk',
//     harga = '$harga',
//     foto = '$foto',
//     deskripsi = '$deskripsi' WHERE id_produk = '$id_produk'";

//     mysqli_query($connect, $query);
//     return mysqli_affected_rows($connect);
// }else{
     
//     $query = "UPDATE produk SET
//      nama_produk = '$nama_produk',
//     harga = '$harga',
//     foto = '$foto',
//     deskripsi = '$deskripsi' WHERE id_produk = '$id_produk'";
  
    
//     mysqli_query($connect, $query);
//     move_uploaded_file($file, "image/".$foto);
//     return mysqli_affected_rows($connect);
// }


// }
?>