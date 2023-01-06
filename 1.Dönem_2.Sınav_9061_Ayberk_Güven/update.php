<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">  
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Öğrenci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Listele</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create.php">Yeni Kayıt</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="banner">
        <h1>Öğrenci Kayıt Düzenleme Ekranı</h1>
    </div>
    <form class="form1" action="partial/update_page.php" method="post" enctype="multipart/form-data">
        <?php
            include 'partial/update_list.php';
        ?>
    </form>
    <footer>
    <p>&copy; Company 2022</p>
    </footer>
</body>
</html>