<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pato</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse d-flex" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">AnaSayfa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Rezervasyon</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">İletişim</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="banner">
            <img src="img/banner.jpg" alt="Banner">
        </div>
    </header>
    <content>
        <div class="row content">
            <div class="col-sm-6">
                <?php
                    include 'partial/data-list.php';
                ?>                
            </div>
            <div class="col-sm-6">
                <?php
                    include 'partial/data-list_Right.php'
                ?>
            </div>
        </div>
    </content>
    <content>
        <div class="form">
            <div class="container">
                <h2>MESAJINIZ</h2>
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Adınız</label>
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email Adreasiniz</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="phone" class="form-label">Telefon Numaranız</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Phone" name="phone">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="message">Mesajınız</label>
                        <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-dark">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </content>
    <footer>
        <p>2022@ Pato Restorant</p>
    </footer>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'partial/user-message.php';
    }else{
        echo "
            <script>
                alert('Çalışmadı...');
            </script>
        ";
    }
?>