<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uygulama_sinavi_ayberk_guven_9061";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");

    if($conn->connect_error){
        die("Connection Failed: ".$conn->conntect_error);
    }

    $Name = $_POST["name"];
    $Email = $_POST["email"];
    $Explanation = $_POST["explanation"];
    
    $sql = "INSERT INTO Message(Name, Email, Explanation)VALUES('$Name', '$Email', '$Explanation')";
    
    // echo $sql;

    if($conn->query($sql) === TRUE){
        header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
        exit();
    }else{
        echo "Error: "; 
    }

    $conn->close();
?>