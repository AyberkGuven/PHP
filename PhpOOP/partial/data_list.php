<?php
    
    if ($result->num_rows > 0) {
        echo "<table class='table table-hover'><thead><tr><th>Adı</th><th>Soyadı</th><th></th></tr></thead><tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>". $row["Name"] ."</td>
                <td>". $row["SurName"] ."</td>
                <td>
                    <a class='btn btn-success' href='index.php?id=". $row["Id"] ."&btn=1'>Güncelle</a>
                    <a class='btn btn-danger' href='index.php?id=". $row["Id"] ."&btn=0'>Sil</a>
                </td>
            </tr>";
        }
        echo "</tbody></table>";
    }else {
        echo "0 results";
    }
?>
                <!-- <td>
                    <button type='submit' class='btn btn-success'>Güncelle</button>
                    <button type='submit' class='btn btn-danger'>Sil</button>
                </td> -->