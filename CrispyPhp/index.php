<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crispy Kitchen Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div>
        <header>
            <nav class="navbar navbar-expand-sm bg-light justify-content-center">
                <a class="navbar-brand" href="index.php">Crispy Kitchen</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="mynavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Our Updates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <button class="btn btn-danger" type="button">Reservation</button>
                </div>
            </nav>
            <div class="banner">
                <div>
                    <div>
                        <h1>Our Menus</h1>
                        <p>Perfect Not all Breakfast, Lunch and Olmenar</p>
                    </div>
                </div>
            </div>
        </header>
        <content>
            <div class="content-Background">
                <div class="container">
                    <div class="breakfast row">
                        <h1>Breakfast Menu</h1>
                        <div class="card col-sm-4">
                            <img class="card-img-top" src="images/breakfast/brett-jordan-8xt8-HIFqc8-unsplash.jpg" alt="brett-jordan">
                            <div class="card-body">
                                <h4 class="card-title">Fresh Start</h4>
                                <p class="card-text">4.4/5</p><i></i>
                            </div>
                        </div>
                        <div class="card col-sm-4">
                            <img class="card-img-top" src="images/breakfast/lucas-swennen-1W_MyJSRLuQ-unsplash.jpg" alt="lucas-swennen">
                            <div class="card-body">
                                <h4 class="card-title">Baked Creamy</h4>
                                <p class="card-text">3/5</p><i></i>
                            </div>
                        </div>
                        <div class="card col-sm-4">
                            <img class="card-img-top" src="images/breakfast/louis-hansel-dphM2U1xq0U-unsplash.jpg" alt="louis-hansel">
                            <div class="card-body">
                                <h4 class="card-title">Burger Set</h4>
                                <p class="card-text">3/5</p><i></i>
                            </div>
                        </div>
                    </div>
                    <div class="lunch row">
                        <h1>Lunch Menu</h1>
                        <div class="card col-sm-6">
                            <img class="card-img-top" src="images/lunch/louis-hansel-cH5IPjaAYyo-unsplash.jpg" alt="brett-jordan">
                            <div class="card-body">
                                <h4 class="card-title">Fresh Start</h4>
                                <p class="card-text">4.2/5</p><i></i>
                            </div>
                        </div>
                        <div class="card col-sm-6">
                            <img class="card-img-top" src="images/lunch/louis-hansel-rheOvfxOlOA-unsplash.jpg" alt="lucas-swennen">
                            <div class="card-body">
                                <h4 class="card-title">Baked Creamy</h4>
                                <p class="card-text">3/5</p><i></i>
                            </div>
                        </div>
                    </div>
                    <div class="dinner row">
                        <h1>Dinner Menu</h1>
                        <div class="card col-sm-4">
                            <img class="card-img-top" src="images/dinner/keriliwi-c3mFafsFz2w-unsplash.jpg" alt="keriliwi">
                            <div class="card-body">
                                <h4 class="card-title">Fresh Start</h4>
                                <p class="card-text">4.4/5</p><i></i>
                            </div>
                        </div>
                        <div class="card col-sm-4">
                            <img class="card-img-top" src="images/dinner/farhad-ibrahimzade-ZipYER3NLhY-unsplash.jpg" alt="farhad-ibrahimzade">
                            <div class="card-body">
                                <h4 class="card-title">Baked Creamy</h4>
                                <p class="card-text">3/5</p><i></i>
                            </div>
                        </div>
                        <div class="card col-sm-4">
                            <img class="card-img-top" src="images/dinner/farhad-ibrahimzade-isHUj3N0194-unsplash.jpg" alt="farhad-ibrahimzade">
                            <div class="card-body">
                                <h4 class="card-title">Burger Set</h4>
                                <p class="card-text">3/5</p><i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </content>
        <footer>
            <div class="footer">
                <div class="container row">
                    <h3>Crispy Kitchen</h3>
                    <div class="col-sm-4">
                        <div>
                            <h4>Location</h4>
                            <p>121 Einstein Loop N, Bronx, NY 10475, United States</p>
                            <button class="btn btn-dark" type="button">Directions</button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <h4>Opening Hours</h4>
                            <p>Monday - Friday</p>
                            <p>10.00 AM - 08.00 PM</p>
                            <p>Tel: 010-02-0340</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <h4>Social</h4>
                            <div class="icon">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </div><br>
                            <p>Copyright &copy; 2022 Crispy Kitchen Co, Ltd. Design Tooplate</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>