<?php include("../../path.php")?>
<?php include(ROOT_PATH . "/app/controller/users.php")?>
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


          
            <title>ADMIN: KELOLA USER</title>
            
            </head>
            <body>

            <!-- ================
              Header (navbar)
            ================= -->

            <header >
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
<h2 class="page-title">Kelola user</h2>

<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
<table>
    <thead>
        <th>No.</th>
        <th>Username</th>
        <th>Peran</th>
        <th colspan="2">Kelola</th>
    </thead>

    <tbody>
        <tr>
            <td>1</td>
            <td>adam</td>
            <td>Penulis</td>
            <td><a href="" class="edit">edit</a></td>
            <td><a href="" class="delete">delete</a></td>
        </tr>

        <tr>
            <td>2</td>
            <td>fadhil</td>
            <td>admin</td>
            <td><a href="" class="edit">edit</a></td>
            <td><a href="" class="delete">delete</a></td>
        </tr>
    </tbody>
</table>
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