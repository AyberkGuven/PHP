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
            <form class="form" action="create.php" method="post" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="Name" class="form-label">Adınız:</label>
                    <input type="text" class="form-control" id="name" placeholder="Adınızı Giriniz..." name="name">
                </div>
                <div class="mb-3">
                    <label for="SurName" class="form-label">Soyadınız:</label>
                    <input type="text" class="form-control" id="surname" placeholder="Soyadınızı Giriniz..." name="surname">
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Kaydet</button>
            </form>
        </div>
    </content>
    <footer class="container">
        <p>&copy; Tüm Hakları Saklıdır.</p>
        <?php
            if (isset($_POST["submit"])) {
                $create = new Services();
                $result = $create->Create($_POST);

                echo $result;
            }
        ?>
    </footer>    
</body>
</html>

<!-- $_SERVER["REQUEST_METHOD"] == "POST" -->