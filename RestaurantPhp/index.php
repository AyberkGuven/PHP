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
                    session_start();
                    if (!isset($_SESSION['name'])) {
                        echo "<script>alert('Giriş yapınız');</script>";
                    }else {
                        echo "<p>Hoşgeldin: ".$_SESSION['name']."</p>";
                    }
                    session_destroy();
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
            <div class="row">
                <?php
                    include 'partial/data_list.php';
                ?>
                <!-- <div class="col-sm-4">
                    <div class="img">
                        <img src="img/page2_img1.jpg" alt="">
                        <p>Enerji</p>
                    </div>
                    <h3>Vitamin Deposu</h3>
                    <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</p>
                    <a href="#">Detay</a>
                </div>
                <div class="col-sm-4">
                    <div class="img">
                        <img src="img/page2_img2.jpg" alt="">
                        <p>Makarna</p>
                    </div>
                    <h3>İtalyan Usulü Spagetti</h3>
                    <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</p>
                    <a href="#">Detay</a>
                </div>
                <div class="col-sm-4">
                    <div class="img">
                        <img src="img/page2_img3.jpg" alt="">
                        <p>Salata</p>
                    </div>
                    <h3>Mevsim Salatası</h3>
                    <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</p>
                    <a href="#">Detay</a>
                </div>
                <div class="col-sm-4">
                    <div class="img">
                        <img src="img/page2_img4.jpg" alt="">
                        <p>Etli</p>
                    </div>
                    <h3>Mantarlı Tavuk</h3>
                    <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</p>
                    <a href="#">Detay</a>
                </div>
                <div class="col-sm-4">
                    <div class="img">
                        <img src="img/page2_img8.jpg" alt="">
                        <p>Tatlı</p>
                    </div>
                    <h3>Çilekli Çiskek</h3>
                    <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</p>
                    <a href="#">Detay</a>
                </div>
                <div class="col-sm-4">
                    <div class="img">
                        <img src="img/page2_img9.jpg" alt="">
                        <p>Çorba</p>
                    </div>
                    <h3>Mercimek</h3>
                    <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</p>
                    <a href="#">Detay</a>
                </div> -->
            </div>
        </div>
    </content>
    <footer class="container">
        <p>Tüm hakları Enfes Esnaf Lokantamıza aittir. &copy; Company 2013</p>
    </footer>
</body>
</html>