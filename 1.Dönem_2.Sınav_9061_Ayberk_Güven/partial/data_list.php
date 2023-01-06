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

    $sql = "SELECT student.Id AS sId, student.Name, student.surName, student.Gender, student.imagePath, class.Name AS cName FROM student INNER JOIN class on student.classId = class.Id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-hover'><thead><tr><th>Resmi</th><th>Adı Soyadı</th><th>Cinsiyeti</th><th>Sınıfı</th><th></th></tr></thead><tbody>";
        while ($row = $result->fetch_assoc()) {
            $cinsiyet = $row["Gender"] == false ? "Erkek" : "Kadın";
            echo
            "<tr>
                <td>
                    <img src='img/". $row["imagePath"] ."' />
                </td>
                <td>
                    ".$row["Name"]." ".$row["surName"]."
                </td>
                <td>
                    ". $cinsiyet ."
                </td>
                <td>
                    ". $row["cName"] ."
                </td>
                <td>
                    <a class='btn btn-submit' href='update.php?id=". $row["sId"] ."'>Düzenle</a>
                    <a class='btn btn-delete' href='partial/delete.php?id=". $row["sId"] ."'>Sil</a>
                </td>
            </tr>";
        }
        echo "</tbody></table>";
    }else {
        echo "0 results";
    }
    $conn->close();
?>