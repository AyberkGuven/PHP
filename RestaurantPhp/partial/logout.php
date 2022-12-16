<?php
    session_destroy();
    setcookie($Form_Rank, "", time() - 3600);
    header('Location: ../login.php');
    exit;
?>