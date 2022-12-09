<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lokantadb_mysql_9061";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $UpdateId = $_POST["SID"];
    $Name = $_POST["name"];
    $Explanation = $_POST["explanation"];
    $Image = basename($_FILES["img"]["name"]);
    $Turu = $_POST["turuId"];

    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $ImageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - ". $check["ImagePath"] .".";
            $uploadOk = 1;
        }else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
  
    // Check file size
    if ($_FILES["img"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($ImageFileType != "jpg" && $ImageFileType != "png" && $ImageFileType != "jpeg" && $ImageFileType != "gif" ) {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {

        echo $_FILES["img"]["tmp_name"];
        echo "</br>";
        echo  $target_file;

        // $test="C:\wamp64\tmp\phpE775.tmp";
        $hedef="img/";
        if (move_uploaded_file($_FILES["img"]["tmp_name"],  $hedef)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $sqlUpdate = "UPDATE menu SET Name = '$Name', Explanation = '$Explanation', ImagePath = '$Image', TuruId = '$Turu' WHERE Id=$UpdateId ";

    // echo $sqlUpdate;

    if ($conn->query($sqlUpdate) === TRUE) {
        echo "<script>alert('Güncelleme Başarılı');</script>";
    }else {
        echo "<script>alert('Güncelleme Başarısız');</script>";
    }

    $conn->close();

    header('Location: ../index.php');
?>