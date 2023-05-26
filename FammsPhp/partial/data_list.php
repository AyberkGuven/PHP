<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "famms-php_9061";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");

    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM product ORDER BY Id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
                <div class='col-sm-6 col-md-4 col-lg-3'>
                    <div class='box'>
                        <div class='option_container'>
                            <div class='options'>
                                <a href='detail.php?id=". $row["Id"] ."' class='option1'>
                                    Add to Cart
                                </a>
                                <a href='' class='option2'>
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class='img-box'>
                            <img src='images/". $row["imagePath"] ."'>
                        </div>
                        <div class='detail-box'>
                            <h5>
                                ". $row["Name"] ."
                            </h5>
                            <h6>
                                $". $row["Price"] ."
                            </h6>
                        </div>
                    </div>
                </div>";
        }
    }else{
        echo "<script>alert('0 result');</script>";
    }

    $conn->close();
?>