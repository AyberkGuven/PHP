<?php
    session_start();
    setcookie("yetki", "", time() - 3600);
    session_destroy();
    // echo $_COOKIE["yetki"];

    header('Location: ../login.php');
    exit;
?>