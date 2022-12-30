<?php
    require 'services/services.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Ana Sayfa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="create.php">Kayıt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <content>
        <div class="container">
            <?php
                $students = new Services();
                $result=$students->get_Data();

                include 'partial/data_list.php';

                // if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    if (isset($_GET["id"]) == null){
                        // echo "Veri Yok...";
                        // $update = new Services();
                        // $resultUpdate = $update->Update();
                    }else {
                        switch ($_GET["btn"]) {
                            case 0:
                                $delete = new Services();
                                $resultDelete = $delete->Delete();
                                break;
                            case 1:
                                echo "update";
                                // $update = new Services();
                                // $resultUpdate = $update->Update();
                                break;
                            default:
                                # code...
                                break;
                        }
                        // if (isset($_GET["btn"]) == 0) {
                        //     $delete = new Services();
                        //     $resultDelete = $delete->Delete();
                        // }elseif (isset($_GET["btn"]) == 1) {
                        //     echo "update";
                        //     // $update = new Services();
                        //     // $resultUpdate = $update->Update();
                        // }
                    }
                // }
            ?>
        </div>
    </content>
    <footer class="container">
        <p>&copy; Tüm Hakları Saklıdır.</p>
    </footer>
</body>
</html>