<?php
include_once("./layouts-admin/head.php");
include "../config.php";
$query = mysqli_query($conn, "SELECT * FROM produk 
JOIN promotion ON produk.id_promo=promotion.id_promo
JOIN kategori ON produk.id_kategori=kategori.id_kategori");
?>

<body>
    <div class="page-container">
        <?php
        include_once("./layouts-admin/navbar.php");
        ?>
        <?php
        include_once("./layouts-admin/sidebar.php");
        ?>
        <div class="page-content">
            <div class="main-wrapper">

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                            <a class="btn btn-primary" href="form_produk.php" role="button" style="width: 20%;margin-top: 17px;margin-bottom: 17px;font-size:15px">Tambah Produk</a>
                                <table id="zero-conf" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Foto</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Promo</th>
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (mysqli_num_rows($query) > 0) { ?>
                                            <?php
                                            $no = 1;
                                            while ($data_produk = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $data_produk["nama_produk"] ?></td>
                                                    <td>
                                                        <?php $result = $data_produk['gambar_produk']; ?>
                                                        <img src="../<?= $result; ?>" style="height: 100px;">
                                                    </td>
                                                    <td><?= $data_produk["harga"] ?></td>
                                                    <td><?= $data_produk["stok"] ?></td>
                                                    <td><?= $data_produk["promo"] ?></td>
                                                    <td><?= $data_produk["kategori"] ?></td>
                                                    <td><?= $data_produk["deskripsi"] ?></td>
                                                    <td>
                                                        <a href="update_produk.php?id_produk=<?php echo $data_produk["id_produk"] ?>" class="btn btn-success btn-sm" role="button" style="padding: 8px;"><i data-feather="edit" style="width: 20px; height: 20px;"></i></a>
                                                        <a href="proses_delete.php?id_produk=<?php echo $data_produk["id_produk"] ?>" class="btn btn-danger btn-sm" role="button" style="padding: 8px; margin-top: 10px;"><i data-feather="trash" style="width: 20px; height: 20px;"></i></a>
                                                    </td>
                                                </tr>
                                            <?php $no++;
                                            } ?>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Foto</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Promo</th>
                                            <th>Kategori</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once("./layouts-admin/script.php");
    ?>
</body>

</html>