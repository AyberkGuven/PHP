<?php

    if ($resultUpdate->num_rows > 0) {
        while ($row = $resultUpdate->fetch_assoc()) {
            echo "
                <input type='text' class='form-control' style='opacity: 0; color: #ffffff; position: fixed;' value='". $row["Id"] ."' id='SID' name='SID'>
                <div class='mb-3 mt-3'>
                    <label for='Name' class='form-label'>Adınız:</label>
                    <input type='text' class='form-control' value='". $row["Name"] ."' id='name' name='name'>
                </div>
                <div class='mb-3 mt-3'>
                    <label for='SurName' class='form-label'>Soyadınız:</label>
                    <input type='text' class='form-control' value='". $row["SurName"] ."' id='surname' name='surname'>
                </div>
                <button type='submit' class='btn btn-primary'>Kaydet</button>
            ";
        }
    }else {
        echo "0 results";
    }
?>