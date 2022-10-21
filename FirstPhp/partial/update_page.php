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
            $cinsiyet = $row["Gender"] == false ? "Erkek" : "Kadın";
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
                    <option>'. $cinsiyet .'</option>
                </select>
            </div>
            <div class="mb-3 mt-3">
                <label for="Class">Sınıf:</label>
                <select class="form-select" id="class" name="classId">';
                    while($rowClass = $resultClass->fetch_assoc()){
                        echo "<option value'". $rowClass["Id"] ."' >". $rowClass["Name"] ."</option>";
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

    $conn->close();

// echo'
//   <div class="mb-3 mt-3">
//   <label for="Name">Adı:</label>
//   <input type="text" class="form-control" id="name" placeholder="Adınızı Giriniz" name="name">
// </div>
// <div class="mb-3 mt-3">
//   <label for="SurName">Soyadı:</label>
//   <input type="text" class="form-control" id="surname" placeholder="Soyadınız Giriniz" name="surname">
//   </div>
// <div class="mb-3 mt-3">
//   <label for="Gender">Cinsiyeti:</label>
//   <select class="form-select" id="gender" name="gender" >
//       <option value="1">Kadın</option>
//       <option value="0">Erkek</option>
//   </select>
// </div>
// <div class="mb-3 mt-3">
//   <label for="Class">Sınıf:</label>
//   <select class="form-select" id="class" name="classId">">
//       <option>Amp 11V</option>
//       <option>Amp 12V</option> 
//   </select>
// </div>
// <div class="mb-3 mt-3">
//   <label for="Img">Resim:</label><br>
//   <input type="file" class="form-control" id="Image" name="fileToUpload" id="fileToUpload">
// </div>'

?>