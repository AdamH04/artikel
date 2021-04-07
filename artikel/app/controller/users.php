<?php


include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");


$table = 'users';
$user = selectAll();

$errors = array();
$username ='';
$email ='';
$password ='';
$passwordConf ='';

function userLogin($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'anda berhasil login';
    $_SESSION['type'] = 'sukses';

    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/panel.php');
    } else {
        
        header('location: ' . BASE_URL . '/artikel.php');
    }
    
    exit();

}

if(isset($_POST['register-button']) || isset($_POST['create-admin'])){

    $errors = validateUsers($_POST);

    if (count($errors)===0) {
        unset($_POST['register-button'],$_POST['passwordConf'], $_POST['create-admin']);
    $_POST['password']=password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (isset($_POST['admin'])) {
        $_POST['admin'] = 1;
    $user_id = create($table, $_POST);
    $_SESSION['message'] = "admin baru berhasil ditambah";
    $_SESSION['type'] = "sukses";
    header('location: ' . BASE_URL . '/admin/users/index.php');
    exit();

    } else {
         
    $_POST['admin'] = 0;
    $user_id = create($table, $_POST);
    $user = selectOne($table,['id' => $user_id]);
    userLogin($user);
    }


    }else {

        $username =$_POST['username'];
        $email =$_POST['email'];
        $password =$_POST['password'];
        $passwordConf =$_POST['passwordConf'];
        
    }
    
}

if (isset($_POST['login-button'])) {
    $errors = validateLogin(($_POST));

    if (count($errors) === 0) {
        $user = selectOne($table, ['username' => $_POST['username']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            userLogin($user);
        } else {
          array_push($errors, 'Salah username atau password');
        }
        
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

}
?>