<?php include("../../path.php") ?>
<?php include(ROOT_PATH . "/app/controller/users.php");
adminOnly(); ?>
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
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/nav.css">
    <link rel="stylesheet" href="../../assets/css/slideshow.css">
    <link rel="stylesheet" href="../../assets/css/image.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">



    <title>ADMIN: TAMBAH USER</title>

</head>

<body>

    <!-- ================
              Header (navbar)
            ================= -->

    <header>
        <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    </header>

    <!-- ================
              Main body
            ================= -->



    <div class="admin-wrapper">


        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

        <div class="admin-content">

            <div class="button-group">
                <button class="btn-btn-big"><a href="create.php" class="btn-btn-big2"> Tambah User</a></button>
                <button class="btn-btn-big"><a href="index.php" class="btn-btn-big2"> Kelola User</a></button>
            </div>

            <div class="content">
                <h2 class="page-title">Tambah User</h2>
                <?php include(ROOT_PATH . "/app/helpers/formError.php") ?>
                <form action="create.php" method="POST">

                    <div>
                        <label>Username</label><br>
                        <input type="text" name="username" value="<?php echo $username ?>" class="text-input">
                    </div>
                    <div>

                        <div>
                            <label>Email</label><br>
                            <input type="email" name="email" value="<?php echo $email ?>" class="text-input">
                        </div>

                        <div>
                            <label>Password</label><br>
                            <input type="password" name="password" value="<?php echo $password ?>" class="password">
                        </div>

                        <div>
                            <label>Konfirmasi password</label><br>
                            <input type="password" name="passwordConf" value="<?php echo $passwordConf ?>"
                                class="passwordConf">
                        </div>

                        <div>

                            <?php if (isset($admin)  && $admin == 1) : ?>
                            <label>
                                <input type="checkbox" name="admin" checked>
                                Admin
                            </label>

                            <?php else : ?>
                            <label>
                                <input type="checkbox" name="admin" checked>
                                Admin
                            </label>
                            <?php endif; ?>

                        </div>

                        <div>
                            <button type="submit" name="create-admin" class="btn-btn-big btn-btn-big2">Tambah
                                user</button>
                        </div>

                </form>

            </div>
        </div>

    </div>






    <script src="https://cdnjs.cloudfare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
    <script src="../../assets/js/dropdown.js"></script>
    <script src="../../assets/js/slideshow.js"></script>
    <script src="../../assets/js/sticky-scroll.js"></script>
    <script src="../../assets/js/shrink-scroll.js"></script>
    <script src="../../assets/js/nav-adjust.js"></script>
    <script src="../../assets/js/skrollr.js"></script>
    <script type="text/javascript">
    var s = srollr.init();
    </script>

</body>

</html>