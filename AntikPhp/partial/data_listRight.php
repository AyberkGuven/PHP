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
            if ($row["Id"] >= 5) { 
                echo "
                    <div class='flex items-start justify-end mb-6 tm-menu-item-2'>
                        <div class='text-right mr-6'>
                            <h3 class='text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow'>".$row["Name"]."</h3>
                            <div class='text-white text-md sm:text-lg font-light mb-1'>Small $". $row["sPrice"] ."</div>
                            <div class='text-white text-md sm:text-lg font-light'>Large $". $row["lPrice"] ."</div>
                        </div>
                        <img src='img/". $row["imagePath"] ."' alt='Image' class='rounded-md'>                   
                    </div>";
            }
        }
    }else{
        echo "0 result";
    }

    $conn->close();
?>