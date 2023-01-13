<?php
    session_start();
    session_destroy();
    setcookie("yetki", "", time() -1);
    header('Location: ../login.php');
    exit;
?>