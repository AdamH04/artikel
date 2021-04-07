<style>
.navbar a::before {
    content: '';
    display: none;
}
</style>

<header>
    <div class="logo3">
        <img class="logo-text" src="../../assets/img/mini-logo.png">
    </div>

    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">

        <?php if (isset($_SESSION['id'])) : ?>

        <li>
            <a href>
                <i class="fa fa-user"></i>
                <?php echo $_SESSION['username']; ?>
                <i class="fa fa-chevron-down"></i>
            </a>

            <ul>
                <?php if ($_SESSION['admin']) : ?>
                <li><a href="<?php echo BASE_URL . '/admin/panel.php' ?>">Panel</a></li>
                <?php endif; ?>
                <li><a href="<?php echo  BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
            </ul>
        </li>

        <?php else : ?>
        <li><a href="<?php echo  BASE_URL . '/register.php' ?>">Registrasi</a></li>
        <li><a href="<?php echo  BASE_URL . '/login.php' ?>">Login</a></li>
        <?php endif; ?>

    </ul>
</header>
<!--
<div id="nav-adjust">
           
            <div class="navbar sticky" >
              
              <a href="<?php echo BASE_URL . '/artikel.php' ?>"> <img class="logo" src="../../assets/img/mini-logo.png" width="80px" height="80px" >
              <span style="display: inline-block;"></span>
              </a>
              
              

            </div>
            </div>
          -->