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
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="input d-flex flex-row">
                <input type="text" class="form-control" placeholder="SearchBox" aria-describedby="basic-addon1">
                <span class=" bg-primary" id="basic-addon1"><i class="fa fa-search"></i></span>
            </li>
            <li>
                <a href="signup.html">SIGN UP!</a>
            </li>
        </ul>
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
                            <a class="dropdown-item" href="#">Contact</a>
                            <a class="dropdown-item" href="register.html">Register Now</a>
                        </div>
                    </li>

                    <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-shopping-cart"> <span class="badge badge-dark"> 4</span></i><i class="fab fa-facebook-messenger"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!--BreadCrumb-->
<section id="breadcrumb">
    <div class="container">
        <nav aria-label="breadcrumb" class="border-bottom">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add_Cart</li>
            </ol>
        </nav>
    </div>
</section>






























































<!--To_Cart Section-->
<!--<section id="cart">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">


                <img style="border:1px solid #e8e8e6;" id="zoom_03" src="images/small/image3.png"
                     data-zoom-image="images/small/image3.png"
                     width="411"  />

                <div id="gallery_01" style="width:500px;float:left; ">

                    <a  href="#" class="elevatezoom-gallery active" data-update="" data-image="images/small/image1.png"
                        data-zoom-image="images/large/image1.jpg">
                        <img src="images/small/image1.png" width="100" class="img-fluid" /></a>

                    <a  href="#" class="elevatezoom-gallery"
                        data-image="images/small/image2.png"
                        data-zoom-image="images/large/image2.jpg">
                        <img src="images/small/image2.png" width="100" class="img-fluid" /></a>

                    <a href="#" class="elevatezoom-gallery"
                       data-image="images/small/image3.png"
                       data-zoom-image="images/large/image3.jpg">
                        <img src="images/small/image3.png" width="100"  class="img-fluid"/>
                    </a>

                    <a href="#" class="elevatezoom-gallery"
                       data-image="images/small/image4.png"
                       data-zoom-image="images/large/image4.jpg">
                        <img src="images/small/image4.png" width="100" class="img-fluid"/>
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
                    <button class="type bg-light ml-3"><a href="#">Add Cart</a></button>
                </div>
            </div>
        </div>
    </div>
