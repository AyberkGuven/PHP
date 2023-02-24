<?php
    session_start();
    setcookie("yetki", " ", time() - 60*60*24, "/");
    unset($_COOKIE["yetki"]);
    session_destroy();
    // echo $_COOKIE["yetki"];

    header('Location: ../login.php');
    exit;
?>