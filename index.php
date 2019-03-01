<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <title>KT HandMade </title>
      <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >
      <link href="styles/bootstrap.min.css" rel="stylesheet">
      <link href="styles/styles.css" rel="stylesheet">
      <link href="fontawesome/css/font-awesome.min.css" rel="stylesheet">

  </head>
  <body>
    <div id="top"><!-- top Starts -->
      <div class="container"><!-- container Starts -->
        <div class="col-md-6 offer"><!-- col-md-6 offer Starts -->
          <a href="#" class="btn btn-success btn-sm" >Welcome: Guests</a>
          <a href="#">Shopping Cart Total Price: $, Total Items : 2</a>

        </div><!-- col-md-6 offer Ends -->
        <div class="col-md-6"><!-- col-md-6 Starts -->
          <ul class="menu"><!-- menu Starts -->
            <li>
              <a href="customer_register.php">Register</a>
            </li>
            <li>
              <a href='checkout.php'>My Account</a>;
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

    <div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->
      <div class="container" ><!-- container Starts -->
        <div class="navbar-header"><!-- navbar-header Starts -->
          <a class="navbar-brand home" href="index.php" ><!--- navbar navbar-brand home Starts -->
            <img src="images/ktlogoRS.jpg" alt="kthandmade logo" class="hidden-xs" >
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
              <a href="checkout.php">My Account</a>
            </li>
            <li>
              <a href="contact.php"> Contact Us </a>
            </li>
          </ul><!-- nav navbar-nav navbar-left Ends -->
        </div><!-- padding-na v Ends -->

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
        <div class="collapse clearfix" id="search"> <!-- collapse clearfix starts -->
          <form action="results.php" method="get" class="navbar-form"><!-- navbar-form starts -->
            <div class="input-group"> <!-- input group starts -->
              <input type="text" placeholder="Search" name="user_query" class="input-group" required>
              <button type="submit" value="Search" name="search" class="btn btn-primary">
                <i class="fa fa-search"></i>
              </button>
            </div> <!--inout group ends -->
          </form> <!-- navbar-form ends -->
        </div> <!-- collapse clearfix ends -->
      </div> <!-- navbar-collapse collapse ends -->
    </div> <!-- conatiner ends -->
  </div> <!--navbar navbar-default ends-->


    <script src="js/jquery.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
