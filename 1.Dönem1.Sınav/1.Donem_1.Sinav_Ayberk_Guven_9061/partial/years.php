<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ayberkguven9061";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");

    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM years";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='".$row["Id"]."'>". $row["Name"] ."</option>";
        }
        // foreach ($sql as $row) {
        //     echo "<option>". $row["Name"]; ."</option>";
        // }
    }else {
        echo "<script>alert('Yıllar gelmedi.');</script>";
    }

    $conn->close();
?>