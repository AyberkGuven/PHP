<?php
    session_start();
?>
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
            <div class="d-flex">
                <?php
                    switch ($_COOKIE['yetki']) {
                        case '1':
                            echo "<p>Hoşgeldin: ".$_SESSION['name']."</p>";
                            break;
                        case '2':
                            header('Location: index.php');
                            break;
                        default:
                            # code...
                            break;
                    }
                    // if (isset($_SESSION['name']) == "user") {
                    //     header('Location: index.php');
                    //     // echo "<script>alert('Giriş yapınız');</script>";
                    // }else {
                    //     echo "<p>Hoşgeldin: ".$_SESSION['name']."</p>";
                    //     // if (!isset($_COOKIE['yetki']) == 2) {
                    //     //     header('Location: login.php');
                    //     // }
                    // }
                    // session_destroy();
                ?>
                <a class="nav-link" href="partial/logout.php">Çıkış Yap</a>
            </div>
        </div>
    </nav>
    <header class="banner">
        <div class="container">
            <h1>Esnaf Lokantamıza Hoşgeldiniz</h1>
            <p>Lokantalarımızda Türkiye ve Dünya Mutfağından tüm yemekleri bulan şanımız vardır. Afiyet Olsun</p>
        </div>
    </header>
    <content>
        <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
                <?php
                    include 'partial/detay_page.php';
                ?>
            </form>
        </div>
    </content>
    <footer class="container">
        <p>Tüm hakları Enfes Esnaf Lokantamıza aittir. &copy; Company 2013</p>
    </footer>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["select"] == 1) {
            include 'partial/delete.php';
        }else {
            include 'partial/update.php';
        }
    }else{
        // echo "Çalışmadı";
    }
?>