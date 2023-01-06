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
    <title>Kullanıcı</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Ana Sayfa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="list.php">Kullanıcılar</a>
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
            <form class="form" action="update.php" method="post" enctype="multipart/form-data">
                <?php
                    if (!$_POST) {
                        $get_Update = new Services();
                        $resultUpdate = $get_Update->get_UpdateData();

                        include 'partial/update_page.php';
                    }
                ?>
            </form>
        </div>
    </content>
    <footer class="container">
        <p>&copy; Tüm Hakları Saklıdır.</p>
        <?php
            if (isset($_POST["submit"])) {
                $update = new Services();
                $result = $update->Update($_POST);

                echo $result;
            }
        ?>
    </footer>    
</body>
</html>
<!-- $_SERVER["REQUEST_METHOD"] == "POST" -->