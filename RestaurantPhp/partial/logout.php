<?php
    session_start();
    session_destroy();
    // setcookie('yetki', $Form_Rank, time() -1);
    header('Location: ../login.php');
    exit;
?>