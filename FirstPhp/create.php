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
    <form class="form1" action="partial/create_page.php" method="post" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <label for="Name">Adı:</label>
            <input type="text" class="form-control" id="name" placeholder="Adınızı Giriniz" name="name">
        </div>
        <div class="mb-3 mt-3">
            <label for="SurName">Soyadı:</label>
            <input type="text" class="form-control" id="surname" placeholder="Soyadınız Giriniz" name="surname">
            </div>
        <div class="mb-3 mt-3">
            <label for="Gender">Cinsiyeti:</label>
            <select class="form-select" id="gender" name="gender">
                <option value="1">Kadın</option>
                <option value="0">Erkek</option>
            </select>
        </div>
        <div class="mb-3 mt-3">
            <label for="Class">Sınıf:</label>
            <select class="form-select" id="class" name="classId">
                <!-- Sınıf Listesi. -->
                <?php
                    include 'partial/class_list.php';
                ?>
                <!-- <option>Amp 11V</option>
                <option>Amp 12V</option> -->
            </select>
        </div>
        <div class="mb-3 mt-3">
            <label for="Img">Resim:</label><br>
            <input type="file" class="form-control" id="Image" name="fileToUpload" id="fileToUpload">
        </div>
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
    <footer>
    <p>&copy; Company 2020-2021</p>
    </footer>
</body>
</html>