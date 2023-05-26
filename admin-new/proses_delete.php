<?php
include_once("../config.php");
 
$id = $_GET['id_produk'];

mysqli_query($conn, "DELETE FROM produk WHERE id_produk = $id");

header("Location:produk.php");