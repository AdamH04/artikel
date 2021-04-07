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


    $existingUser = selectOne('users', ['email' => $user['email']]);

    if ($existingUser) {
        array_push($errors, 'Email sudah digunakan');
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