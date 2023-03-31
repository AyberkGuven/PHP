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

    $Name = $_POST["name"];;
    $BrandId = $_POST["brand"];;
    $KindId = $_POST["kind"];;
    $Price = $_POST["price"];;
    $Image = basename($_FILES["fileToUpload"]["name"]);

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $ImageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - ". $check["imagePath"] .".";
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
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {

        echo $_FILES["fileToUpload"]["tmp_name"];
        echo "</br>";
        echo  $target_file;

        $hedef="../upload/";
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],  $hedef)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $sql = "INSERT INTO product (Name, brandId, kindId, Price, imagePath) VALUES ('$Name', '$BrandId', '$KindId', '$Price', '$Image')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    
    header("location:../index.php");
?>