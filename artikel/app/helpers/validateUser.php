<?php

function validateUsers($user){
    $errors = array();



    if (empty($user['username'])){
        array_push($errors, 'Username diperlukan');
    }

    if (empty($user['email'])){
        array_push($errors, 'Email diperlukan');
    }

    if (empty($user['password'])){
        array_push($errors, 'Password diperlukan');
    }

    if ($user['passwordConf'] !== $_POST['password']){
        array_push($errors, 'Password tidak sama');
    }


    $existingPost = selectOne('users', ['email' => $user['email']]);

    if ($existingPost) {
        if (isset($user['update-user']) && $existingPost['id']!=$user['id']) {
            array_push($errors, 'Email tersebut sudah ada');
        }
        
        if (isset($user['create-admin'])) {
            array_push($errors, 'Email tersebut sudah ada');
        }
    }
    return $errors;
}


function validateLogin($user){
    $errors = array();



    if (empty($user['username'])){
        array_push($errors, 'Username diperlukan');
    }

    if (empty($user['password'])){
        array_push($errors, 'Password diperlukan');
    }

    return $errors;
}