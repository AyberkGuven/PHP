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

    $sql = "SELECT cart.Id, cart.cartNo, cart.Name, cart.Turu, mount.ad AS mName, years.Name AS yName, ileti.Name AS iName FROM cart INNER JOIN mount on cart.mountId = mount.Id INNER JOIN years on cart.yearsId = years.Id INNER JOIN ileti on cart.iletiId = ileti.Id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='alert'>";
        if ($row = $result->fetch_assoc()) {
            echo 
            "<div>
                <h1>Ödemeniz Alındı. Teşekkür ederiz.</h1>
                <div class='Bilgi'>
                    <div>
                        <p>Kart Sahibi</p><p>".$row["Name"]."</p>
                    </div>
                    <div>
                        <p>Kart Numarası</p><p>". $row["cartNo"] ."</p>
                    </div>
                    <div>
                        <p>Kart Tipi</p><p>". $row["Turu"] ."</p>
                    </div>
                    <div>
                        <p>Son Kullanma Tarihi</p><p>". $row["mName"] ." / ". $row["yName"] ."</p>
                    </div>
                    <div>
                        <p>İletişim Türü</p><p>". $row["iName"] ."</p>
                    </div>
                </div>            
            </div>";
        }
        echo "</div>";
    }else {
        echo "0 results";
    }

    $conn->close();
?>