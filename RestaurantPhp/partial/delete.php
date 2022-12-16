<?php
    // echo $_GET["id"]; // Id geldi.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lokantadb_mysql_9061";
    session_start();
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");
    
    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $DeletId = $_GET["id"];

    $sql = "DELETE FROM menu WHERE Id=$DeletId";

    if ($conn->query($sql) === TRUE) {
    }else {
        echo "<script>alert('Silinmedi');</script>". $conn->error;
    }

    $conn->close();

    header("location: ../index.php");
?>