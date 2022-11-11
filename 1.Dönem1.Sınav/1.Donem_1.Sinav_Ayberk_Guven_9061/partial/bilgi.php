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

    $cNo = $_POST["cartNo"];
    $Name = $_POST["cart"];
    $Turu = $_POST["optradio"];
    $Year = $_POST["year"];
    $Mount = $_POST["mount"];
    $Ileti = $_POST["check"];

    $sql = "INSERT INTO Cart (cartNo, Name, mountId, yearsId, Turu, iletiId) VALUES ('$cNo', '$Name', '$Mount', '$Year', '$Turu', $Ileti)";

    if ($conn->query($sql) === TRUE) {

        echo "
        <div class='modal' id='myModal'>
            <div class='modal-dialog modal-dialog-centered modal-fullscreen-lg-down'>
                <div class='modal-content'>
                    <h4 class='modal-title'>Ödemeniz Alındı. Teşekkür ederiz.</h4>
                    <div class='modal-body'>
                        <div>
                            <p>Kart Sahibi</p><p>".$Name."</p>
                        </div>
                        <div>
                            <p>Kart Numarası</p><p>".$cNo ."</p>
                        </div>
                        <div>
                            <p>Kart Tipi</p><p>". $Turu ."</p>
                        </div>
                        <div>
                            <p>Son Kullanma Tarihi</p><p>". $Mount ." / ". $Year ."</p>
                        </div>
                        <div>
                            <p>İletişim Türü</p><p>". $Ileti ."</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <script src='js/Show.js'></script>";     

        // echo "<script>alert('New record created successfully');</script>";
        // $last_id = $conn->insert_id;
        // echo $last_id;

        // $sql = "SELECT cart.Id = $last_id, cart.cartNo, cart.Name, cart.Turu, mount.ad AS mName, years.Name AS yName, ileti.Name AS iName FROM cart INNER JOIN mount on cart.mountId = mount.Id INNER JOIN years on cart.yearsId = years.Id INNER JOIN ileti on cart.iletiId = ileti.Id";
        // $result = $conn->query($sql);
        // if ($result->num_rows > 0) {
        //     echo "<div class='modal' id='myModal'><div class='modal-dialog modal-fullscreen-lg-down'>";
        //     if ($row = $result->fetch_assoc()) {
        //         $Tur = $row["Turu"] == 0 ? "Master" : "Visa";
        //         echo 
        //         "<div class='modal-content'>
        //             <h4 class='modal-title'>Ödemeniz Alındı. Teşekkür ederiz.</h4>
        //             <div class='modal-body'>
        //                 <div>
        //                     <p>Kart Sahibi</p><p>".$row["Name"]."</p>
        //                 </div>
        //                 <div>
        //                     <p>Kart Numarası</p><p>". $row["cartNo"] ."</p>
        //                 </div>
        //                 <div>
        //                     <p>Kart Tipi</p><p>". $Tur ."</p>
        //                 </div>
        //                 <div>
        //                     <p>Son Kullanma Tarihi</p><p>". $row["mName"] ." / ". $row["yName"] ."</p>
        //                 </div>
        //                 <div>
        //                     <p>İletişim Türü</p><p>". $row["iName"] ."</p>
        //                 </div>
        //             </div> 
        //         </div>";
        //     }
        //     echo "</div></div>";
        // }else {
        //     echo "0 results";
        // }
    } else {

        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>

<!-- <div class='modal-header'>                 
    <button type='button' class='btn-close' data-bs-dismiss='modal'></button>
</div>

<div class='modal-footer'>
    <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Close</button>
</div>   -->
