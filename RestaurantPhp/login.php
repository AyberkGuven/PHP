<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- My CSS -->
    <link href="css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Ana Sayfa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servislerimiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Referanslarımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bize Ulaşın</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="d-flex">
                <a class="nav-link" href="login.php">Kullanıcı Girişi</a>
            </div> -->
        </div>
    </nav>
    <form class="form" action="partial/login_page.php" method="get" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <label for="Name" class="form-label">Adınız:</label>
            <input type="text" class="form-control" id="name" placeholder="Adınızı Giriniz" name="name">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Şifreniz:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Şifrenizi Giriniz" name="pswd">
        </div>
        <!-- <label for="Rank" class="form-label">Yetkiniz:</label>
        <select class="form-select" id="rank" name="rank">
            <option>Yönetici</option>
            <option>Kullanıcı</option>
        </select> -->
        <button type="submit" class="btn btn-primary">Giriş Yap</button>
    </form>
    <footer class="container">
        <p>Tüm hakları Enfes Esnaf Lokantamıza aittir. &copy; Company 2013</p>
    </footer>
</body>
</html>
<?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     include 'partial/login_page.php';
    // }else{
    //     echo "Giriş yapılmadı.";
    // }
?>