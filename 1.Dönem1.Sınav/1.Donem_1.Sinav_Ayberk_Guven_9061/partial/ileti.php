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

    $sql = "SELECT * FROM ileti";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
                <label class='form-check-label'> ". $row["Name"] ."
                    <input class='form-check-input' type='checkbox' value='".$row["Id"]."' name='check'>
                </label>";
        }
    }else {
        echo "<script>alert('İleti gelmedi.');</script>";
    }

    $conn->close();
?>