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
              <li>
              <a href="index.php"> Home </a>
              </li>
              <li class="active">
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

    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div> <!-- col md 12 -->
            <div class="col-md-3">
                <?php
                    include("includes/sidebar.php");
                ?>
            </div><!-- col md 3 -->
            <div class="col-md-9"><!-- col md 9 -->
              <div class="box">
                <h1>Shop</h1>
                <p>Lori Ipsum Lori IpsumLori IpsumLori Ipsum Lori Ipsum
                Lori Ipsum Lori Ipsum Lori Ipsum Lori Ipsum Lori Ipsum 
                Lori Ipsum Lori Ipsum Lori Ipsum Lori Ipsum Lori Ipsum Lori Ipsum
                Lori Ipsum Lori Ipsum Lori Ipsum</p>
              </div><!-- box -->

              <div class="row">
                <div class="col-md-4 col-sm-6 center-responsive">
                  <div class="product">
                    <a href="details.php">
                      <img src="admin_area/product_images/product1.jpg" class="img-responsive" alt="Product Image">
                    </a>
                    <div class="text">
                      <h3><a href="details.php">Product Text</a></h3>
                    </div>
                    <p class="price">€50</p>
                    <p class="buttons">
                      <a href="details.php" class="btn btn-default">View Details</a>
                      <a href="details.php" class="btn btn-primary">
                        <i class="fa fa-shopping-cart">Add to Cart</i>
                      </a>
                    </p>
                  </div> <!-- product -->
                </div> <!-- colmd4 colsm6 -->

                <div class="col-md-4 col-sm-6 center-responsive">
                  <div class="product">
                    <a href="details.php">
                      <img src="admin_area/product_images/product1.jpg" class="img-responsive" alt="Product Image">
                    </a>
                    <div class="text">
                      <h3><a href="details.php">Product Text</a></h3>
                    </div>
                    <p class="price">€50</p>
                    <p class="buttons">
                      <a href="details.php" class="btn btn-default">View Details</a>
                      <a href="details.php" class="btn btn-primary">
                        <i class="fa fa-shopping-cart">Add to Cart</i>
                      </a>
                    </p>
                  </div> <!-- product -->
                </div> <!-- colmd4 colsm6 -->

                <div class="col-md-4 col-sm-6 center-responsive">
                  <div class="product">
                    <a href="details.php">
                      <img src="admin_area/product_images/product1.jpg" class="img-responsive" alt="Product Image">
                    </a>
                    <div class="text">
                      <h3><a href="details.php">Product Text</a></h3>
                    </div>
                    <p class="price">€50</p>
                    <p class="buttons">
                      <a href="details.php" class="btn btn-default">View Details</a>
                      <a href="details.php" class="btn btn-primary">
                        <i class="fa fa-shopping-cart">Add to Cart</i>
                      </a>
                    </p>
                  </div> <!-- product -->
                </div> <!-- colmd4 colsm6 -->

                <div class="col-md-4 col-sm-6 center-responsive">
                  <div class="product">
                    <a href="details.php">
                      <img src="admin_area/product_images/product1.jpg" class="img-responsive" alt="Product Image">
                    </a>
                    <div class="text">
                      <h3><a href="details.php">Product Text</a></h3>
                    </div>
                    <p class="price">€50</p>
                    <p class="buttons">
                      <a href="details.php" class="btn btn-default">View Details</a>
                      <a href="details.php" class="btn btn-primary">
                        <i class="fa fa-shopping-cart">Add to Cart</i>
                      </a>
                    </p>
                  </div> <!-- product -->
                </div> <!-- colmd4 colsm6 -->

                <div class="col-md-4 col-sm-6 center-responsive">
                  <div class="product">
                    <a href="details.php">
                      <img src="admin_area/product_images/product1.jpg" class="img-responsive" alt="Product Image">
                    </a>
                    <div class="text">
                      <h3><a href="details.php">Product Text</a></h3>
                    </div>
                    <p class="price">€50</p>
                    <p class="buttons">
                      <a href="details.php" class="btn btn-default">View Details</a>
                      <a href="details.php" class="btn btn-primary">
                        <i class="fa fa-shopping-cart">Add to Cart</i>
                      </a>
                    </p>
                  </div> <!-- product -->
                </div> <!-- colmd4 colsm6 -->

                <div class="col-md-4 col-sm-6 center-responsive">
                  <div class="product">
                    <a href="details.php">
                      <img src="admin_area/product_images/product1.jpg" class="img-responsive" alt="Product Image">
                    </a>
                    <div class="text">
                      <h3><a href="details.php">Product Text</a></h3>
                    </div>
                    <p class="price">€50</p>
                    <p class="buttons">
                      <a href="details.php" class="btn btn-default">View Details</a>
                      <a href="details.php" class="btn btn-primary">
                        <i class="fa fa-shopping-cart">Add to Cart</i>
                      </a>
                    </p>
                  </div> <!-- product -->
                </div> <!-- colmd4 colsm6 -->

              </div> <!-- row -->
              <center>
                <ul class="pagination">
                  <li><a href="shop.php">First Page</a></li>
                  <li><a href="shop.php">2</a></li>
                  <li><a href="shop.php">3</a></li>
                  <li><a href="shop.php">4</a></li>
                  <li><a href="shop.php">5</a></li>
                  <li><a href="shop.php">Last Page</a></li>
                </ul>
              </center>
            </div> <!-- col md 9 -->
        </div><!--container ends -->
    </div> <!-- content ends -->

    <?php
      include("includes/footer.php");
    ?>

    <!-- SLIDER ENDS HERE -->

    <script src="js/jquery.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>