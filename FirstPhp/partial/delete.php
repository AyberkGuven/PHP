<?php
    // echo $_GET["id"]; // Id geldi.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "firstphp9061";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $DeletId = $_GET["id"];

    $sql = "DELETE FROM student WHERE Id=$DeletId";

    if ($conn->query($sql) === TRUE) {
    }else {
        echo "<script>alert('Silinmedi');</script>". $conn->error;
    }

    $conn->close();

    header("location:../index.php");
?>