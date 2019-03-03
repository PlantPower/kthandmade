<!DOCTYPE html>
<html>

  <head>
  <meta charset="utf-8">
    <title>KT HandMade</title>
      <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >
      <link href="styles/bootstrap.min.css" rel="stylesheet">
      <link href="styles/style.css" rel="stylesheet">
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

    <!-- HEADER STARTS HERE -->

    <div id="top"><!-- top Starts -->
      <div class="container"><!-- container Starts -->
        <div class="col-md-6 offer"><!-- col-md-6 offer Starts -->
          <a href="#" class="btn btn-success btn-sm" >Welcome: Guest</a>
          <a href="#">Shopping Cart Total Price: $ , Total Items 4</a>

        </div><!-- col-md-6 offer Ends -->
        <div class="col-md-6"><!-- col-md-6 Starts -->
          <ul class="menu"><!-- menu Starts -->
            <li>
              <a href="customer_register.php">Register</a>
            </li>
            <li>
              <a href="checkout.php" >My Account</a>
            </li>
            <li>
              <a href="cart.php">Go to Cart</a>
            </li>
            <li>
              <a href='checkout.php'> Login </a>
            </li>
          </ul><!-- menu Ends -->
        </div><!-- col-md-6 Ends -->
      </div><!-- container Ends -->
    </div><!-- top Ends -->
    
    <!-- HEADER ENDS HERE -->

    <!-- NAVBAR START HERE -->

    <div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->
      <div class="container" ><!-- container Starts -->
        <div class="navbar-header"><!-- navbar-header Starts -->
          <a class="navbar-brand home" href="index.php" ><!--- navbar navbar-brand home Starts -->
            <img src="" alt="KT Handmade Shop" class="hidden-xs" >
            <img src="images/ktlogoRS.jpg" alt="kthandmadelogosmall" class="visible-xs" >
          </a><!--- navbar navbar-brand home Ends -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >
            <span class="sr-only" >Toggle Navigation </span>
              <i class="fa fa-align-justify"></i>
          </button>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >
            <span class="sr-only" >Toggle Search</span>
              <i class="fa fa-search" ></i>
          </button>
        </div><!-- navbar-header Ends -->
        <div class="navbar-collapse collapse" id="navigation" ><!-- navbar-collapse collapse Starts -->
          <div class="padding-nav" ><!-- padding-nav Starts -->
            <ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->
              <li class="active">
              <a href="index.php"> Home </a>
              </li>
              <li>
              <a href="shop.php"> Shop </a>
              </li>
              <li>
              <a href='checkout.php' >My Account</a>
              </li>
              <li>
              <a href="cart.php"> Shopping Cart </a>
              </li>
              <li>
              <a href="contact.php"> Contact Us </a>
              </li>
            </ul><!-- nav navbar-nav navbar-left Ends -->
          </div><!-- padding-nav Ends -->
          <a class="btn btn-primary navbar-btn right" href="cart.php"><!-- btn btn-primary navbar-btn right Starts -->
            <i class="fa fa-shopping-cart"></i>
            <span>4 items in cart </span>
          </a><!-- btn btn-primary navbar-btn right Ends -->
          <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->
            <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
              <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search"></i>
            </button>
          </div><!-- navbar-collapse collapse right Ends -->
          <div class="collapse clearfix" id="search"><!-- collapse clearfix Starts -->
            <form class="navbar-form" method="get" action="results.php"><!-- navbar-form Starts -->
              <div class="input-group"><!-- input-group Starts -->
                <input class="form-control" type="text" placeholder="Search" name="user_query" required>
                  <span class="input-group-btn"><!-- input-group-btn Starts -->
                  <button type="submit" value="Search" name="search" class="btn btn-primary">
                    <i class="fa fa-search"></i>
                  </button> 
                </span><!-- input-group-btn Ends -->
              </div><!-- input-group Ends -->
            </form><!-- navbar-form Ends -->
          </div><!-- collapse clearfix Ends -->
        </div><!-- navbar-collapse collapse Ends -->
      </div><!-- container Ends -->
    </div><!-- navbar navbar-default Ends -->

    <!-- SLIDER STARTS HERE -->
    <!-- BUt Im not Sure If I will use a slider yet, have to consider -->

    <div class="container" id="slider"> <!-- container starts -->
      <div class="col-md-12"><!-- col-md-12 starts -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide starts -->
          <ol class="carousel-indicators"><!--carousel indicators starts -->
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          </ol> <!-- carousel indicators ends -->
          <div class="carousel-inner"><!--carousel-inner starts -->
            <div class="item active">
              <img src="admin_area/slider_images/ktslider1.jpg" alt="KTslider 1">
            </div>
            <div class="item">
              <img src="admin_area/slider_images/ktslider2.jpg" alt="KTslier 2">
            </div>
          </div> <!-- carousel-inner ends -->
          <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel starts -->
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a><!-- left carousel ends -->
          <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel starts -->
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a><!-- left carousel ends -->          
        </div> <!-- carousel slide ends -->
      </div> <!--col-md-12 ends -->
    </div> <!-- container ends --> 
    <div id="advantages"><!-- advantages starts -->
      <div class="container"><!-- container starts -->
        <div class="same-height-row"><!--same-heigh-row starts -->
          <div class="col-sm-4"><!--col sm 4 starts -->
            <div class="box same-height"><!--box same height starts -->
              <div class="icon">
                <i class="fa fa-heart"></i>
              </div>
              <h3>
                <a href="#">KT Handmade</a>
              </h3>
              <p>Celebrate this years Valentines day with Love</p>
            </div> <!--box same-height ends -->
          </div><!-- col sm 4 ends -->
          <div class="col-sm-4"><!--col sm 4 starts -->
            <div class="box same-height"><!--box same height starts -->
              <div class="icon">
                <i class="fa fa-heart"></i>
              </div>
              <h3>
                <a href="#">Created by Us</a>
              </h3>
              <p>We provied the best quality handmade in the city</p>
            </div> <!--box same-height ends -->
          </div><!-- col sm 4 ends -->
          <div class="col-sm-4"><!--col sm 4 starts -->
            <div class="box same-height"><!--box same height starts -->
              <div class="icon">
                <i class="fa fa-heart"></i>
              </div>
              <h3>
                <a href="#">Handmade</a>
              </h3>
              <p>We creaty yor ideas</p>
            </div> <!--box same-height ends -->
          </div><!-- col sm 4 ends -->                    
          

      </div> <!--same-height-row ends -->
      </div> <!--container ends -->
    </div> <!--advantages ends -->

    <div id="hot"><!-- hot starts -->
      <div class="box"><!--box starts -->
        <div class="container"><!--container starts -->
          <div class="col-md-12"> <!--col md 12 starts -->
            <h2>Latest This Week</h2>
          </div> <!--colmd12 ends -->
        </div> <!--container ends -->
      </div> <!--box ends -->
    </div> <!-- hot ends -->

    <div id="content" class="container"><!-- container starts -->
      <div class="row"><!--row starts-->
        <div class="col-sm-4 col-sm-6 single"><!--colsm4colsm6single-->
          <div class="product"><!--product starts-->
            <a href="details.php">
              <img class="img-responsive" src="admin_area/product_images/product1.jpg" alt="">
            </a>
          </div><!--product ends-->
          <div class="text"><!--text starts-->
            <h3>
              <a href="details.php">KT Products</a>
            </h3>
            <p class="price">$50</p>
            <p class="buttons">
              <a class="btn btn-default" href="details.php">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i>Add to Cart
              </a>
            </p>
          </div><!--text ends-->
        </div><!--colsm4colsm6 single ends-->

        <div class="col-sm-4 col-sm-6 single"><!--colsm4colsm6single-->
          <div class="product"><!--product starts-->
            <a href="details.php">
              <img class="img-responsive" src="admin_area/product_images/product1.jpg" alt="">
            </a>
          </div><!--product ends-->
          <div class="text"><!--text starts-->
            <h3>
              <a href="details.php">KT Products</a>
            </h3>
            <p class="price">$50</p>
            <p class="buttons">
              <a class="btn btn-default" href="details.php">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i>Add to Cart
              </a>
            </p>
          </div><!--text ends-->
        </div><!--colsm4colsm6 single ends-->

        <div class="col-sm-4 col-sm-6 single"><!--colsm4colsm6single-->
          <div class="product"><!--product starts-->
            <a href="details.php">
              <img class="img-responsive" src="admin_area/product_images/product1.jpg" alt="">
            </a>
          </div><!--product ends-->
          <div class="text"><!--text starts-->
            <h3>
              <a href="details.php">KT Products</a>
            </h3>
            <p class="price">$50</p>
            <p class="buttons">
              <a class="btn btn-default" href="details.php">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i>Add to Cart
              </a>
            </p>
          </div><!--text ends-->
        </div><!--colsm4colsm6 single ends-->

        <div class="col-sm-4 col-sm-6 single"><!--colsm4colsm6single-->
          <div class="product"><!--product starts-->
            <a href="details.php">
              <img class="img-responsive" src="admin_area/product_images/product1.jpg" alt="">
            </a>
          </div><!--product ends-->
          <div class="text"><!--text starts-->
            <h3>
              <a href="details.php">KT Products</a>
            </h3>
            <p class="price">$50</p>
            <p class="buttons">
              <a class="btn btn-default" href="details.php">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i>Add to Cart
              </a>
            </p>
          </div><!--text ends-->
        </div><!--colsm4colsm6 single ends-->

        <div class="col-sm-4 col-sm-6 single"><!--colsm4colsm6single-->
          <div class="product"><!--product starts-->
            <a href="details.php">
              <img class="img-responsive" src="admin_area/product_images/product1.jpg" alt="">
            </a>
          </div><!--product ends-->
          <div class="text"><!--text starts-->
            <h3>
              <a href="details.php">KT Products</a>
            </h3>
            <p class="price">$50</p>
            <p class="buttons">
              <a class="btn btn-default" href="details.php">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i>Add to Cart
              </a>
            </p>
          </div><!--text ends-->
        </div><!--colsm4colsm6 single ends-->

        <div class="col-sm-4 col-sm-6 single"><!--colsm4colsm6single-->
          <div class="product"><!--product starts-->
            <a href="details.php">
              <img class="img-responsive" src="admin_area/product_images/product1.jpg" alt="">
            </a>
          </div><!--product ends-->
          <div class="text"><!--text starts-->
            <h3>
              <a href="details.php">KT Products</a>
            </h3>
            <p class="price">$50</p>
            <p class="buttons">
              <a class="btn btn-default" href="details.php">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i>Add to Cart
              </a>
            </p>
          </div><!--text ends-->
        </div><!--colsm4colsm6 single ends-->

        <div class="col-sm-4 col-sm-6 single"><!--colsm4colsm6single-->
          <div class="product"><!--product starts-->
            <a href="details.php">
              <img class="img-responsive" src="admin_area/product_images/product1.jpg" alt="">
            </a>
          </div><!--product ends-->
          <div class="text"><!--text starts-->
            <h3>
              <a href="details.php">KT Products</a>
            </h3>
            <p class="price">$50</p>
            <p class="buttons">
              <a class="btn btn-default" href="details.php">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i>Add to Cart
              </a>
            </p>
          </div><!--text ends-->
        </div><!--colsm4colsm6 single ends-->

        <div class="col-sm-4 col-sm-6 single"><!--colsm4colsm6single-->
          <div class="product"><!--product starts-->
            <a href="details.php">
              <img class="img-responsive" src="admin_area/product_images/product1.jpg" alt="">
            </a>
          </div><!--product ends-->
          <div class="text"><!--text starts-->
            <h3>
              <a href="details.php">KT Products</a>
            </h3>
            <p class="price">$50</p>
            <p class="buttons">
              <a class="btn btn-default" href="details.php">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart"></i>Add to Cart
              </a>
            </p>
          </div><!--text ends-->
        </div><!--colsm4colsm6 single ends-->
      </div> <!--row ends-->
    </div> <!--container ends-->
    <?php
      include("includes/footer.php");
    ?>

    <!-- SLIDER ENDS HERE -->

    <script src="js/jquery.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
