<?php
    // tabledan id geldi.
    // echo $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "firstphp9061";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM student WHERE Id=". $_GET["id"] ." ";
    $sqlClass="SELECT * FROM class";
    $result = $conn->query($sql);
    $resultClass=$conn->query($sqlClass);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            // $cinsiyet = $row["Gender"] == false ? "Erkek" : "Kadın";
            echo '
            <div class="mb-3 mt-3">
                <label for="Name">Adı:</label>
                <input type="text" class="form-control" value="'. $row["Name"] .'" id="name" placeholder="Adınızı Giriniz" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="SurName">Soyadı:</label>
                <input type="text" class="form-control" value="'. $row["SurName"] .'" id="surname" placeholder="Soyadınız Giriniz" name="surname">
            </div>
            <div class="mb-3 mt-3">
                <label for="Gender">Cinsiyeti:</label>
                <select class="form-select" id="gender" name="gender" >
                    <option value="0" ';
                    if ($row["Gender"] == 0) {
                        echo "selected";
                    }
                    echo ' >Erkek</option>
                    <option value="1" ';
                    if ($row["Gender"] == 1) {
                        echo "selected";
                    }
                    echo ' >Kadın</option>
                </select>';
                echo'
            </div>
            <div class="mb-3 mt-3">
                <label for="Class">Sınıf:</label>
                <select class="form-select" id="class" name="classId">';
                    while($rowClass = $resultClass->fetch_assoc()){
                        echo "<option value'". $rowClass["Id"] ."' ";
                        if ($rowClass["Id"] == $row["ClassId"]) {
                            echo "selected";
                        }
                        echo " >". $rowClass["Name"] ."</option>";
                    }echo'
                </select>
            </div>
            <div class="mb-3 mt-3">
                <label for="Img">Resim:</label><br>
                <input type="file" class="form-control" value="'. $row["ImagePath"] .'" id="Image" name="fileToUpload" id="fileToUpload">
            </div>';
        }
    } else {
    echo "0 results";
    }

    $UpdateId = $_GET["id"];
    $Name = $_POST["name"];
    $SurName = $_POST["surname"];
    $Gender = $_POST["gender"];
    $Class = $_POST["classId"];
    $Image = basename($_FILES["fileToUpload"]["name"]);

    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {

        echo $_FILES["fileToUpload"]["tmp_name"];
        echo "</br>";
        echo  $target_file;

        // $test="C:\wamp64\tmp\phpE775.tmp";
        $hedef="../img/";
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],  $hedef)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $sqlUpdate = "UPDATE student SET Name = $Name, SurName = $SurName, Gender = $Gender, ClassId = $Class, ImagePath = $Image WHERE Id=$UpdateId ";

    if ($conn->query($sqlUpdate) === TRUE) {
        echo "<script>alert('Güncelleme Başarılı');</script>";
    }else {
        echo "<script>alert('Güncelleme Başarısız');</script>";
    }

    $conn->close();

?>
<!-- // echo'
  <div class="mb-3 mt-3">
  <label for="Name">Adı:</label>
  <input type="text" class="form-control" id="name" placeholder="Adınızı Giriniz" name="name">
</div>
<div class="mb-3 mt-3">
  <label for="SurName">Soyadı:</label>
  <input type="text" class="form-control" id="surname" placeholder="Soyadınız Giriniz" name="surname">
  </div>
<div class="mb-3 mt-3">
  <label for="Gender">Cinsiyeti:</label>
  <select class="form-select" id="gender" name="gender" >
      <option value="1">Kadın</option>
      <option value="0">Erkek</option>
  </select>
</div>
<div class="mb-3 mt-3">
  <label for="Class">Sınıf:</label>
  <select class="form-select" id="class" name="classId">">
      <option>Amp 11V</option>
      <option>Amp 12V</option> 
  </select>
</div>
<div class="mb-3 mt-3">
  <label for="Img">Resim:</label><br>
  <input type="file" class="form-control" id="Image" name="fileToUpload" id="fileToUpload">
</div>' -->
