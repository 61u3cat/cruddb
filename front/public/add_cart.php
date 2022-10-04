<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--CSS -->
    <link rel="stylesheet" href="css/style.css">
    <script src='js/jquery-1.8.3.min.js'></script>
    <script src='js/jquery.elevatezoom.js'></script>

    <title>Classic E-Commerce</title>
</head>
<body>
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

<!--BreadCrumb-->
<section id="breadcrumb">
    <div class="container">
        <div class="item wow bounceInLeft animated" data-wow-delay="0.2s" style="visibility: visible; -webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
        <nav aria-label="breadcrumb" class="border-bottom">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add_Cart</li>
            </ol>
        </nav>
            </div>
    </div>
</section>


<!--To_Cart Section-->
<section id="cart">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">


                <img style="border:1px solid #e8e8e6;" id="zoom_03" src="images/small/image3.jpg"
                     data-zoom-image="images/small/image3.jpg"
                     width="411"  />

                <div id="gallery_01" style="width:500px;float:left; ">

                    <a  href="#" class="elevatezoom-gallery active" data-update="" data-image="images/small/image1.jpg"
                        data-zoom-image="images/large/image1.jpg">
                        <img src="images/small/image1.jpg" width="100" class="img-fluid" /></a>

                    <a  href="#" class="elevatezoom-gallery"
                        data-image="images/small/image2.jpg"
                        data-zoom-image="images/large/image2.jpg">
                        <img src="images/small/image2.jpg" width="100" class="img-fluid" /></a>

                    <a href="#" class="elevatezoom-gallery"
                       data-image="images/small/image3.jpg"
                       data-zoom-image="images/large/image3.jpg">
                        <img src="images/small/image3.jpg" width="100"  class="img-fluid"/>
                    </a>
                </div>

            </div>
            <div class="col-md-6 col-sm-6">
                <h3>Super Skinny In Tiger Camo</h3>
                <ul class="nav pt-2">
                    <li class="nav-item active"><a href="#" class="nav-link"><i class="fas fa-star"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-star"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-star"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-star"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-star"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">1Review</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">|</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Add Your Review</a></li>
                </ul>
                <p class="pl-2">$229.00</p>
                <p>Availity : <span>In Stock</span></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ....</p>
                <div class="d-flex justify-content-start">
                    <div class="dropdown">
                        <label>QTY : </label>
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Select one
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#" data-value="another action">Adoration</a></li>
                            <li><a href="#" data-value="something else here">Ordering a White Russian</a></li>
                            <li><a href="#" data-value="separated link">Complaint</a></li>
                            <li><a href="#" data-value="separated link">I am lost</a></li>
                        </ul>
                    </div>
                    <button class="type bg-light ml-3"><a href="signup.html">Add Cart</a></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Cart Description section-->
<section id="description">
    <div class="container">
        <div class="row border-bottom pb-3 pt-3">
                <div class="col-md-4 col-6">
                <ul class="nav">
                    <li class="nav-item active"><a href="#product" data-target="#product" data-toggle="collapse" class="nav-link" aria-expanded="false" aria-controls="collapseExample">More Products</a></li>
                </ul>
            </div>
                <div class="col-md-4 col-6">
                    <ul class="nav">
                        <li class="nav-item"><a data-toggle="collapse" data-target="#desc" href="#desc" role="button" class="nav-link" aria-expanded="false" aria-controls="collapseExample">Description</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4">
                <ul class="nav">
                    <li class="nav-item"><a data-toggle="collapse" data-target="#info" href="#info" role="button"  class="nav-link" aria-expanded="false" aria-controls="collapseExample">Additional information</a></li>
                </ul>
            </div>
        </div>
        <div class="accordion">
               <div id="desc" class="collapse" data-parent=".accordion" aria-labelledby="headingOne">
                   <div class="mt-4 jumbotron">
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</p>

                       <p> aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>

                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam.</p>
                   </div>
               </div>
               <div id="info" class="collapse" data-parent=".accordion" aria-labelledby="headingTwo">
                <div class="mt-4 jumbotron">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam.</p>
                </div>
            </div>
               <div class="collapse.show" id="product" data-parent=".accordion" aria-labelledby="headingThree">
                   <div class="mt-4 row">
                       <div class="col-md-5">
                           <a href="#"><img src="images/add_cart/pro1.jpg" alt="Product One" class="img-fluid"></a>
                       </div>
                       <div class="col-md-7">
                           <h2>Lorem ipsum dolor sit amet</h2>
                           <p class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                       </div>
                   </div>
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
<!-- Optional JavaScript -->

<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery.elevatezoom.js"></script>
<script>
    $(".dropdown-menu li a").click(function(){
        $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
        $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#zoom_03").elevateZoom({ zoomType: "inner", zoomWindowFadeIn: 500, zoomWindowFadeOut: 750, cursor: "crosshair", gallery:'gallery_01', galleryActiveClass: "active", imageCrossfade: true, loadingIcon: "http://www.elevateweb.co.uk/spinner.gif"});

        $("#zoom_03").bind("click", function(e) {
            var ez =   $('#zoom_03').data('elevateZoom');
            ez.closeAll(); //NEW: This function force hides the lens, tint and window
            $.fancybox(ez.getGalleryList());
            return false;
        });

    });

</script>



<script type="text/javascript">
    $(document).ready(function () {
        $("#img_01").elevateZoom({gallery:'gal1', cursor: 'pointer', galleryActiveClass: "active", imageCrossfade: true, loadingIcon: "http://www.elevateweb.co.uk/spinner.gif"});

        $("#img_01").bind("click", function(e) {
            var ez =   $('#img_01').data('elevateZoom');
            ez.closeAll(); //NEW: This function force hides the lens, tint and window
            $.fancybox(ez.getGalleryList());
            return false;
        });

    });

    <!-- Optional JavaScript -->
    <script>
    $(".dropdown-menu li a").click(function(){
        $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
        $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
    });
</script>

</body>
</html>