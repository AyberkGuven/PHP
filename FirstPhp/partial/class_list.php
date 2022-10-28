<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "firstphp9061";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM class";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='".$row["Id"]."'>". $row["Name"] ."</option>";
        }
        // foreach ($sql as $row) {
        //     echo "<option>". $row["Name"]; ."</option>";
        // }
    }else {
        echo "<script>alert('Sınıflar gelmedi.');</script>";
    }

    $conn->close();
?>