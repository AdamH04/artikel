<?php include("../../path.php") ?>

<?php include(ROOT_PATH . "/app/controller/posts.php"); ?>
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



    <title>ADMIN: EDIT ARTIKEL</title>

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
                <button class="btn-btn-big"><a href="create.php" class="btn-btn-big2"> Tambah artikel</a></button>
                <button class="btn-btn-big"><a href="index.php" class="btn-btn-big2"> Kelola artikel</a></button>
            </div>

            <div class="content">
                <h2 class="page-title">Edit artikel</h2>

                <form action="edit.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <div>
                        <label>Judul</label><br>
                        <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">
                    </div>

                    <div>
                        <label>Isi Konten</label><br>
                        <textarea name="body" id="body" value="<?php echo $body; ?>"></textarea>
                    </div>

                    <div>
                        <label>Gambar</label><br>
                        <input type="file" name="image" class="text-input">
                    </div>

                    <div>
                        <label>Kategori</label><br>
                        <select name="topic_id" class="text-input">
                            <option value=""></option>
                            <?php foreach ($topics as $key => $topic) : ?>

                            <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
                            <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>

                            <?php else : ?>
                            <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>

                            <?php endif; ?>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div>
                        <?php if (empty($published) && $published == 0) : ?>

                        <label>
                            <input type="checkbox" name="published">
                            Terbitkan
                        </label>

                        <?php else : ?>

                        <label>
                            <input type="checkbox" name="published" checked>
                            Terbitkan
                        </label>

                        <?php endif; ?>
                    </div>

                    <div>
                        <button type="submit" name="update-post" class="btn-btn-big btn-btn-big2">Update
                            artikel</button>
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