<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "firstphp9061";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $sql = "SELECT student.Id AS sId, student.Name, student.SurName, student.Gender, student.ImagePath, class.Name AS cName FROM student INNER JOIN class on student.ClassId = class.Id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-hover'><thead><tr><th>Resmi</th><th>Adı Soyadı</th><th>Cinsiyeti</th><th>Sınıfı</th><th></th></tr></thead><tbody>";
        while ($row = $result->fetch_assoc()) {
            $cinsiyet = $row["Gender"] == false ? "Erkek" : "Kadın";
            echo
            "<tr>
                <td>
                    <img src='img/". $row["ImagePath"] ."' />
                </td>
                <td>
                    ".$row["Name"]." ".$row["SurName"]."
                </td>
                <td>
                    ". $cinsiyet ."
                </td>
                <td>
                    ". $row["cName"] ."
                </td>
                <td>
                    <a class='btn btn-primary' href='update.php?id=". $row["sId"] ."'>Düzenle</a>
                    <a class='btn btn-danger' href='partial/delete.php?id=". $row["sId"] ."'>Sil</a>
                </td>
            </tr>";
        }
        echo "</tbody></table>";
    }else {
        echo "0 results";
    }
    // <button type='submit' class='btn btn-danger' href='partial/delete.php?id=". $row["sId"] ."'>Sil</button>
    $conn->close();
?>