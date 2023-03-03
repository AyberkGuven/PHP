<?php
    $servername = "localhost";
    $usernam = "root";
    $password = "";
    $dbname = "antik_php";

    $conn = new mysqli($servername, $usernam, $password, $dbname);
    $conn -> set_charset("utf8");

    if($conn -> connect_error){
        die("Connnection Failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM title";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            if ($row["Id"] < 5) { 
                echo "
                    <li class='inline-block mb-4 mx-4'><a href='#". $row["Name"] ."' class='tm-text-gold py-1 md:py-3 px-4 nav_a'>". $row["Name"] ."</a></li>";
            }
        }
    }else{
        echo "0 result";
    }

    $conn->close();
?>