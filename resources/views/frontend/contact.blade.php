
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="css/style.css">

    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light container">
    <a class="navbar-brand" href="home.php">
        <img src="images/logo.PNG" style="display: inline-block;">
        <span style="display: inline-block;"></span>
    </a>
</nav>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <header class="container">
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <li><a href="{{route('index')}}">HOME</a></li>
                <span><a class="sr-only">(current)></a></span></li>
                </li>
                <li class="nav-item dropdown">
                <li> <a  href="{{route('programs.index')}}">PROGRAMS</a></li>
                </li>
                <li class="nav-item">
                <li><a href="{{route('abouts.index')}}">ABOUT</a></li>
                </li>
                <li class="nav-item">
                <li><a href="{{route('contacts.index')}}">CONTACT US</a></li>
                </li>
            </ul>

        </div>
    </header>
</nav>
        <div class="container pt-50 pb-20">
                <div class="row contact-home">
          <div class="col-lg-8">
            <div class="contact-form">
              <h2 class="title text-center">Get In Touch</h2>
              <hr class="bg-light">
              <h5 class="text-center text-success"> </h5>

                <div class="col-md-7 col-sm-7 col-xs-12 ">
                    <div class="reply-area contact-wrapper">

                        <p>I must explain to you how all this a mistaken idea of ncing great explorer of the rut the is lder of human happinescias unde omnis iste natus error sit volptatem </p>
                        <form method="post" action="contacts">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                            <div class="form-group col-lg-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Enter your name" required>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-at"></i></span>

                                    <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter your email" required>

                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>

                                    <input type="text" name="subject" class="form-control" autocomplete="off" placeholder="Enter Subject" required>

                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>

                                    <textarea id="message" name="message" class="form-control" autocomplete="off" placeholder="Write Message" cols="30" rows="4" required>
                          </textarea>

                                </div>
                            </div>
                                <div  class="form-group col-md-6">
                                    <button class="btn btn-danger" type="submit" ><span>Sent Message</span></button>
                                </div>

                            <!-- <button type="submit" class='btn btn-primary'>Send Message</button> -->
                        </form>
                    </div>
                </div>
                </div>
            </div>

          <div class="col-sm-4">
              <h2 class="title text-center">Contact Info</h2><br>
              <address class="address-wrapper">
                <p>All In One Notes</p>
              <p>Kathmandu Nepal</p>
              <p>Mobile: +9779842529871</p>
              <p>Email: parajuliavishek@gmail.com</p>
              </address>
          </div>
    </div>
        </div>
    <div class="contact-area pt-50>
    <div class="map-area>
        <!-- google-map-area start -->
        <div class="google-map-area">
            <!--  Map Section -->
            <div id="contacts" class="map-area">
                <div id="googleMap" style="width:100%;height:440px;"></div>
            </div>
        </div>
    </div>
</div>
        <footer class="page-footer font-small mdb-color lighten-3 pt-4">
            <div class="container text-center text-md-left">
                <div class="row">
                    <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
                        <h5 class="font-weight-bold text-uppercase mb-4">Our Mission</h5>
                        <p>We intend to change the current trend of education and help students and teachers simplify teaching learning environment.</p>
                        <p>The question is what we wanted to do with the new life God has given us. This is the mission we want to take on.</p>

                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
                        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

                        <ul class="list-unstyled">
                            <li>
                                <p>
                                    <a href="Programs.php">Programs</a>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <a href="About.php">About Us</a>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <a href="Contact.php">Contact Us</a>
                                </p>
                            </li>
                        </ul>

                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
                        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

                        <ul class="list-unstyled">
                            <li>
                                <p>
                                    <i class="fas fa-home mr-3"></i> Kathmandu, Nepal</p>
                            </li>
                            <li>
                                <p>
                                    <i class="fas fa-envelope mr-3"></i> parajuliavishek@gmail.com</p>
                            </li>
                            <li>
                                <p>
                                    <i class="fas fa-phone mr-3"></i> +9779842529871</p>
                            </li>
                        </ul>

                    </div>

                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 col-lg-2 text-center mx-auto my-4">
                        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>
                        <li>
                            <a  href="https://www.facebook.com" class="btn-floating btn-fb">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a  href="https://www.twitter.com" class="btn-floating btn-tw">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a  href="https://www.google.com" class="btn-floating btn-gplus">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
                <a href="#"> Enotes.com</a>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM "></script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        var mapOptions = {
            zoom: 17,
            center: new google.maps.LatLng(	26.4785345,87.273450), // Nepal
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        };
        var mapElement = document.getElementById('googleMap');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation:google.maps.Animation.BOUNCE,
            icon: 'img/map-marker.png',
            map: map
        });
    }
</script>
<script src="js/main.js"></script>

        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text></svg>
        </body>
        </html>
