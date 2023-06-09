<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="image/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#causes">Causes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div>
        <img src="image/banner.jpg" class="banner" alt="Banner">
    </div>

    <div>
        <h1>Featured Cause</h1>
        <span></span>
        <!-- <div class="row">
            <div class="col card-cause">
                <div class="row">
                    <div class="col">
                        <img src="image/Cause-img1.jpg" class="cause-imgs" alt="cause1">
                    </div>
                    <div class="col">
                        <h5>Fundraiser for kids</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        <button class="btn-contact">Donate Now</button>
                    </div>
                </div>
            </div>
            <div class="col card-cause">
                <div class="row">
                    <div class="col">
                        <img src="image/Cause-img2.jpg" class="cause-imgs" alt="cause2">
                    </div>
                    <div class="col">
                        <h5>Fundraiser for kids</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        <button class="btn-contact">Donate Now</button>
                    </div>
                </div>
            </div>
        </div> -->

    </div>


    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <input type="text" class="form-control" id="name" placeholder="Name" name="name">
        </div>
        <div class="mb-3 mt-3">
            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>
        <div class="mb-3 mt-3">
            <textarea class="form-control" rows="11" id="explanation" name="explanation"
                placeholder="Message"></textarea>
        </div>
        <button type="submit" name="submit" id="submit" class="btn-contact">Contact us</button>
    </form>

</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //include 'partial/user-message.php';

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
        
        echo $sql;
        
        if($conn->query($sql) === TRUE){
            $conn->close();
            header_remove();
            header( "Location: {$_SERVER['REQUEST_URI']}", true, 303 );
            exit();
        }else{
            echo "Error: ";
            $conn->close();
          
        }
          
        
    }else{
        echo "Çalışmadı";
    }
?>