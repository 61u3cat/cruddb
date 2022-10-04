<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Classic E-Commerce</title>
    <style>
        body    {
            background-image: url('http://www.icanread.asia/uploads/homepage/2013/09/22/112_o_background.jpg');             //Image Credit to www.icanread.asia
        background-repeat: no-repeat;
        }
        @import url(https://fonts.googleapis.com/css?family=Lobster);
        /*panel heading*/
        #contact{
            background-image: url("images/parallax.jpg");
            background-attachment: fixed;
        }
        h1 {
            text-align:center;
            font-size: 28px;
            font-family: 'Lobster', cursive;
        }
        /*panel align center*/
        .col-centered{
            padding-top:25px;
            padding-bottom:25px;
        }
        /*property for the bootstrap panel*/
        .panel  {
            -webkit-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.3);
        }

        .panel-default > .panel-heading {
            color: #000 !important;
            background: #80bfff; /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(left top, #80bfff, #ffffff); /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(bottom right, #80bfff, #ffffff); /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(bottom right, #80bfff, #ffffff); /* For Firefox 3.6 to 15 */
            background: linear-gradient(to bottom right, #80bfff, #ffffff); /* Standard syntax */
            border-color: #99ccff !important;
            height:80px;
        }


        /*property for reset button*/
        button[type="reset"]    {
            background-color:transparent;
            border:1px solid black;
        }

        /*Glyphicon color*/
        .blue   {
            color: #80bfff;
        }
        iframe{
            width: 100%;
            height: 471px;
        }
        .form-control:focus {
            background-color: #fff;
            box-shadow: 0 0 0 .2rem rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body>
<!--Audio Section Start-->
<audio autoplay>
    <source src="sound/final.mp3" type="audio/ogg">
    Your browser does not support the audio element.
</audio>
<!--Header Section Starts-->
<header class="navbar-light fixed-top">
     <div id="head" class="bg-dark">
        <div class="row">
          
            <div class="col-md-12">
                <ul class="nav justify-content-end">
                    <li class="input d-flex flex-row">
                        <input type="text" class="form-control" placeholder="SearchBox" aria-describedby="basic-addon1">
                        <span class=" bg-primary" id="basic-addon1"><i class="fa fa-search"></i></span>
                    </li>
                    <li>
                        <a href="signup.html">SIGN UP!</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <h4>
                <a href="Home.html" class="navbar-brand">Classic</a>
            </h4>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><i class="fas fa-angle-down fa-2x"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-auto text-uppercase">
                    <li class="nav-item active"><a href="Home.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="men.html" class="nav-link">men</a></li>
                    <li class="nav-item"><a href="women.html" class="nav-link">women</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contact
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="contact.html">Contact</a>
                            <a class="dropdown-item" href="register.html">Register Now</a>
                        </div>
                    </li>

                    <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-shopping-cart"> <span class="badge badge-dark"> 4</span></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!--Contact-->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-centered">
                <div class="panel panel-default">
                    <div class="panel-heading" >
                        <h1>Contact Us</h1>
                    </div>
                    <form action="" method="POST">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user blue"></i></span>
                                    <input type="text" name="InputName" placeholder="Name" class="form-control" autofocus="autofocus" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope blue"></i></span>
                                    <input type="email" name="InputEmail" placeholder="Email" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone blue"></i></span>
                                    <input type="number" name="InputCno" placeholder="Phone" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-comment blue"></i></span>
                                    <textarea name="InputMessage" rows="6" class="form-control" type="text" required></textarea>
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-info pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                                <button type="reset" value="Reset" name="reset" class="btn">Reset <span class="glyphicon glyphicon-refresh"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-centered">
                <h2 style="color: crimson"><em>Google Map</em></h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.870157349821!2d91.82304115022016!3d22.358531046357122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd89b3aa02323%3A0xdf8831657635e14c!2sBITM+-+Chittagong+Campus!5e0!3m2!1sbn!2sbd!4v1527429961650" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>



<!--Sub-footer Section Starts-->
<section id="sub-footer">
    <div class="d-flex justify-content-between">
        <div class="p-2 bg-danger col-md-4">
        </div>
        <div class="p-2 col-md-4">
        </div>
        <div class="p-2 bg-primary col-md-4">
        </div>
    </div>
    <div class="container mt-3">
        <div class="row d-flex justify-content-between">
            <div class="col-md-3 col-xl-3 col-lg-3 col-sm-6">
                <h3>SERVICE FOR YOU</h3>
                <ul class="list-unstyled mt-3">
                    <li ><a href="#"><i class="fas fa-angle-double-right"></i> Order Status</a></li>
                    <li><a href="#"><i class="fas fa-angle-double-right"></i> Payment Methods</a></li>
                    <li><a href="#"><i class="fas fa-angle-double-right"></i> Delivary and Returnes</a></li>
                    <li><a href="#"><i class="fas fa-angle-double-right"></i> Privacy Policy</a></li>
                    <li><a href="#"><i class="fas fa-angle-double-right"></i> Terms And Condition</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xl-3 col-lg-3 col-sm-6">
                <h3>ABOUT  INFO</h3>
                <ul class="list-unstyled mt-3">
                    <li><a href="#"><i class="fas fa-angle-double-right"></i> My Account</a></li>
                    <li><a href="#"><i class="fas fa-angle-double-right"></i> Order History</a></li>
                    <li><a href="#"><i class="fas fa-angle-double-right"></i> Wish List</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12">
                <h3>Our History</h3>
                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.</p>
            </div>
        </div>
    </div>
</section>

<!--footer Section Starts-->
<section class="bg-dark p-2">
    <div class="container">
        <p class="text-light text-center mt-2">&copy;Copyright 2015 by Classic. All Rights Reserved.</p>
    </div>
</section>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>