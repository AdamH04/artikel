<?php

function usersOnly($redirect = "/artikel.php")
{
    if (empty($_SESSION['id'])) {
        $_SESSION['message'] = 'Anda perlu login terlebih dahulu';
        $_SESSION['type'] = 'eror';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function adminOnly($redirect = "/artikel.php")
{
    if (empty($_SESSION['id']) || empty($_SESSION['admin'])) {
        $_SESSION['message'] = 'Not authorized';
        $_SESSION['type'] = 'eror';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function guestsOnly($redirect = "/artikel.php")
{
    if (isset($_SESSION['admin'])) {
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}