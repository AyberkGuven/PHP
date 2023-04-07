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
                            <a class="nav-link" href="story.php">Story</a>
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
            <div class="bannerStory">
                <div>
                    <div>
                        <h1>Kitchen Story</h1>
                        <p>This is how our kitchen evoled in new digital era</p>
                    </div>
                </div>
            </div>
        </header>
        <content>
            <div>
                <div>
                    <div class="row template">
                        <div class="col-sm-6">
                            <h2>Crispy is the lates bootstrap 5 HTML template provided by Tooplate website.</h2>
                            <button class="btn btn-dark" type="button">Check out News</button>
                            <button type="button" class="btn btn-danger">Say Hi</button>
                        </div>
                        <div class="col-sm-6 link">
                            <p>Since this website template is 100% free to use, you can edit and apply is for your commercial restaurant websites. There are is HTML pages included in this template. Please <strong>click "Reservation" button</strong>on the top right to see the pop up reservation form.</p>
                            <p>You are NOT allowed to redistribute the template ZIP file on any template donwnload website. Please <a href="contact.php">contact us</a> for more information.</p>
                        </div>
                    </div>
                    <div class="breakfast">
                        <div class="contentStory row">
                            <h1>Team Members</h1>
                            <div class="card col-sm-4">
                                <img class="card-img-top" src="images/team/matthew-hamilton-tNCH0sKSZbA-unsplash.jpg" alt="hamilton">
                                <div class="card-body">
                                    <h4 class="card-title">Sophia</h4>
                                    <p class="card-text">CEO & Founder</p><i></i>
                                </div>
                            </div>
                            <div class="card col-sm-4">
                                <img class="card-img-top" src="images/team/nicolas-horn-MTZTGvDsHFY-unsplash.jpg" alt="nicolas-horn">
                                <div class="card-body">
                                    <h4 class="card-title">Benjamin W.</h4>
                                    <p class="card-text">Restaurant Manager</p><i></i>
                                </div>
                            </div>
                            <div class="card col-sm-4">
                                <img class="card-img-top" src="images/team/rc-cf-FMh5o5m5N9E-unsplash.jpg" alt="cf">
                                <div class="card-body">
                                    <h4 class="card-title">Muchen Jack</h4>
                                    <p class="card-text">Senior Chef</p><i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row newsletter">
                        <div class="col">
                            <img class="rounded-circle circleimg" src="images/charles-deluvio-FdDkfYFHqe4-unsplash.jpg" alt="">
                        </div>
                        <div class="col">
                            <h4>Our Newsletter</h4>
                            <p>The food news every day</p>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-3 mt-3">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Your email address" name="email">
                                </div>
                                <button type="submit" class="btn btn-dark btnStory">SUBSCRIBE</button>
                            </form>
                            <p>Uy signing up, you agree to our Privacy Notice and the data policy</p>
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