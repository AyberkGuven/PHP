<?php
    // veri geldi.
    // echo $_POST["cartNo"];
    // echo $_POST["cart"];
    // echo $_POST["optradio"];
    // echo $_POST["year"];
    // echo $_POST["mount"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ayberkguven9061";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }

    $cNo = $_POST["cartNo"];
    $Name = $_POST["cart"];
    $Turu = $_POST["optradio"];
    $Year = $_POST["year"];
    $Mount = $_POST["mount"];
    $Ileti = $_POST["check"];

    $sql = "INSERT INTO Cart (cartNo, Name, mountId, yearsId, Turu, iletiId) VALUES ('$cNo', '$Name', '$Mount', '$Year', '$Turu', $Ileti)";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>
