<?php
    session_start();
    session_destroy();
    setcookie("yetki", "", time() -60);
    header('Location: ../login.php');
    exit;
?>