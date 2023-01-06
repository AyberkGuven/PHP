<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "1_donem_2_sinav_9061_ayberk_guven";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");

    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM student WHERE Id=". $_GET["id"] ."";
    $sqlClass = "SELECT * FROM class";
    $result = $conn->query($sql);
    $resultClass = $conn->query($sqlClass);

    if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            echo "
            <input type='text' class='form-control' style='opacity: 0; color: #ffffff; position: fixed;' value='". $row["Id"] ."' id='SID' name='SID'>
            <div class='mb-3 mt-3'>
                <label for='Name'>Adı:</label>
                <input type='text' class='form-control' value='". $row["Name"] ."' id='name' name='name'>
            </div>
            <div class='mb-3 mt-3'>
                <label for='SurName'>Soyadı:</label>
                <input type='text' class='form-control' value='". $row["surName"] ."' id='surname' name='surname'>
                </div>
            <div class='mb-3 mt-3'>
                <label for='Gender'>Cinsiyeti:</label>
                <select class='form-select' id='gender' name='gender'>";
                    echo "<option value='".$row["Gender"]."'";
                    if ($row["Gender"] == "0") {
                        echo "selected >Erkek</option>";
                    }
                    if ($row["Gender"] == "1") {
                        echo "selected >Kadın</option>";
                    }echo"
                </select>
            </div>
            <div class='mb-3 mt-3'>
                <label for='Class'>Sınıf:</label>
                <select class='form-select' id='class' name='classId'>";
                    while ($rowClass = $resultClass->fetch_assoc()) {
                        echo "<option value='". $rowClass["Id"] ."' ";
                        if ($rowClass["Id"] == $row["classId"]) {
                            echo "selected";
                        }
                        echo " >". $rowClass["Name"] ."</option>";
                    }echo"
                </select>
            </div>
            <div class='mb-3 mt-3'>
                <label for='Img'>Resim:</label><br>
                <input type='file' class='form-control' name='fileToUpload' id='fileToUpload'>
            </div>
            <button type='submit' class='btn btn-primary'>Kaydet</button>
            ";
        }
    }
?>