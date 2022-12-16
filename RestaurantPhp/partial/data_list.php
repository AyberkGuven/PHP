<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lokantadb_mysql_9061";
    // session_start();

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");

    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $sql = "SELECT menu.Id AS mId, menu.Name, menu.Explanation, menu.ImagePath, turu.Name AS tName FROM menu INNER JOIN turu on menu.TuruId = turu.Id";
   
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <div class='col-sm-4'>
                <div class='img'>
                    <img src='img/". $row["ImagePath"] ."'>
                    <p>". $row["tName"] ."</p>
                </div>
                <h3>". $row["Name"] ."</h3>
                <p>". $row["Explanation"] ."</p>
                <a href='detay.php?id=". $row["mId"] ."'>Detay</a>
            </div>";
        }
    }else {
        echo "0 result";
    }

    $conn->close();
?>