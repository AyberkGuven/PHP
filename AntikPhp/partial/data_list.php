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

    $sql = "SELECT * FROM product";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc() ) {
            if ($row["Id"] < 5) { 
                echo "
                <div class='flex items-start mb-6 tm-menu-item'>
                    <img src='img/". $row["imagePath"] ."' alt='Image' class='rounded-md'>
                    <div class='ml-3 sm:ml-6'>
                        <h3 class='text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow'>".$row["Name"]."</h3>
                        <div class='text-white text-md sm:text-lg font-light mb-1'>S $". $row["sPrice"] ."</div>
                        <div class='text-white text-md sm:text-lg font-light'>L $". $row["lPrice"] ."</div>
                    </div>                    
                </div>";
            }
        }
    }else{
        echo "0 result";
    }

    $conn->close();
?>