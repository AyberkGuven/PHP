<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pomato_php_9061";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");
    
    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $sql = "SELECT product.Id, product.imagePath, product.Name, brand.Name AS bName, kind.Name AS kName, product.Price FROM product INNER JOIN brand on product.brandId = brand.Id INNER JOIN kind on product.kindId = kind.Id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
                <div class='col-xl-4 col-lg-4 col-md-4 col-sm-6 margin'>
                    <div class='brand_box'>
                        <img src='upload/". $row["imagePath"] ."' alt='img' />
                        <h3><strong class='red'>". $row["Name"] ."</strong></h3>
                        <span>". $row["bName"] ."</span>
                        <span>". $row["kName"] ."</span>
                        <h3><strong class='red'>". $row["Price"] ."</strong></h3>
                    </div>
                </div>";
        }
    }else{
        echo "0 result";
    }

    $conn->close();
?>