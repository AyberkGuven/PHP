<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Online Odeme Sayfasi</title>
</head>
<body>
    <nav></nav>
    <div class="container-sm">
        <h1>Online Ödeme Sayfası</h1>
        <form class="form1" action="partial/data_list.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="Cart" class="form-label">Kart Sahibi</label>
                <input type="text" class="form-control" id="cart" name="cart" require>
            </div>
            <div class="mb-3">
                <label for="CartNo" class="form-label">Kart Numarası</label>
                <input type="text" class="form-control" id="cartNo" name="cartNo" require>
            </div>
            <div class="mb-3">
                <label class="form-label">Kart Türü</label>
            </div>
            <div class="form-check flex">
                <div>
                    <input type="radio" class="form-check-input" id="radio" name="optradio" value="0">
                    <label class="form-check-label" for="radio">Master</label>
                </div>
                <div>
                    <input type="radio" class="form-check-input" id="radio" name="optradio" value="1">
                    <label class="form-check-label" for="radio">Visa</label>
                </div>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Ay</label>
                <select class="form-select" name="mount">
                    <?php 
                        include 'partial/mount.php';
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Yıl</label>
                <select class="form-select" name="year">
                    <?php
                        include 'partial/years.php';
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Size nasıl ulaşabiliriz ?</label>
            </div>
            <div class="form-check mb-3">
                <?php
                    include 'partial/ileti.php';
                ?>
            </div>
            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>
    </div>
    <footer></footer>
</body>
</html>

<?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     include 'partial/bilgi.php';
    // }
    include 'partial/bilgi.php';
?>