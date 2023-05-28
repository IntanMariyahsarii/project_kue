<?php
include_once("./layouts/head.php");
include_once("../config.php");
$query = mysqli_query($conn, "SELECT * FROM produk ORDER BY id_produk DESC");
?>

<body class="body-bordered">
    <div class="bordered--line bordered--line-top"></div>
    <div class="bordered--line bordered--line-bottom"></div>
    <div class="bordered--line bordered--line-left"></div>
    <div class="bordered--line bordered--line-right"></div>
    <div class="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="wrapper clearfix">

        <?php include_once("./layouts/navbar.php"); ?>

        <!-- Page Title #4
============================================= -->
        <section id="page-title" class="page-title bg-overlay bg-parallax bg-overlay-gradient">
            <div class="bg-section">
                <img src="assets/images/content/ban1.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-4 text-center">
                            <div class="title--content">
                                <div class="title--subtitle">Discover</div>
                                <div class="title--heading">
                                    <h1>Our Menu</h1>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a>
                                </li>
                                <li><a href="index.html">menu</a>
                                </li>
                            </ol>
                            <div class="divider--shape-1down"></div>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #page-title end -->

        <!-- Heading #1
============================================= -->
        <section id="heading1" class="heading heading-1 bg-white">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <div class="text--center">
                            <p class="heading--subtitle">Taste the best</p>
                            <h2 class="heading--title mb-0">Fresh Ingredient, Health Cake</h2>
                            <div class="divider--shape-4"></div>
                            <p class="heading--desc">Everyone has taste, even if they don't realize it. Even if you're not a great chef, there's nothing to stop you understanding the difference between what tastes good and what doesn't.</p>
                        </div>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #heading1 end -->

        <!-- Divider #1
============================================= -->
        <section id="divider1" class="section-divider bg-overlay bg-parallax bg-overlay-dark4">
            <div class="bg-section">
                <img src="../portal/assets/images/content/ban3.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="divider--shape-1up"></div>
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <div class="heading heading-3 text--center">
                            <p class="heading--subtitle">Main Course</p>
                            <h2 class="heading--title mb-0 text-white">Enjoy Our Cake Dish</h2>
                        </div>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
                <div class="divider--shape-3down"></div>
            </div>
            <!-- .container end -->
        </section>
        <!-- #divider1 end -->

        <!-- Menu #2
============================================= -->
        <section id="menu2" class="menu menu-2 bg-white pb-60">
            <div class="container">
                <div class="row">
                    <!-- Dish #1 -->
                    <?php if (mysqli_num_rows($query) > 0) { ?>
                        <?php
                        while ($data_produk = mysqli_fetch_array($query)) {
                        ?>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="dish-panel">
                                    <div class="dish--img">
                                        <div class="cont-img">
                                            <?php $result = $data_produk['gambar_produk']; ?>
                                            <img src="../<?= $result; ?>" class="img-produk" alt="Dish Image">
                                        </div>
                                        <div class="dish--overlay">
                                            <a class="dish-popup" data-toggle="modal" data-target="#dishPopup<?= $data_produk['id_produk'] ?>"><i class="fa fa-search-plus"></i></a>
                                            <div class="modal fade" tabindex="-1" role="dialog" id="dishPopup<?= $data_produk['id_produk'] ?>">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                                            <div class="row reservation">
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <div class="img-popup">
                                                                    <?php $result = $data_produk['gambar_produk']; ?>
                                                                        <img src="../<?= $result; ?>" class="img-produk" alt="dish img">
                                                                        <div class="img-popup-overlay">
                                                                            <div class="popup--price"><?= $data_produk['harga'] ?></div>
                                                                            <p><?= $data_produk['harga'] ?></p>
                                                                            <h3 class="popup--title"><?= $data_produk['nama_produk'] ?></h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- .col-md-12 end -->
                                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                                    <div class="content-popup">
                                                                        <p><?= $data_produk['deskripsi'] ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- .row end -->
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                    <div class="dish--content">
                                        <h3 class="dish--title"><?= $data_produk['nama_produk']; ?></h3>
                                        <span class="dish--price" style="margin-right: 63px;"><?= $data_produk['harga']; ?></span>
                                        <p class="dish--desc"><?= $data_produk['deskripsi']; ?></p>
                                    </div>
                                </div>
                                <!-- .dish end -->
                            </div>
                        <?php } ?>
                    <?php } ?>
                    <!-- .col-md-4 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #menu2 end -->
    </div>

    <div class="clearfix"></div>

    <?php include_once("./layouts/footer.php"); ?>

    <style>
        .cont-img {
            width: 300px;
            /* Set the desired width */
            height: 200px;
            /* Set the desired height */
            overflow: hidden;
            /* Optional: Hide any overflowing content */
        }

        .cont-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Image will be scaled to cover the container, cropping if necessary */
        }
    </style>
    </div>
    <!-- #wrapper end -->

    <?php include_once("./layouts/script.php"); ?>