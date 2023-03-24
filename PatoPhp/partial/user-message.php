<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pato_php";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");

    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);
    }

    $Name = $_POST["name"];
    $Email = $_POST["email"];
    $Phone = $_POST["phone"];
    $Message = $_POST["message"];

    $sql = "INSERT INTO Users(Name, Email, Phone, Message)VALUES('Name', 'Email', '', '')";
?>