<!DOCTYPE html>
<?php 
include("path.php");
include(ROOT_PATH . "/app/controller/topics.php");
?>



<!-- Daftar konten
1. Header (navbar)
2.
3.
4.
#. Footer -->

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="css/navbar.css">-->
    <link rel="stylesheet" href="https://kit.fontawesome.com/11a4f52367.js" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/slideshow.css">
    <link rel="stylesheet" href="assets/css/image.css">
    <link rel="stylesheet" href="assets/css/styleutama.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/11a4f52367.js" crossorigin="anonymous">


</head>

<body>

    <!-- ================
              Header (navbar)
            ================= -->

    <!--INCLUDE NAVBAR-->
    <?php 
    include(ROOT_PATH . "/app/includes/header.php");
    ?>
    
    <?php include(ROOT_PATH . "/app/includes/messages.php");?>
    <!-- ================
              Main body
            ================= -->

    <!--SLIDESHOW CAROUSEL-->
    <section>
        <div class="page-wrapper">

            <div class="post-slider">
                <h1 class="slider-title">Artikel trending</h1>
                <i class="fas fa-chevron-left prev"></i>
                <i class="fas fa-chevron-right next"></i>

                <div class="post-wrapper">

                    <div class="post"><img src="assets/img/pexels-rebrand-cities-1367272.jpg" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.html">Artikel tes 1</a></h4>
                            <i class="far fa-user"> Adam Hanif</i> &nbsp;
                            <i class="far fa-calendar"> 22 Maret</i>
                        </div>
                    </div>

                    <div class="post"><img src="assets/img/pexels-rebrand-cities-1367272.jpg" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.html">Artikel tes 1</a></h4>
                            <i class="far fa-user"> Adam Hanif</i> &nbsp;
                            <i class="far fa-calendar"> 22 Maret</i>
                        </div>
                    </div>

                    <div class="post"><img src="assets/img/pexels-rebrand-cities-1367272.jpg" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.html">Artikel tes 1</a></h4>
                            <i class="far fa-user"> Adam Hanif</i> &nbsp;
                            <i class="far fa-calendar"> 22 Maret</i>
                        </div>
                    </div>

                    <div class="post"><img src="assets/img/pexels-rebrand-cities-1367272.jpg" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.html">Artikel tes 1</a></h4>
                            <i class="far fa-user"> Adam Hanif</i> &nbsp;
                            <i class="far fa-calendar"> 22 Maret</i>
                        </div>
                    </div>

                </div>
            </div>
            <!--SLIDESHOW CAROUSEL-->

            <!--KONTEN ISI WEB-->
            <div class="isi clearfix">

                <div class="isi-utama">
                    <h2 class="recent-post-title">Artikel Baru</h2>
                    <div class="post">
                        <img src="assets/assets/img/pexels-tatiana-syrikova-3975577.jpg" class="post-image" width="450px" height="400px">
                        <div class="post-preview">
                            <h1><a href="single.html">Uji coba artikel 1</a></h1>
                            <i class="fa fa-user"> Adam Hanif</i> &nbsp;
                            <i class="fa fa-calendar"> 22 Maret 2021</i>
                            <p class="preview-text">
                                Ini teks article percobaan yang akan dilihat user
                            </p>
                            <a href="single.html" class="btn baca">Baca lebih lanjut</a>
                        </div>
                    </div>

                    <div class="post">
                        <img src="assets/img/pexels-tatiana-syrikova-3975577.jpg" class="post-image" width="450px" height="400px">
                        <div class="post-preview">
                            <h1><a href="single.html">Uji coba artikel 1</a></h1>
                            <i class="fa fa-user"> Adam Hanif</i> &nbsp;
                            <i class="fa fa-calendar"> 22 Maret 2021</i>
                            <p class="preview-text">
                                Ini teks article percobaan yang akan dilihat user
                            </p>
                            <a href="single.html" class="btn baca">Baca lebih lanjut</a>
                        </div>
                    </div>

                    <div class="post">
                        <img src="assets/img/pexels-tatiana-syrikova-3975577.jpg" class="post-image" width="450px" height="400px">
                        <div class="post-preview">
                            <h1><a href="single.html">Uji coba artikel 1</a></h1>
                            <i class="fa fa-user"> Adam Hanif</i> &nbsp;
                            <i class="fa fa-calendar"> 22 Maret 2021</i>
                            <p class="preview-text">
                                Ini teks article percobaan yang akan dilihat user
                            </p>
                            <a href="single.html" class="btn baca">Baca lebih lanjut</a>
                        </div>
                    </div>
                </div>

                <div class="sidebar">
                    <div class="section search">
                        <h2 class="section-title">Telusuri</h2>
                        <form action="index.html" method="post">
                            <input type="text" name="search-term" class="text-input" placeholder="Cari..">
                        </form>
                    </div>

                    <div class="section topics">
                        <h2>KATEGORI</h2>
                        <div class="section-title">
                            <ul>

                            <?php foreach ($topics as $key => $topic): ?>
                                <li><a href=""><?php echo $topic['name'];?></a></li>
                            <?php endforeach;?>
                                <!--
                                <li><a href="">security</a></li>
                                <li><a href="">Organisasi</a></li>
                                <li><a href="">Driving</a></li>
-->
                            </ul>


                        </div>
                    </div>

                </div>

            </div>
            <!--KONTEN ISI WEB-->

        </div>
    </section>




    <!--INCLUDE FOOTER-->
    <?php
    include("app/includes/footer.php")
    ?>

    <script src="assets/js/dropdown.js"></script>
    <script src="https://kit.fontawesome.com/11a4f52367.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="assets/js/menu.js"></script>
    <script src="assets/js/slideshow.js"></script>
    <script src="assets/js/sticky-scroll.js"></script>

    <script src="assets/js/nav-adjust.js"></script>
    <script src="assets/js/skrollr.js"></script>

    <script type="text/javascript">
        var s = skrollr.init();
    </script>
</body>

</html>