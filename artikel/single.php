<!DOCTYPE html>

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
    <title>POST SINGLE</title>
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
            <?php 
    include("app/includes/header.php");
    ?>

    <!-- ================
              Main body
            ================= -->

    <section>
        <!--KONTEN ISI WEB-->
        <div class="isi clearfix">

            <div class="main-contentwrapper">
                <div class="isi-utama single">
                    <h1 class="post-title">JUDUL POST TES 1</h1>
                    <div class="post-content">
                        <p>Paragraf 1</p>
                        <p>Paragraf 1</p>
                        <p>Paragraf 1</p>
                        <p>Paragraf 1</p>
                        <p>Paragraf 1</p>
                        <p>Paragraf 1</p>
                    </div>
                </div>
            </div>


            <!--SIDEBAR KONTEN-->
            <div class="sidebar single">

                <div class="section popular">
                    <h2 class="section-title">Terbaik</h2>

                    <div class="post clearfix">
                        <img src="assets/img/pexels-tatiana-syrikova-3975577.jpg">
                        <a href="" class="title">
                            <h4>Ini tentang adidaya saat ini</h4>
                        </a>
                    </div>

                    <div class="post clearfix">
                        <img src="assets/img/pexels-tatiana-syrikova-3975577.jpg">
                        <a href="" class="title">
                            <h4>Ini tentang adidaya saat ini</h4>
                        </a>
                    </div>

                    <div class="post clearfix">
                        <img src="assets/img/pexels-tatiana-syrikova-3975577.jpg">
                        <a href="" class="title">
                            <h4>Ini tentang adidaya saat ini</h4>
                        </a>
                    </div>

                    <div class="post clearfix">
                        <img src="assets/img/pexels-tatiana-syrikova-3975577.jpg">
                        <a href="" class="title">
                            <h4>Ini tentang adidaya saat ini</h4>
                        </a>
                    </div>


                </div>

                <div class="section topics">
                    <h2>KATEGORI</h2>
                    <div class="section-title">
                        <ul>
                            <li><a href="">Kebersihan</a></li>
                            <li><a href="">security</a></li>
                            <li><a href="">Organisasi</a></li>
                            <li><a href="">Driving</a></li>
                        </ul>


                    </div>
                </div>

            </div>

        </div>
        <!--KONTEN ISI WEB-->

        </div>
    </section>



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