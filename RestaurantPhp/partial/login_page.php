<?php
    // Database Kullanmadan
    // $Kullanici_Adı = "admin";
    // $Şifre = "12345";
    // $Rank = "Yönetici";
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //     $Form_Name = $_POST['name'];
    //     $Form_Pswd = $_POST['pswd'];
    //     $Form_Rank = $_POST['rank'];

    //     if ($Form_Name == $Kullanici_Adı && $Form_Pswd == $Şifre && $Form_Rank == $Rank) {
    //         $_SESSION['Kullanici_Adı'] = $Form_Name;
    //         $_SESSION['Şifre'] = $Form_Pswd;
    //         $_SESSION['Rank'] = $Form_Rank;

    //         header('Location: index.php');
    //     }else {
    //         echo "<script>alert=('Kullanıcı adı veya şifre yanlış. Tekrar deneyiniz!');</script>";
    //         // header('Location: ../login.php');
    //     }
    // }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lokantadb_mysql_9061";
    session_start();

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn -> set_charset("utf8");

    if ($conn -> connect_error ) {
        die("Connection Failed: " . $conn->connect_error);
    }
    
    $Form_Name = $_POST["name"];
    $Form_Pswd = $_POST["pswd"];
    $Form_Rank = $_POST["rank"];
    
    $sql = "SELECT * FROM users WHERE users.Name = '".$Form_Name."' and users.Password = '".$Form_Pswd."' AND users.rankId = '". $Form_Rank ."'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $_SESSION['name'] = $Form_Name;
        setcookie($Form_Rank, "", time() + (86400 * 30), "/"); // 86400 = 1 Gün
        header('Location: ../index.php');

        // Sorgu yapılmasına gerek yok.
        // if (!$Form_Name == NULL && !$Form_Pswd == NULL && !$Form_Rank == NULL) {
        //     $_SESSION['name'] = $Form_Name;
        //     // $_SESSION['Password'] = $Şifre;
        //     // $_SESSION['rName'] = $Rank;
        //     header('Location: ../index.php');
        // }else {
        //     echo "Kullanıcı adı veya şifre yanlış. Lütfen Tekrar deneyin. ";
        //     header('Location: ../login.php');
        // }

        // Döngü ile de yapılabilir.
        // while ($row = $result->fetch_assoc()) {
        //     $_SESSION['name'] = $row["Name"];
        //     echo "Data bulundu";
        //     header('Location: ../index.php');
            
        // }
    }else{
        // login sayfasına
        echo "Kullanıcı adı veya şifre yanlış. Lütfen Tekrar deneyin.";
        header('Location: ../login.php');
    }

    $conn->close();
?>