</section>-->
<section id="pDetails">
    <div class="container">
        <div class="hidden-xs col-sm-6 col-md-6 col-lg-6">

            <img class = "cloudzoom" src = "images/small/image1.jpg"
                 data-cloudzoom = "zoomImage: 'images/large/image1.jpg'" />
            <br/> <br>
            <img class = 'cloudzoom-gallery' src = "images/zoom/thumbs/image1.jpg" data-cloudzoom = "useZoom: '.cloudzoom', image: 'images/small/image1.jpg', zoomImage: 'images/large/image1.jpg' " >
            <img class = 'cloudzoom-gallery' src = "images/zoom/thumbs/image2.jpg" data-cloudzoom = "useZoom: '.cloudzoom', image: 'images/small/image2.jpg', zoomImage: 'images/large/image2.jpg' " >
            <img class = 'cloudzoom-gallery' src = "images/zoom/thumbs/image3.jpg" data-cloudzoom = "useZoom: '.cloudzoom', image: 'images/small/image3.jpg', zoomImage: 'images/large/image3.jpg' " >

        </div>
        <div class="visible-xs hidden-sm hidden-lg hidden-md">

            <img style="border:1px solid #e8e8e6;" id="zoom_03" src="img2/small/image1.png"
                 data-zoom-image="img2/large/image1.jpg"
                 width="300px"  />

            <div id="gallery_01" style="width:300px;float:left; ">

                <a  href="#" class="elevatezoom-gallery active" data-update="" data-image="img2/small/image1.png"
                    data-zoom-image="img2/large/image1.jpg">
                    <img src="img2/small/image1.png" width="100px"  /></a>

                <a  href="#" class="elevatezoom-gallery"
                    data-image="img2/small/image2.png"
                    data-zoom-image="img2/large/image2.jpg">
                    <img src="img2/small/image2.png" width="100px"  /></a>

                <a href="#" class="elevatezoom-gallery"
                   data-image="img2/small/image3.png"
                   data-zoom-image="img2/large/image3.jpg">
                    <img src="img2/small/image3.png" width="100px"  />
                </a>

                <a href="#" class="elevatezoom-gallery"
                   data-image="img2/small/image4.png"
                   data-zoom-image="img2/large/image4.jpg">
                    <img src="img2/small/image4.png" width="100px"/>
                </a>

            </div>
        </div>

        <div class=" col-sm-6 col-md-6 col-lg-6">
            <p class="h3 text-uppercase text-center">Summer Dress</p>
            <!--star review-->
            <div class="text-muted">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                &nbsp
                <i class="text-muted small">3 reviews</i>
            </div>
            <br>

            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, blanditiis, sapiente.
                Aliquid amet, eius et fugiat inventore laboriosam
                libero necessitatibus neque sapiente sed! A adipisci cum eius esse pariatur. Architecto.
            </p>
            <br>
            <!--choose color & size-->

            <div class="row">
                <div class="col-sm-5 col-md-4 col-lg-4">
                    <select class="form-control" title="color">
                        <option>Select Color</option>
                        <option class="text-danger">Red</option>
                        <option class="text-success">Green</option>
                        <option class="text-muted">Grey</option>
                        <option class="text-warning">Yellow</option>
                    </select>

                </div>

                <div class="col-sm-5 col-md-4 col-lg-4">
                    <select class="form-control" title="size">
                        <option>Select  size</option>
                        <option class="danger">Large</option>
                        <option class="success">Medium</option>
                        <option class="muted">Small</option>
                        <option class="warning">X-Small</option>
                    </select>
                </div>

            </div>


            <br>

            <div class="row">
                <a href="#" class="col-sm-4 btn btn-addCart hvr-buzz text-uppercase">
                    add to card
                </a>
                <a href="#" class="col-sm-4 btn btn-default hvr-buzz" style="width:70px; padding: 10px">
                    <i class="glyphicon glyphicon-heart"></i>
                </a>
            </div>

            <div class="col-sm-4 col">
                <p></p>
                <p>
                </p>
                <div class="input-group">
          <span class="input-group-btn">
              <button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]">
                  <span class="glyphicon glyphicon-minus"></span>
              </button>
          </span>
                    <input title="sonkha" type="text" name="quant[2]" class="form-control input-number" value="2" min="1" max="4">
          <span class="input-group-btn">
              <button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
                  <span class="glyphicon glyphicon-plus"></span>
              </button>
          </span>
                </div>
                <p></p>
            </div>

        </div>

        <br>

        <div class="row">
            <div class="container">
                <p><strong>SKU:</strong><span class="text-muted">11763</span></p>
                <p><strong>Category:</strong><span class="text-muted">Accesories</span></p>
                <p><strong>Tags:</strong><span class="text-muted">Dress</span></p>

                <ul class="nav navbar-nav hidden-xs">
                    <li><a href="#"><i class="fa fa-twitter hvr-buzz"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook hvr-buzz"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus hvr-buzz"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin hvr-buzz"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo hvr-buzz"></i></a></li>
                </ul>


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
<!--zoom for mobile strt-->
<script src='js/'></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src='js/jquery.elevatezoom.js'></script>
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

</script>

<!--zoom for mobile stop-->

<!--product seller JS-->
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>
<script>
    var owl = $('.owl-carousel1');
    owl.owlCarousel({
        loop:true,
        nav:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            960:{
                items:4
            },
            1200:{
                items:5
            }
        }
    });
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY>0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });

    $('.owl-carousel2').owlCarousel({
        stagePadding: 50,
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:4
            },
            1000:{
                items:4
            }
        }
    })
</script>


<!--product seller JS stop-->


<script>

    /*input button plus minus start*/
    //plugin bootstrap minus and plus
    //http://jsfiddle.net/laelitenetwork/puJ6G/
    $('.btn-number').click(function(e){
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {

                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function(){
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {

        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }


    });
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    /*input button plus minus stop*/

</script>

<script src="js/custom.js"></script>
</body>
</html>