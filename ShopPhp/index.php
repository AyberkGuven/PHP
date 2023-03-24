<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div id="wrapper">
        <div class="page shadow">
            <div id="header">
                <div class="primary-section">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo.png" alt="logo" title="webgranth">
                        </a>
                    </div>
                    <div class="header-aside">
                        <span>+90 120 4735100</span>
                    </div>
                </div>
                <div class="nav-section">
                    <ul class="navigation">
                        <li><a href="index.php">Anasayfa</a></li>
                        <li><a href="#">Ürünler</a></li>
                        <li><a href="create.php">Yeni Kayıt</a></li>
                    </ul>
                    <ul class="search-box">
                        <li>
                            <input type="text" value="Ara..." id="user_search" autocomplete="off" onkeypress="submitenter_search(event);" onblur="if(this.value=='')this.value='search';" onfocus="if(this.value=='search')this.value=''">
                        </li>
                        <li class="sms-last">
                            <input type="submit" value="" class="submit">
                            <a href="#"> search</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div>
                <!-- Banner -->
                <div id="content" class="container">
                    <div class="sidebar">
                        <div class="lates-product">
                            <h2>Kategoriler</h2>
                            <ul class="info">
                                <li><a href="#">Cep Telefonları</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-right">
                        Slider
                        <!-- <div class="banner">
                            <div class="slides">
                                <div class="slides_container">
                                    <div class="imgeslider">
                                        <img src="images/lapy.jpg" alt="lapy" title="product">
                                        <div class="banner-text">
                                            <h1>Lorem Ipsum</h1>
                                            <span>Lorem Ipsum is simply</span>
                                            <p>Lorem Ipsum is simply dummy text of the priting</p>
                                            <a href="#">Click Here <span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                <!-- Banner Sonu -->
                <!-- Ürünler -->
                <div id="content">
                    <div class="content-row">
                        <div class="product-info">

                        </div>
                    </div>
                </div>
                <!-- Ürünler Sonu  -->
            </div>

            <div id="footer">
                <div class="page">
                    <div class="footer-bottom">
                        <div class="copyright">
                            <ul>
                               <li>&copy; 2018</li>
                               <li><a href="#" class="select">HTTP </a>Uygulama Sınavı</li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/slides.min.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('.slides').slides({
            preload: true,
            generatePagination: true,
            play: 3000
        });
    });
</script>