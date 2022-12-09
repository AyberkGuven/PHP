<?php
    // echo $_GET["id"]; // Id geldi.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lokantadb_mysql_9061";
    session_start();

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");

    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM menu WHERE Id=". $_GET["id"] ."";
    $sqlTuru = "SELECT * FROM turu";
    $result = $conn->query($sql);
    $resultTuru = $conn->query($sqlTuru);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
                <input type='text' class='form-control' style='opacity: 0; color: #ffffff; position: fixed;' value='". $row["Id"] ."' id='SID' name='SID'>
                <div class='mb-3 mt-3'>
                    <label for='Name'>Adı:</label>
                    <input type='text' class='form-control' value='". $row["Name"] ."' id='name' name='name'>
                </div>
                <div class='mb-3 mt-3'>
                    <label for='Class'>Türü:</label>
                    <select class='form-select' id='turu' name='turuId'>";
                        while($rowTuru = $resultTuru->fetch_assoc()){
                            echo "<option value='". $rowTuru["Id"] ."' ";
                            if ($rowTuru["Id"] == $row["TuruId"]) {
                                echo "selected";
                            }
                            echo " >". $rowTuru["Name"] ."</option>";
                        }echo"
                    </select>
                </div>
                <div class='mb-3 mt-3'>
                    <label for='Explanation'>Açıklama:</label>
                    <textarea class='form-control' rows='5' id='explanation' name='explanation'>". $row["Explanation"] ."</textarea>
                </div>
                <div class='mb-3 mt-3'>
                    <label for='Img'>Resim:</label><br>
                    <input type='file' class='form-control' value='". $row["ImagePath"] ." name='img' id='img'>
                </div>
                <div class='mb-3 mt-3'>
                    <a class='btn btn-primary' href='partial/update.php?id=". $row["Id"] ."'>Düzenle</a>
                    <a class='btn btn-danger' href='partial/delete.php?id=". $row["Id"] ."'>Sil</a>
                </div>
            ";
        }
    }else {
        echo "0 result";
    }

    $conn->close();
?>