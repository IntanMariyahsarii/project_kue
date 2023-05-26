<?php
include_once("./layouts-admin/head.php");

include "../config.php";
$id = $_GET['id_produk'];
$query = mysqli_query($conn, "SELECT * FROM produk JOIN promotion ON produk.id_promo=promotion.id_promo
JOIN kategori ON produk.id_kategori=kategori.id_kategori WHERE id_produk = '$id'");

$query_promo = mysqli_query($conn, "SELECT * FROM promotion");
$query_kategori = mysqli_query($conn, "SELECT * FROM kategori");
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
                                <h5 class="card-title">Form Add Produk</h5>
                                <form action="proses_update.php" method="post" class="row g-3" id="myForm" enctype="multipart/form-data">
                                    <?php if (mysqli_num_rows($query) > 0) { ?>
                                        <?php
                                        while ($data_produk = mysqli_fetch_array($query)) {
                                        ?>
                                            <input type="text" name="id_produk" class="form-control" value="<?php echo $data_produk['id_produk'] ?>" hidden />
                                            <div class="col-md-6">
                                                <label for="validationCustom01" class="form-label">Nama Produk</label>
                                                <input autocomplete="off" type="text" class="form-control" id="validationCustom01" name="nama_produk" id="nama_produk" value="<?php echo $data_produk['nama_produk']; ?>">
                                                <div id="message_produk" class="warning-text"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom02" class="form-label">Upload Foto</label>
                                                <input type="text" name="default_file" class="form-control" value="<?php echo $data_produk['gambar_produk']; ?>" hidden>
                                                <input autocomplete="off" type="file" name="upload_file" class="form-control" id="upload)file">
                                                <div id="message_upload foto" class="warning-text"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom03" class="form-label">Harga</label>
                                                <input type="number" class="form-control" name="harga" id="harga" value="<?php echo $data_produk['harga'] ?>">
                                                <div id="message_harga" class="warning-text"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom03" class="form-label">Stok</label>
                                                <input type="number" class="form-control" name="stok" id="stok" value="<?php echo $data_produk['stok'] ?>">
                                                <div id="message_stok" class="warning-text"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom04" class="form-label">Promo</label>
                                                <select class="form-select" name="promo" id="promo">
                                                    <option selected disabled value="">Pilih Promo</option>
                                                    <?php if (mysqli_num_rows($query_promo) > 0) { ?>
                                                        <?php
                                                        while ($data_promo = mysqli_fetch_array($query_promo)) {
                                                        ?>
                                                            <option value="<?= $data_promo["id_promo"] ?>" <?= $data_promo["id_promo"] == $data_produk['id_promo'] ? "selected" : ""  ?>><?= $data_promo["promo"] ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                                <div id="message_promo" class="warning-text"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom04" class="form-label">Kategori</label>
                                                <select class="form-select" name="kategori" id="kategori">
                                                    <option selected disabled value="">Pilih Kategori</option>
                                                    <?php if (mysqli_num_rows($query_kategori) > 0) { ?>
                                                        <?php
                                                        while ($data_kategori = mysqli_fetch_array($query_kategori)) {
                                                        ?>
                                                            <option value="<?= $data_kategori["id_kategori"] ?>" <?= $data_kategori["id_kategori"] == $data_produk['id_kategori'] ? "selected" : ""  ?>><?= $data_kategori["kategori"] ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                                <div id="message_kategori" class="warning-text"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="validationCustom04" class="form-label">Deskripsi</label>
                                                <textarea name="deskripsi" id="deskripsi" cols="30" rows="3" class="form-control"><?php echo $data_produk['deskripsi'];?></textarea>
                                                <div id="message_deskripsi" class="warning-text"></div>
                                            </div>
                                            <div class="col-md-12">
                                                <a href="produk.php" type="button" class="btn btn-primary previous">Back</a>
                                                <button class="btn btn-primary" type="submit">Submit form</button>
                                            </div>
                                        <?php
                                        } ?>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Javascripts -->
    <?php
    include_once("./layouts-admin/script.php");
    ?>
</body>

</html>

<script>
    $(document).ready(function() {
        $(document).ready(function() {
            $('#myForm').submit(function() {
                var nama_produk = $('#nama_produk').val().length;
                var upload_foto = $('#upload_foto').val().length;
                var harga = $('#harga').val().length;
                var stok = $('#stok').val().length;
                var promo = $('#promo').val().length;
                var kategori = $('#kategori').val().length;
                var deskripsi = $('#deskripsi').val().length;

                if (nama_produk == 0) {
                    $("#message_nama_produk").text("First name cannot be empty!");
                } else {
                    $("#message_nama_produk").text("");
                }

                if (upload_foto == 0) {
                    $("#message_upload_foto").text("Last name cannot be empty!");
                } else {
                    $("#message_upload_foto").text("");
                }

                if (harga == 0) {
                    $("#message_harga").text("harga cannot be empty!");
                } else {
                    $("#message_harga").text("");
                }

                if (stok == 0) {
                    $("#message_stok").text("stok cannot be empty!");
                } else {
                    $("#message_stok").text("");
                }

                if (promo == 0) {
                    $("#message_promo").text("promo cannot be empty!");
                } else {
                    $("#message_promo").text("");
                }

                if (kategori == 0) {
                    $("#message_kategori").text("kategori cannot be empty!");
                } else {
                    $("#message_kategori").text("");
                }

                if (deskripsi == 0) {
                    $("#message_deskripsi").text("deskripsi cannot be empty!");
                } else {
                    $("#message_deskripsi").text("");
                }

                if (nama_produk != 0 && upload_foto != 0 && harga != 0 && stok != 0 && promo != 0 && kategori != 0 && deskripsi != 0) {
                    return true;
                } else {
                    return false;
                }
            });
        });
    });
</script>