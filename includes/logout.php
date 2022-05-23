<?php
session_start();


if (isset($_POST['logout_btn']))
{
    // code...
    unset($_SESSION['email']);
    unset($_SESSION['id']);
    header('Location: /onlearning2/home.php');

}


if (isset($_POST['admin_logout_btn']))
{
    // code...
    unset($_SESSION['admin']);
    header('Location: /onlearning2/home.php');

}




?>