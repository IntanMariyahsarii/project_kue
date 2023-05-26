<?php
include_once("../config.php");

$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$id_promo = $_POST['promo'];
$id_kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];

$namaFile = $_FILES['upload_file']['name'];
$namaSementara = $_FILES['upload_file']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../uploads/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

$image = "";
if ($terupload) {
    $image = 'uploads/' . $namaFile;
}

$sql = mysqli_query($conn, "INSERT INTO produk (nama_produk, gambar_produk, harga, stok, id_promo, id_kategori, deskripsi) 
    VALUES ('$nama_produk','$image', '$harga', '$stok', '$id_promo', '$id_kategori', '$deskripsi')");

header("Location:produk.php");
