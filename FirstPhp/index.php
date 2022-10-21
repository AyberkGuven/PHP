<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">  
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" href="#">Öğrenci</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php">Listeleme</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="create.php">Yeni Kayıt</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="banner">
        <h1>Öğrenci Listeleme Ekranı</h1>
    </div>
    <div class="content1">
        <?php
            include 'partial/data_list.php';
        ?>
    </div>
    <footer>
    <p>&copy; Company 2020-2021</p>
    </footer>
</body>
</html>