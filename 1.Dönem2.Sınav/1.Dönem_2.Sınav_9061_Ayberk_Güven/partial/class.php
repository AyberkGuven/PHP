<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "1_donem_2_sinav_9061_ayberk_guven";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");
    
    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM class";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='".$row["Id"]."'>". $row["Name"] ."</option>";
        }
    }else {
        echo "<script>alert('Sınıflar gelmedi.');</script>";
    }

    $conn->close();
?>