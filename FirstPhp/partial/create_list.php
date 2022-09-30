<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "firstphp9061";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    

    $conn->close();
?>