<?php
include_once("../config.php");

$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_promo = $_POST['promo'];
$id_kategori = $_POST['kategori'];
$default_file = $_POST['default_file'];
$deskripsi = $_POST['deskripsi'];

$namaFile = $_FILES['upload_file']['name'];
$namaSementara = $_FILES['upload_file']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../uploads/";

// pindahkan file
$image = "";

if ($_FILES['upload_file']['size'] == 0) {
    $image = $default_file;
} else {
    $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

    if ($terupload) {
        $image = 'uploads/' . $namaFile;
    }
}

$sql = mysqli_query($conn, "UPDATE produk 
                                SET nama_produk = '$nama_produk', 
                                    gambar_produk = '$image', 
                                    harga = '$harga', 
                                    stok = '$stok', 
                                    id_promo = '$id_promo', 
                                    id_kategori = '$id_kategori', 
                                    deskripsi = '$deskripsi'
                            WHERE id_produk = '$id_produk'");

header("Location:produk.php");
