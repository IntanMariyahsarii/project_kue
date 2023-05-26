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
        <!-- Hero Section
====================================== -->
        <section id="slider" class="slider slide-overlay-black">
            <!-- START REVOLUTION SLIDER 5.0 -->
            <div class="rev_slider_wrapper">
                <div id="slider1" class="rev_slider" data-version="5.0">
                    <ul>
                        <!-- slide 1 -->
                        <li data-transition="zoomin" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">
                            <!-- MAIN IMAGE -->
                            <img src="../portal/assets/images/content/ban1.jpg  " alt="Slide Background Image" width="1920" height="1280">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-130" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--subheadline">Eternal Cake</div>
                            </div>


                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-65" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--headline">The Best Tasting Experience!</div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="20" data-width="none" data-height="none" data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--bio text-center">Eternal Cake is a restaurant, bar and coffee roastery
                                    located on Depok. We have<br> awesome recipes and the most talented chefs in town!
                                </div>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="100" data-width="none" data-height="none" data-whitespace="nowrap" data-frames='[{"delay":2250,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]' data-basealign="slide" data-responsive_offset="on" data-responsive="off">
                                <div class="slide-action">
                                    <a class="btn btn--white btn--bordered btn--lg" href="#">Get A Reservation Now</a>
                                </div>
                            </div>
                        </li>

                        <!-- slide 2 -->
                        <li data-transition="slideoverdown" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">
                            <!-- MAIN IMAGE -->
                            <img src="../portal/assets/images/content/ban3.jpg" alt="Slide Background Image" width="1920" height="1280">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-130" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--subheadline">Hello, We Are Eternal Cake</div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-65" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--headline">We Serve Quality Food</div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="20" data-width="none" data-height="none" data-transform_idle="o:1;" data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--bio text-center">Eternal Cake is a restaurant, bar and coffee roastery
                                    located on Depok. We have<br>awesome recipes and the most talented chefs in town!
                                </div>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="100" data-width="none" data-height="none" data-whitespace="nowrap" data-frames='[{"delay":2250,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]' data-basealign="slide" data-responsive_offset="on" data-responsive="off">
                                <div class="slide-action">
                                    <a class="btn btn--primary" href="#">View Menu</a>
                                </div>
                            </div>
                        </li>

                        <!-- slide 3 -->
                        <li data-transition="incube-horizontal" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">
                            <!-- MAIN IMAGE -->
                            <img src="../portal/assets/images/content/ban4.jpg" alt="Slide Background Image" width="1920" height="1280">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-65" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--subheadline">Made With Love</div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="0" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--headline">Fresh and Ready to Serve</div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="100" data-width="none" data-height="none" data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                                <div class="slide--bio text-center">Eternal Cake is a restaurant, bar and coffee roastery
                                    located on Depok. We have<br>awesome recipes and the most talented chefs in town!
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
            <!-- END OF SLIDER WRAPPER -->
        </section>
        <!-- tabs
============================================= -->

        <!-- Blog Carousel
============================================= -->
        <section id="blog" class="blog blog-carousel pb-90" style="margin-top: -40px;">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <div class="heading heading-1 mb-50 text--center">
                            <p class="heading--subtitle">Don’t miss</p>
                            <h2 class="heading--title mb-0">Our News & Events</h2>
                            <div class="divider--shape-4"></div>
                            <p class="heading--desc">Follow our latest news updates to know about our offers, recipes
                                and events. One cannot think well, love well, sleep well, if one has not dined well.
                            </p>
                        </div>
                    </div><!-- .col-md-8 end -->
                </div><!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="carousel carousel-dots" data-slide="4" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                            <!-- Blog Entry #1 -->
                            <?php if (mysqli_num_rows($query) > 0) { ?>
                                <?php
                                while ($data_produk = mysqli_fetch_array($query)) {
                                ?>
                                    <div class="blog-entry" style="height: 400px;">
                                        <div class="entry--img">
                                            <a href="#">
                                                <div class="cont-img">
                                                    <?php $result = $data_produk['gambar_produk']; ?>
                                                    <img src="../<?= $result; ?>" class="img-produk" alt="entry image" />
                                                </div>

                                            </a>
                                        </div>
                                        <div class="entry--content">
                                            <div class="entry--title">
                                                <h4><a href="#"><?= $data_produk["nama_produk"] ?></a></h4>
                                            </div>
                                            <div class="entry--bio">
                                                <?= $data_produk["deskripsi"] ?>
                                            </div>
                                            
                                        </div>
                                        <!-- .entry-content end -->
                                    </div>
                                <?php } ?>
                            <?php } ?>
                            <!-- .blog-entry end -->


                        </div><!-- .carousel end -->
                    </div><!-- .col-md-6 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #blog end -->

        <div class="clearfix"></div>

        <?php include_once("./layouts/footer.php"); ?>
    </div>
    <!-- #wrapper end -->

    <?php include_once("./layouts/script.php"); ?>

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


</body>

</html>