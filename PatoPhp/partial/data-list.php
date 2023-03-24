<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pato_php";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");

    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }

    $sql = "SELECT * FROM Product";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if($row["Id"] < 4){
                echo "
                <div class='row'>
                    <div class='col-sm-4'>
                        <img src='img/". $row["imagePath"] ."' class='rounded' alt='Lunch ". $row["Id"] ."'>
                    </div>
                    <div class='col-sm-8'>
                        <h3>". $row["Name"] ."</h3>
                        <p>". $row["Description"] ."</p>
                        <h4>". $row["Price"] ." $</h4>
                    </div>
                </div>";
            }
        }
    }else{
        echo "0 result";
    }

    $conn->close();
?>