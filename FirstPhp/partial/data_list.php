<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "firstphp9061";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $sql = "SELECT Id, Name, SurName, Gender, ImagePath, ClassId FROM student";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-hover'><thead><tr><th>Resmi</th><th>Adı Soyadı</th><th>Cinsiyeti</th><th>Sınıfı</th><th></th></tr></thead><tbody>";
        while ($row = $result->fetch_assoc()) {
            echo
            "<tr>
                <td>
                    <img src='img/".$row['ImagePath']."' />
                </td>
                <td>
                    ". $row['Name'] ."
                </td>
                <td>
                    ". $row['Gender'] == false ? 'Erkek' : 'Hayır' ."    
                </td>
                <td>
                    ". $row['ClassId'] ."
                </td>
                <td>
                    <button type='submit' class='btn btn-primary'>Düzenle</button>
                    <button type='submit' class='btn btn-danger'>Sil</button>
                </td>
            </tr>";
        }
        echo "</tbody></table>";
    }else {
        echo "0 results";
    }

    $conn->close();
?>