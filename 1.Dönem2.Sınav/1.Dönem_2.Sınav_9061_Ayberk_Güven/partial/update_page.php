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

    $updateId = $_POST["SID"];
    $Name = $_POST["name"];
    $surName = $_POST["surname"];
    $Gender = $_POST["gender"];
    $classId = $_POST["classId"];
    $Image = basename($_FILES["fileToUpload"]["name"]);

    $uniqid = uniqid();

    $target_dir = "../partial/img/";
    $target_file = $target_dir. $uniqid. basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $ImageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
    if ($_FILES["fileToUpload"]["size"] > 500000) {
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
        // echo "Sorry, your file was not uploaded.";
        $sqlUpdate = "SELECT Id, imagePath FROM student";
        $resultUpdate = $conn->query($sqlUpdate);

        while ($rowUpdate = $resultUpdate->fetch_assoc()) {
            if ($rowUpdate["Id"] == $updateId) {
                $Image = $rowUpdate["imagePath"];
            }
        }
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            $Image = $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $sql = "UPDATE student SET Name = '$Name', surName = '$surName', Gender = '$Gender', classId = '$classId', imagePath = '$Image' WHERE Id = '$updateId'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Güncelleme Başarılı');</script>";
    }else {
        echo "<script>alert('Güncelleme Başarısız');</script>";
    }

    $conn->close();

    // echo $Image;
    header('Location: ../index.php');
?>