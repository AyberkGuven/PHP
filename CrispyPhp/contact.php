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
            <div class="container">
                <h1>Leave a message</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="name">Full Name:</label>
                                    <input type="text" class="form-control" placeholder="Your Name" name="name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone">Phone Number:</label>
                                    <input type="tel" class="form-control" placeholder="123-456-7890" name="phone">
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="message">Message:</label>
                                <textarea class="form-control" rows="5" id="message" name="message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark">SEND</button>
                        </form>
                    </div>
                    <div class="col-sm-6 week">
                        <div>
                            <h4>Weekdays</h4>
                            <p>Monday to Friday</p><p>10.00 AM - 08.00 PM</p>
                        </div>
                        <div>
                            <h4>Weekends</h4>
                            <p>Saturday and Sunday</p><p>11.00 AM - 11.00 PM</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h3>121 Einstein Loop N, Bronx, NY 10475, United States</h3>
                    <div id="googleMap" style="width:100%;height:400px;"></div>
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
<script>
    function myMap() {
        var mapProp= {
        center:new google.maps.LatLng(51.508742,-0.120850),
        zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>